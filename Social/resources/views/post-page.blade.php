
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
</head>
<br>
@include('layouts.header')<br><br>
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
<!--post card-->
        <div class="card card-post shadow-sm" style="width: 100%;">
          <div style="margin-left: 0px; width: 100%;" id="preloader4" class="visible4"></div>
              <div class="card-header">
                <img id="ico" src="https://img.icons8.com/material-rounded/50/2d3436/user-group-man-man.png"/> PHP Development
              </div>
              <div class="card-body">
                <h5>
                    @auth
                            @if($posts->avatar != null)
                            <div style="background: url('{{asset('images/'.$posts->avatar)}}') no-repeat center; width: 60px; height: 60px; border-radius: 50%; background-size: cover;">
                            </div>
                            @else
                            <div style="background: url('https://beckysgraphicdesign.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png') no-repeat center; width: 60px; height: 60px; border-radius: 50%; background-size: cover;">
                            </div>
                            @endif
                    @else
                        <div style="background: url('https://beckysgraphicdesign.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png') no-repeat center; width: 60px; height: 60px; border-radius: 50%; background-size: cover;">
                            </div>
                    @endauth

                     <a style="color: #2d3436; text-decoration: none;" href="http://127.0.0.1:8000/user/{{$posts->user_id}}" id="username">Hephaestus <h id="username-post-id">@Hephaestus#6384</h></a></h5>
                <div class="post-time">{{$posts->date}} • <img id="ico" src="https://img.icons8.com/material-rounded/30/2d3436/globe--v1.png"/></div>
                <br>
            <div style="width: 95%; overflow-x:hidden;">
              <script>   
                var text = '<div style="white-space: pre-wrap;"><?php echo nl2br($posts->body); ?></div>';
               
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
                    var Rexp = /((http|https|ftp):\/\/[\w?=&.\/-;#~%-]+(?![\w\s?&.\/;#~%"=-]*>))/g;        
                     // Replac the RegExp content by HTML element

                    return text.replace(Rexp, "<br><a style='max-width: 70%; overflow-x:hidden; position: absolute;' href='$1' target='_blank'>$1</a><br><br><div style='width: 100%; height: 100px; background: #f5f8fa; display:flex; border-radius: 5px; border: 1px solid #ececed;'><img width='100px' src='https://1001freedownloads.s3.amazonaws.com/icon/thumb/355977/ModernXP-73-Globe-icon.png'><p style='margin:10px;'><img width='16' src='https://img.icons8.com/ios-glyphs/30/868686/link.png'/> External reference<br><a style='max-width: 70%; overflow-x:hidden;' href='$1' target='_blank'>$1</a></p></div>");
                } 
                document.write(rep(text));
                
                      </script>
                </div>
                <br>

                @if($posts->file1 != null)
                <a  data-fancybox="images" href="{{asset('images/'.$posts->file1)}}" data-caption="{{ $posts->file1 }}"><img style="border-radius: 5px;" width="90%" src="{{asset('images/'.$posts->file1)}}" /></a>
                @endif
                @if($posts->file2 != null)
                <a  data-fancybox="images" href="{{asset('images/'.$posts->file2)}}" data-caption="{{ $posts->file2 }}"><img style="border-radius: 5px;" width="90%" src="{{asset('images/'.$posts->file2)}}" /></a>
                @endif
                @if($posts->file3 != null)
                <a  data-fancybox="images" href="{{asset('images/'.$posts->file3)}}" data-caption="{{ $posts->file3 }}"><img style="border-radius: 5px;" width="50%" src="{{asset('images/'.$posts->file3)}}" /></a>
                @endif
                @if($posts->file4 != null)
                <a  data-fancybox="images" href="{{asset('images/'.$posts->file4)}}" data-caption="{{ $posts->file4 }}"><img style="border-radius: 5px;" width="50%" src="{{asset('images/'.$posts->file4)}}" /></a>
                @endif
                @if($posts->file5 != null)
                <a  data-fancybox="images" href="{{asset('images/'.$posts->file5)}}" data-caption="{{ $posts->file5 }}"><img style="border-radius: 5px;" width="50%" src="{{asset('images/'.$posts->file5)}}" /></a>
                @endif
                @if($posts->file6 != null)
                <a  data-fancybox="images" href="{{asset('images/'.$posts->file6)}}" data-caption="{{ $posts->file6 }}"><img style="border-radius: 5px;" width="50%" src="{{asset('images/'.$posts->file6)}}" /></a>
                @endif
                @if($posts->file7 != null)
                <a  data-fancybox="images" href="{{asset('images/'.$posts->file7)}}" data-caption="{{ $posts->file7 }}"><img style="border-radius: 5px;" width="50%" src="{{asset('images/'.$posts->file7)}}" /></a>
                @endif
                @if($posts->file8 != null)
                <a  data-fancybox="images" href="{{asset('images/'.$posts->file8)}}" data-caption="{{ $posts->file8 }}"><img style="border-radius: 5px;" width="50%" src="{{asset('images/'.$posts->file8)}}" /></a>
                @endif
                @if($posts->file9 != null)
                <a  data-fancybox="images" href="{{asset('images/'.$posts->file9)}}" data-caption="{{ $posts->file9 }}"><img style="border-radius: 5px;" width="50%" src="{{asset('images/'.$posts->file9)}}" /></a>
                @endif


                <br><br>
            <div class="post-stats">
              <p> 19 likes</p> <p style="margin-left: 20px;"> {{ $comments_sum }} comments</p>
            </div>
            <div style="display: flex;">
              <div class="btn-post-stats-main">
                <a class="btn-post-stats" href="#"><img id="ico" src="https://img.icons8.com/material-outlined/30/2d3436/facebook-like.png"/> Like</a>
              </div>
              <div class="btn-post-stats-main">
                <a class="btn-post-stats" href="#"><img id="ico" src="https://img.icons8.com/material-outlined/30/2d3436/filled-chat.png"/> Comment</a>
              </div>
              <div class="btn-post-stats-main">
                <a class="btn-post-stats" href="#"><img id="ico" src="https://img.icons8.com/ios/30/2d3436/forward-arrow.png"/> Share</a>
              </div>
            </div>
              <div class="write-a-comment">
                <div class="comment-avatar">
                    @auth
                            @if(Auth::user()->avatar != null)
                            <div style="background: url('{{asset('images/'.Auth::user()->avatar)}}') no-repeat center; width: 30px; height: 30px; border-radius: 50%; background-size: cover;"></div>
                            @else
                            <div style="background: url('https://m.media-amazon.com/images/M/MV5BMTc3Njg2MTE4Ml5BMl5BanBnXkFtZTcwMDc4MTUzNA@@._V1_.jpg') no-repeat center; width: 30px; height: 30px; border-radius: 50%; background-size: cover;"></div> 
                            @endif
                        @else
                        <div style="background: url('https://m.media-amazon.com/images/M/MV5BMTc3Njg2MTE4Ml5BMl5BanBnXkFtZTcwMDc4MTUzNA@@._V1_.jpg') no-repeat center; width: 30px; height: 30px; border-radius: 50%; background-size: cover;"></div> 
                    @endauth
                </div>
          <div style="display: block; width: 100%;">
                <form method="post" action="{{ route('upload_comment') }}" >
                    @csrf
                    <!--<input type="file" multiple name="file[]" type="file" id="selectedFile" style="display: none;" />-->
                    <input style="display: none;" type='text' class="form-control" id="exampleInputEmail1"  placeholder="Enter title" name='post_id' value="{{ $posts->post_id }}" required>
                    <div class="form-group">
                        <textarea name="body" class="input-comment" id="editableTextarea" onkeyup='ViewText();'type="text" placeholder=" Write a comment..." class="form-control"></textarea>
                    </div>

                <button type="submit" class="btn-my">Upload!</button>
              </form>
              <button multiple name="file[]" type="button" value="" style="background: white; border: silver; border-radius: 5px;" onclick="document.getElementById('selectedFile').click();" /><img width="23" height="23" src="https://img.icons8.com/ios-filled/50/767676/installing-updates.png"/></button>
            <button id="btn-edit-text" onclick="change_text('-b', '~b'); ViewText();"><img id="ico" src="https://img.icons8.com/ios-filled/50/767676/b.png"/></button> 
            <button id="btn-edit-text" onclick="change_text('-s', '~s'); ViewText();"><img id="ico" src="https://img.icons8.com/ios-filled/50/767676/strikethrough.png"/></button>
            <button id="btn-edit-text" onclick="change_text('-i', '~i'); ViewText();"><img id="ico" src="https://img.icons8.com/ios-filled/50/767676/italic.png"/></button>
            <button id="btn-edit-text" onclick="change_text('-u', '~u'); ViewText();"><img id="ico" src="https://img.icons8.com/android/24/767676/underline.png"/></button>


            <input id="btn-edit-text" type="color" onchange="change_text('<font color=' + this.value + '>', '</font>'); ViewText();"> 
          </div>

              </div><div class="bottom-comment"></div>


              <p>Sort by Oldest <img width="8" src="https://img.icons8.com/material/24/767676/give-way--v1.png"/></p>
            @foreach($comments as $comment)
              <div class="comment-card">
                    @auth
                            @if($comment->avatar != null)
                            <div style="background: url('{{asset('images/'.$comment->avatar)}}') no-repeat center; width: 30px; display: block; margin-top: 10px; margin-left: 10px; height: 30px; border-radius: 50%; position: absolute; background-size: cover;"></div>
                            @else
                            <div style="background: url('https://m.media-amazon.com/images/M/MV5BMTc3Njg2MTE4Ml5BMl5BanBnXkFtZTcwMDc4MTUzNA@@._V1_.jpg') no-repeat center; width: 30px; display: block; margin-top: 10px; margin-left: 10px; height: 30px; border-radius: 50%; position: absolute; background-size: cover;"></div>
                            @endif
                        @else
                        <div style="background: url('https://m.media-amazon.com/images/M/MV5BMTc3Njg2MTE4Ml5BMl5BanBnXkFtZTcwMDc4MTUzNA@@._V1_.jpg') no-repeat center; width: 30px; display: block; margin-top: 10px; margin-left: 10px; height: 30px; border-radius: 50%; position: absolute; background-size: cover;"></div>
                    @endauth
                <div class="comment-username">
                  <a id="username-b">Hephaestus</a> <h id="username-post-id">@Hephaestus#6384  • {{ $comment->date }}</h>
                  <br>
                  <div class="comment-text">
            <div style="width: 95%; overflow-x:hidden;">
              <script>   
                var text = '<div style="white-space: pre-wrap;"><?php echo nl2br($comment->comment_body); ?></div>';
               
                text = text.replace (/(-b|~b|-i|~i|-u|~u|-s|~s|[\*\~])/g, function(a){
                
                   if(a=="-s"){return "<strike>"};
                   if(a=="~s"){return "</strike>"};
                   if(a=="-b"){return "<b>"};
                   if(a=="~b"){return "</b>"};
                   if(a=="-i"){return "<i>"};
                   if(a=="~i"){return "</i>"};
                   if(a=="-u"){return "<ins>"};
                   if(a=="~u"){return "</ins>"}; 
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
                  </div>
                </div>
              </div>
              <div class="answer">              
              <a class="answer-btn"><img id="ico" src="https://img.icons8.com/ios-filled/50/767676/forward-arrow.png"/> Answer</a>
              <a class="answer-btn"> <img id="ico" src="https://img.icons8.com/material/24/767676/electricity.png"/> Report</a>
              </div><br>
            @endforeach
          </div>
        </div>
<!--post 2-->
  
      </div>
      <div class="col-3">
        <ul class="list-group mb-4 shadow-sm"><div id="preloader3" style="height: 900px;" class="visible3"></div>
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
      </div>
    </div>
  </div>
  </div>
</body>
</html>     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
<script type="text/javascript">
  $('.carousel').carousel({
  interval: 20000
})
</script>
<script type="text/javascript">
  function loadData() {
  return new Promise((resolve, reject) => {
    setTimeout(resolve, 200);
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
    setTimeout(resolve, 200);
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
    setTimeout(resolve, 200);
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
    setTimeout(resolve, 200);
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




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<!--
  
 <button type="button" class="btn btn-default" onclick="javascript:btnClickMore()">+1</button>  
   <span id="timesClicked">13</span>
    <script>

var timesClicked = 13;
function btnClickMore(){
    timesClicked ++;     
    document.getElementById('timesClicked').innerHTML = timesClicked;
    return true 
}

     
    </script>

                <form method="post" action="{{ route('/uplike') }}" enctype="multipart/form-data">
                
                <div style="display: flex">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    
                    <input  type="input" value="{{ $comment->post_id }}" name="post_id" required><br>
                    <input  type="input" value="{{ $likes }}" name="value" required><br>
                    <button class="btn btn-outline-secondary" id="btn" type="submit" type="button">Отправить</button>
                </div>
            </form>
            -->