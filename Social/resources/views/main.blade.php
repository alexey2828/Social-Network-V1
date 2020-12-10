

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src="{{ asset('js/app.js') }}" defer></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/497433271567908874/754417072661987430/pngkit_water-circle-png_6239282.png" type="gx-icon">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>
<br>
@include('layouts.header')
<br><br>
<body style="background-color: #f5f5f7; ">
	<div class="mobile">
	<div id="preloader" class="visible"></div>
	<div class="container" style="max-width: 1300px;">
		<div class="row" style=" max-width: 1500px;">
			<div class="col-md-8"><br></div>
			<div class="col"></div>
		</div>
	</div>
	<div class="container" style="max-width: 1300px;">
		<div class="row">
			<div class="col-3">
				<div id="SideMenuComponent">
					<side-menu-component></side-menu-component>
				</div>
			</div>
			<div class="col-6">
				<div class="card card-post shadow-sm" style="width: 100%">
				      <div class="card-header">
				        <h5>
				        @auth
                            @if(Auth::user()->avatar != null)
                            <div style="background: url('{{asset('images/'.Auth::user()->avatar)}}') no-repeat center; width: 40px; height: 40px; border-radius: 50%; background-size: cover;"></div>
                            @else
                            <div style="background: url('https://m.media-amazon.com/images/M/MV5BMTc3Njg2MTE4Ml5BMl5BanBnXkFtZTcwMDc4MTUzNA@@._V1_.jpg') no-repeat center; width: 30px; height: 30px; border-radius: 50%; background-size: cover;"></div> 
                            @endif
                        @else
                        <div style="background: url('https://m.media-amazon.com/images/M/MV5BMTc3Njg2MTE4Ml5BMl5BanBnXkFtZTcwMDc4MTUzNA@@._V1_.jpg') no-repeat center; width: 30px; height: 30px; border-radius: 50%; background-size: cover;"></div> 
                    @endauth
				         <a id="username">Create Post</a></h5>
				      </div>
				      <div class="card-body">
				      	<div id="preloader2" class="visible2"></div>
      					@if ($errors->any())
      					<div class="alert alert-danger">
      					    <ul>
      					        @foreach($errors->all() as $error)
      					            <li>{{ $error }}</li>
      					        @endforeach
      					    </ul>
      					</div>
      					@endif
				      	<form method="post" action="{{ route('upload_posts') }}" enctype="multipart/form-data">
    				        @csrf
    				        <input type="file" multiple name="file[]" type="file" id="selectedFile" style="display: none;" />
    				        <div class="form-group">
    				            <textarea name="body" id="editableTextarea"  onkeyup='ViewText();' id="new-post-input" type="text" placeholder="What do u think?" class="form-control"></textarea>
    				        </div>

    				    <button type="submit" class="btn-my">Upload!</button>
				    	</form>
				    	<button multiple name="file[]" type="button" value="" style="background: white; border: silver; border-radius: 5px;" onclick="document.getElementById('selectedFile').click();" /><img width="23" height="23" src="https://img.icons8.com/ios-filled/50/767676/installing-updates.png"/></button>
				    	<!-- Link to open the modal -->
						<a href="#ex1" rel="modal:open"><img id="ico" src="https://img.icons8.com/material-sharp/48/767676/happy.png"/></a>
						<button id="btn-edit-text" onclick="change_text('-b', '~b'); ViewText();"><img id="ico" src="https://img.icons8.com/ios-filled/50/767676/b.png"/></button> 
						<button id="btn-edit-text" onclick="change_text('-s', '~s'); ViewText();"><img id="ico" src="https://img.icons8.com/ios-filled/50/767676/strikethrough.png"/></button>
						<button id="btn-edit-text" onclick="change_text('-i', '~i'); ViewText();"><img id="ico" src="https://img.icons8.com/ios-filled/50/767676/italic.png"/></button>
						<button id="btn-edit-text" onclick="change_text('-u', '~u'); ViewText();"><img id="ico" src="https://img.icons8.com/android/24/767676/underline.png"/></button>

						<input id="btn-edit-text" type="color" onchange="change_text('<font color=' + this.value + '>', '</font>'); ViewText();">
						<!-- Modal HTML embedded directly into document -->
						<div id="ex1" style="height: 500px;" class="modal">
						  <a href="#" rel="modal:close">Close</a>
						  <p>Thanks for clicking. That felt good.</p>
						  <div class="emoj-list">
						  	<button id="btn-edit-text" onclick="change_text(':peperetard:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/attachments/757185406361141268/757193500595978370/8908_peperetard.png"></button>
						  	<button id="btn-edit-text" onclick="change_text(':sadpepe:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/attachments/757185406361141268/757185457015488542/2049_pepe.png"></button>
						  	<button id="btn-edit-text" onclick="change_text(':feelsmugman:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/attachments/757185406361141268/757185507204530226/1592_feelsmugman.png"></button>
						  	<button id="btn-edit-text" onclick="change_text(':feelsevilman:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/attachments/757185406361141268/757185458852593754/3371_feelsevilman2.png"></button>
						  	<button id="btn-edit-text" onclick="change_text(':BearPepe:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/attachments/757185406361141268/757185459981123584/4140_BearPepe.png"></button>
						  	<button id="btn-edit-text" onclick="change_text(':peepoU:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/attachments/757185406361141268/757185461327233065/4517_peepoU.png"></button>
						  	<button id="btn-edit-text" onclick="change_text(':YEP:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/attachments/757185406361141268/757185462531129364/4810_YEP.png"></button>
						  	<button id="btn-edit-text" onclick="change_text(':PepeLaugh:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/attachments/757185406361141268/757185463873175582/6158_PepeLaugh.png"></button>
						  	<button id="btn-edit-text" onclick="change_text(':Tea:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/attachments/757185406361141268/757185465085329479/6727_Tea.png"></button>
						  	<button id="btn-edit-text" onclick="change_text(':Blanket:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/attachments/757185406361141268/757185465874120704/7017_Blanket.png"></button>
						  	<button id="btn-edit-text" onclick="change_text(':peepoPain:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/attachments/757185406361141268/757185467060846612/7465_peepoPain.png"></button>
						  	<button id="btn-edit-text" onclick="change_text(':pepe_glasses:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/attachments/757185406361141268/757185468633710692/7672_pepe_glasses.png"></button>
						  	<button id="btn-edit-text" onclick="change_text(':Daenerys_Heart:', '⠀'); ViewText();"><img width="35" src="https://cdn.discordapp.com/emojis/403295311189245952.png?v=1"></button>
						  </div>
						</div>
				      </div>
				</div><!--<div class="bottom"></div>-->
				<br>
<!--post card-->
	<div class="container">
		<div id="preloader4" class="visible4"></div>
	</div>
			@foreach($posts as $post)
				<div class="card card-post shadow-sm" style="width: 100%;">
				      <div class="card-header">
				        <img id="ico" src="https://img.icons8.com/material-rounded/50/2d3436/user-group-man-man.png"/> PHP Development {{ $post->id }}
				      </div>
				      <div class="card-body">
				        <h5>
				        @auth
				        	@if($post->avatar != null)
				        	<div style="background: url('{{asset('images/'.$post->avatar)}}') no-repeat center; width: 60px; height: 60px; border-radius: 50%; background-size: cover;">
				        	</div>
				        	@else
				        	<div style="background: url('https://beckysgraphicdesign.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png') no-repeat center; width: 60px; height: 60px; border-radius: 50%; background-size: cover;">
				        	</div>
				        	@endif
				        @else
				        <div style="background: url('https://beckysgraphicdesign.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png') no-repeat center; width: 60px; height: 60px; border-radius: 50%; background-size: cover;">
				        	</div>
				        @endauth
				        	 <a style="color: #2d3436; text-decoration: none;" href="http://127.0.0.1:8000/user/{{$post->user_id}}" id="username">{{ $post->name }} <h id="username-post-id">@Hephaestus#6384</h></a></h5>
				        <div class="post-time">{{ $post->date }} • <img id="ico" src="https://img.icons8.com/material-rounded/30/2d3436/globe--v1.png"/></div>
				        <br>
						<div style="width: 95%; overflow-x:hidden;">
							<script>   
							  var text = '<div style="white-space: pre-wrap;"><?php echo nl2br($post->body); ?></div>';
							 
							  text = text.replace (/(-b|~b|:peperetard:|:sadpepe:|:feelsmugman:|:feelsevilman:|:BearPepe:|:peepoU:|:YEP:|:PepeLaugh:|:Tea:|:Blanket:|:peepoPain:|:pepe_glasses:|Daenerys_Heart|-i|~i|-u|~u|-s|~s|⠀|[\*\~])/g, function(a){
							  
							     if(a=="-s"){return "<strike>"};
							     if(a=="~s"){return "</strike>"};
							     if(a=="-b"){return "<b>"};
							     if(a=="~b"){return "</b>"};
							     if(a=="-i"){return "<i>"};
							     if(a=="~i"){return "</i>"};
							     if(a=="-u"){return "<ins>"};
							     if(a=="~u"){return "</ins>"};
							     if(a=="⠀"){return ""};
							     if(a==":peperetard:"){return '<img width="25" src="https://cdn.discordapp.com/attachments/757185406361141268/757193500595978370/8908_peperetard.png">'};
							     if(a==":sadpepe:"){return '<img width="25" src="https://cdn.discordapp.com/attachments/757185406361141268/757185457015488542/2049_pepe.png">'};
							     if(a==":Daenerys_Heart:"){return '<img width="25" src="https://cdn.discordapp.com/emojis/403295311189245952.png?v=1">'};
							     if(a==":feelsmugman:"){return '<img width="25" src="https://cdn.discordapp.com/attachments/757185406361141268/757185507204530226/1592_feelsmugman.png">'};
							     if(a==":feelsevilman:"){return '<img width="25" src="https://cdn.discordapp.com/attachments/757185406361141268/757185458852593754/3371_feelsevilman2.png">'};
							     if(a==":BearPepe:"){return '<img width="25" src="https://cdn.discordapp.com/attachments/757185406361141268/757185459981123584/4140_BearPepe.png">'};
							     if(a==":peepoU:"){return '<img width="25" src="https://cdn.discordapp.com/attachments/757185406361141268/757185461327233065/4517_peepoU.png">'};
							     if(a==":YEP:"){return '<img width="25" src="https://cdn.discordapp.com/attachments/757185406361141268/757185462531129364/4810_YEP.png">'};
							     if(a==":PepeLaugh:"){return '<img width="25" src="https://cdn.discordapp.com/attachments/757185406361141268/757185463873175582/6158_PepeLaugh.png">'};
							     if(a==":Tea:"){return '<img width="25" src="https://cdn.discordapp.com/attachments/757185406361141268/757185465085329479/6727_Tea.png">'};
							     if(a==":Blanket:"){return '<img width="25" src="https://cdn.discordapp.com/attachments/757185406361141268/757185465874120704/7017_Blanket.png">'};
							     if(a==":peepoPain:"){return '<img width="25" src="https://cdn.discordapp.com/attachments/757185406361141268/757185467060846612/7465_peepoPain.png">'};
							     if(a==":pepe_glasses:"){return '<img width="25" src="https://cdn.discordapp.com/attachments/757185406361141268/757185468633710692/7672_pepe_glasses.png">'};
							  }); 
							  function rep(text) {  
							      // Put the URL to variable $1 after visiting the URL 
							      var Rexp = /((http|https|ftp):\/\/[\w?=&.\/-;#~%-]+(?![\w\s?&.\/;#~%"=-]*>))/g ;        
							       // Replac the RegExp content by HTML element

							      return text.replace(Rexp, "<br><a style='max-width: 70%; overflow-x:hidden; position: absolute;' href='$1' target='_blank'>$1</a><br><br><div style='width: 100%; height: 100px; background: #f5f8fa; display:flex; border-radius: 5px; border: 1px solid #ececed;'><img width='100px' src='https://1001freedownloads.s3.amazonaws.com/icon/thumb/355977/ModernXP-73-Globe-icon.png'><p style='margin:10px;'><img width='16' src='https://img.icons8.com/ios-glyphs/30/868686/link.png'/> External reference<br><a style='max-width: 70%; overflow-x:hidden;' href='$1' target='_blank'>$1</a></p></div>");
							  } 
							  document.write(rep(text));
							  
                			</script>
   							</div>
   							<br>
   						<div style="display: flex;">
   							@if ($post->file1 == null)
                            @else
                            <img width="50%" style="border-radius: 5px; object-fit: cover;" src="{{asset('images/'.$post->file1)}}">
                            @endif
                              
                            @if ($post->file2 == null)
                            @else
                            <img width="50%" style="border-radius: 5px; object-fit: cover;" src="{{asset('images/'.$post->file2)}}">
                            @endif
                        </div><br>
						<div class="post-stats">
							<p> 19 likes</p> <p style="margin-left: 15px;"> {{ $post->comments_sum }} comments</p>
						</div>
						<div style="display: flex;">
							<div class="btn-post-stats-main">
								<a class="btn-post-stats" href="#"><img id="ico" src="https://img.icons8.com/material-outlined/30/2d3436/facebook-like.png"/> Like</a>
							</div>
							<div class="btn-post-stats-main">
								<a href="{{ route('posts_show', ['post_id'=>$post->post_id]) }}" class="btn-post-stats" href="#"><img id="ico" src="https://img.icons8.com/material-outlined/30/2d3436/filled-chat.png"/> Comment</a>
							</div>
							<div class="btn-post-stats-main">
								<a class="btn-post-stats" href="#"><img id="ico" src="https://img.icons8.com/ios/30/2d3436/forward-arrow.png"/> Share</a>
							</div>
						</div>
				      </div>
				</div><br>
				@endforeach
				
			</div>
			<div class="col-3">
				<div class="card shadow-sm mb-4">

				    @auth
                        @if(Auth::user()->avatar != null)
							<div class="bg-user-img" style="background: url('{{asset('images/'.Auth::user()->header)}}') no-repeat center; width: 100%; height: 150px; background-size: cover; border-radius: 5px"></div>
                        @else
							<div class="bg-user-img" style="background: url('https://cdn.discordapp.com/attachments/642355138970779649/761687669486256178/clean-white-hexagonal-medical-concept-background_1017-19739.png') no-repeat center; width: 100%; height: 150px; background-size: cover; border-radius: 5px"></div>
                        @endif
                    @else
						<div class="bg-user-img" style="background: url('https://cdn.discordapp.com/attachments/642355138970779649/761687669486256178/clean-white-hexagonal-medical-concept-background_1017-19739.png') no-repeat center; width: 100%; height: 150px; background-size: cover; border-radius: 5px"></div>
                    @endauth

					<div class="user-block">
					@auth
						@if(Auth::user()->avatar == null)
							<div class="user-avatar" style="background: url('https://beckysgraphicdesign.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png') no-repeat center; position: absolute; border: 5px solid #ffffff; margin-left: 15px; margin-top: -30px; width: 70px; height: 70px; border-radius: 50%; background-size: cover;">
						@else
							<div class="user-avatar" style="background: url('{{asset('images/'.Auth::user()->avatar)}}') no-repeat center; position: absolute; border: 5px solid #ffffff; margin-left: 15px; margin-top: -30px; width: 70px; height: 70px; border-radius: 50%; background-size: cover;">
						@endif
					@else
						<div class="user-avatar" style="background: url('https://beckysgraphicdesign.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png') no-repeat center; position: absolute; border: 5px solid #ffffff; margin-left: 15px; margin-top: -30px; width: 70px; height: 70px; border-radius: 50%; background-size: cover;">
					@endauth
						<div class="username-block">
							<b>{{ Auth::user()->name }}</b>
							<p><a>@</a>{{ Auth::user()->name }}#{{ Auth::user()->id }}</p>
						</div>
						</div>
					</div><br><br><br>
					<div class="user-stats">
						<div style="margin-left: 20px;"><p>14 Posts</p></div>
						<div style="margin-left: 20px;"><p>231 Follow</p></div>
						<div style="margin-left: 20px;"><p>3,456 Followers</p></div>
					</div>
				</div>

				<div class="card shadow-sm mb-4">
					<li class="list-group-item justify-content-between ">
						<h5>Make a donation <img style="margin-left: 6px; width: 22px;" src="https://img.icons8.com/ios-glyphs/30/000000/donation.png"/></h5><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</li>
					<button type="button" class="btn-my-bg">Make a Donation</button>
				</div>

				<ul class="list-group mb-4 shadow-sm"><div id="preloader3" class="visible3"></div>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
					  <div>
					  	<h5>Trending right now</h5><br>
					    <h6 class="my-0">Peak 2020: Man Takes Dump on Pelosi's Driveway in San Francisco - Live-Streams It</h6>
					    <small class="text-muted">A man defecated on Speaker Nancy Pelosi’s driveway in San Francisco on Saturday and he live-streamed it...</small>
					  </div>
					  <span class="text-muted"><img id="ico" src="https://img.icons8.com/ios-glyphs/30/2d3436/ellipsis.png"/></span>
					</li>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
					  <div>
					    <h6 class="my-0">Peak 2020: Man Takes Dump on Pelosi's Driveway in San Francisco - Live-Streams It</h6>
					    <small class="text-muted">A man defecated on Speaker Nancy Pelosi’s driveway in San Francisco on Saturday and he live-streamed it...</small>
					  </div>
					</li>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
					  <div>
					    <h6 class="my-0">Peak 2020: Man Takes Dump on Pelosi's Driveway in San Francisco - Live-Streams It</h6>
					    <small class="text-muted">A man defecated on Speaker Nancy Pelosi’s driveway in San Francisco on Saturday and he live-streamed it...</small>
					  </div>
					</li>
					<li class="list-group-item d-flex justify-content-between bg-light">
					  <div class="text-success">
					    <h6 class="my-0">Peak 2020: Man Takes Dump on Pelosi's Driveway in San Francisco - Live-Streams It</h6>
					    <small class="text-muted">A man defecated on Speaker Nancy Pelosi’s driveway in San Francisco on Saturday and he live-streamed it...</small>
					  </div>
					</li>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
					  <div>
					    <h6 class="my-0">Peak 2020: Man Takes Dump on Pelosi's Driveway in San Francisco - Live-Streams It</h6>
					    <small class="text-muted">A man defecated on Speaker Nancy Pelosi’s driveway in San Francisco on Saturday and he live-streamed it...</small>
					  </div>
					</li>
      			</ul>

      			@if($prog != null)
      			#{{ $prog }} - {{ $prog_proc }}% ({{ $category_count_prog }})<br>
      			@endif
      			@if($music != null)
      			#{{ $music }} - {{ $music_proc }}% ({{ $category_count_music }})<br>
      			@endif
      			@if($sport != null)
      			#{{ $sport }} - {{ $sport_proc }}% ({{ $category_count_sport }})<br>
      			@endif
      			@if($news != null)
      			#{{ $news }} - {{ $news_proc }}% ({{ $category_count_news }})<br>
      			@endif
      			@if($games != null)
      			#{{ $games }} - {{ $games_proc }}% ({{ $category_count_games }})<br>
      			@endif<br>
      			@if($category_count_main != null)
      			{{ $category_count_main }}<br>
      			@endif
						
			</div>
		</div>
	</div>
	</div>
</body>
</html>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
	$('.carousel').carousel({
  interval: 20000
})
</script>
<script type="text/javascript">
	function loadData() {
  return new Promise((resolve, reject) => {
    setTimeout(resolve, 800);
  })
}

loadData()
  .then(() => {
    let preloaderEl = document.getElementById('preloader');
    preloaderEl.classList.add('hidden');
    preloaderEl.classList.remove('visible');
  });
</script>
<script type="text/javascript">
	function loadData2() {
  return new Promise((resolve, reject) => {
    setTimeout(resolve, 800);
  })
}

loadData2()
  .then(() => {
    let preloaderEl = document.getElementById('preloader2');
    preloaderEl.classList.add('hidden2');
    preloaderEl.classList.remove('visible2');
  });
</script>

<script type="text/javascript">
	function loadData3() {
  return new Promise((resolve, reject) => {
    setTimeout(resolve, 800);
  })
}

loadData3()
  .then(() => {
    let preloaderEl = document.getElementById('preloader3');
    preloaderEl.classList.add('hidden3');
    preloaderEl.classList.remove('visible3');
  });
</script>

<script type="text/javascript">
	function loadData4() {
  return new Promise((resolve, reject) => {
    setTimeout(resolve, 800);
  })
}

loadData4()
  .then(() => {
    let preloaderEl = document.getElementById('preloader4');
    preloaderEl.classList.add('hidden4');
    preloaderEl.classList.remove('visible4');
  });
</script>

<!-- смена цвета при наведении 
<script type="text/javascript">         
                        function rndColor() {
                                var r = Math.floor(Math.random()*256);
                                var g = Math.floor(Math.random()*256);
                                var b = Math.floor(Math.random()*256);
                                var rgb = 'rgb(' + r + ',' + g + ',' + b + ')';
                                var zzzBl = document.getElementById('zzz');
                                zzzBl.style.backgroundColor = rgb;
                                zzzBl.onmouseover = function() {rndColor()}}
                        window.onload = rndColor;               
                </script>  
        </head>
        <body>
                <div style="background-color:#ffffff; width:100px; height:100px" onmouseover="rndColor()" onmouseup="rndColor()" id="zzz"></div>            
        </body>
-->




<script language="JavaScript"> 
     function change_text(tag1, tag2) 
     { 
          if (tag1=="" || tag2=="") 
               return; 

          var elemText = document.getElementById("editableTextarea"); 
          if (elemText==null) 
               return; 

          // get text 
          var text = elemText.value; 

          // get position 
          var posSelection1 = elemText.selectionStart; 
          var posSelection2 = elemText.selectionEnd; 

          // get 2 text 
          var str1 = text.substr(0, posSelection1); 
          var strMiddle = text.substr(posSelection1, posSelection2-posSelection1); 
          var str2 = text.substr(posSelection2); 

          // set text 
          elemText.value = str1 + tag1 + strMiddle + tag2 + str2; 
          elemText.selectionStart = str1.length + tag1.length; 
          elemText.selectionEnd = elemText.selectionStart+strMiddle.length; 
          elemText.focus(); 
     } 

     ViewText(); 
</script>
