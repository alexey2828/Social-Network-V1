
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
    <div class="wrapper shadow-sm">
	<div class="container">
    @auth
        @if($user->header != null)
        <div class="profile-bg-img" style="background: url('{{asset('images/'.$user->header)}}') no-repeat center; width: 100%; height: 400px; margin-top: -20px; background-size: cover; border-radius: 5px"></div>
        @else
        <div class="profile-bg-img" style="background: url('https://cdn.discordapp.com/attachments/642355138970779649/761687669486256178/clean-white-hexagonal-medical-concept-background_1017-19739.png') no-repeat center; width: 100%; height: 400px; margin-top: -20px; background-size: cover; border-radius: 5px"></div>
        @endif
    @else
    <div class="profile-bg-img" style="background: url('https://cdn.discordapp.com/attachments/642355138970779649/761687669486256178/clean-white-hexagonal-medical-concept-background_1017-19739.png') no-repeat center; width: 100%; height: 400px; margin-top: -20px; background-size: cover; border-radius: 5px"></div>
    @endauth

        <div class="profile-user-block">
                    @auth
                        @if($user->avatar != null)
                            <div class="profile-user-avatar" style="background: url('{{asset('images/'.$user->avatar)}}') no-repeat center; position: absolute; border: 5px solid #ffffff; margin-left: 25px; margin-top: -100px; width: 170px; height: 170px; border-radius: 50%; background-size: cover;">
                            </div>
                        @else
                            <div class="profile-user-avatar" style="background: url('https://beckysgraphicdesign.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png') no-repeat center; position: absolute; border: 5px solid #ffffff; margin-left: 25px; margin-top: -100px; width: 170px; height: 170px; border-radius: 50%; background-size: cover;">
                            </div>
                        @endif
                    @else
                            <div class="profile-user-avatar" style="background: url('https://beckysgraphicdesign.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png') no-repeat center; position: absolute; border: 5px solid #ffffff; margin-left: 25px; margin-top: -100px; width: 170px; height: 170px; border-radius: 50%; background-size: cover;">
                            </div>
                    @endauth
            <div class="profile-username-block">
                <h3><b>{{$user->name}} </b></h3>
                <p style="margin-top: -10px;"><a>@</a>{{$user->name}}#{{$user->id}}</p>
            </div>
        </div>
        <div class="profile-user-avata">
            <button type="button" class="btn-my-profile-active">Timeline<div class="active"></div></button>
            <button type="button" class="btn-my-profile">Comment</button>
            <button type="button" class="btn-my-profile">Photos</button>
            @if(Auth::user()->id == $user->id)
            <a href="{{ url('settings') }}"><button type="submit" class="btn-my">Edit Profile</button></a>
            @endif
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <br>
                    <li class="list-group-item shadow-sm card mb-4 d-flex justify-content-between lh-condensed" style="border-radius: 5px; ">
                    <div class="user-stats">
                        <div style="margin-left: 0px;"><p>14 Posts</p></div>
                        <div style="margin-left: 20px;"><p>231 Follow</p></div>
                        <div style="margin-left: 20px;"><p>3,456 Followers</p></div>
                    </div>
                    </li>
               
                <ul class="list-group mb-4 shadow-sm">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h5>About</h5>
                        <small class="text-muted">Just programmer from Ukraine</small>
                      </div>
                    </li>
            
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <small class="text-muted"><img id="ico" src="https://img.icons8.com/fluent-systems-regular/80/868686/calendar.png"/> Member since Sep. 14</small>
                      </div>
                    </li>
                </ul>
            </div>
<!--post card-->
            <div class="col"><br>
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
            <!--end of post card-->
        </div>
    </div></div>
</div>
</body>
</html>