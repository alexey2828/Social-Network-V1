
<template>
    <div id="PostCardComponent">
    	<div>
                <div class="card card-post shadow-sm" style="width: 100%;">
                    <div id="preloader4" class="visible4"></div>
                      <div class="card-header">
                        <img id="ico" src="https://img.icons8.com/material-rounded/50/2d3436/user-group-man-man.png"/> PHP Development
                      </div>
                      <div class="card-body">
                        <h5><div style="background: url('https://m.media-amazon.com/images/M/MV5BMTc3Njg2MTE4Ml5BMl5BanBnXkFtZTcwMDc4MTUzNA@@._V1_.jpg') no-repeat center; width: 60px; height: 60px; border-radius: 50%; background-size: cover;"></div> <a id="username">Hephaestus <h id="username-post-id">@Hephaestus#6384</h></a></h5>
                        <div class="post-time">15 Jun • <img id="ico" src="https://img.icons8.com/material-rounded/30/2d3436/globe--v1.png"/></div>
                        <br>
                        <div style="width: 95%; overflow-x:hidden;">

                            </div></b></b></b></b></b></b></b></b></b></strike></strike></strike></strike></strike></strike></strike></strike></strike></details></details></details></details></details></details></details></details></details></details></li></li></li></li></li></li></li></li></li></li></li>
                            <br>
                        <div class="post-stats">
                            <p> 19 likes</p> <p style="margin-left: 15px;"> 3 comments</p>
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
                      </div>
                </div><br>
    	</div>
    </div>
</template>
    <script>   
      var text = 'Fathers in ancient societies taught their young boys to lift, philosophize and contemplate life Fathers in ancient societies taught their young boys to lift, philosophize and contemplate life https://www.youtube.com/c/SuprunAlexey/videos';
     
      text = text.replace (/(-~|-b|~b|-i|~i|-li|~li|-d|~d|[\*\~])/g, function(a){
      
         if(a=="~"){return "<strike>"};
         if(a=="-~"){return "</strike>"};
         if(a=="-b"){return "<b>"};
         if(a=="~b"){return "</b>"};
         if(a=="*"){return "<br>"};
         if(a=="-i"){return "<i>"};
         if(a=="~i"){return "</i>"};
         if(a=="-li"){return "<li>"};
         if(a=="~li"){return "</li>"};
         if(a=="-d"){return "<details>"};
         if(a=="~d"){return "</details>"};
      }); 
      function rep(text) {  
          // Put the URL to variable $1 after visiting the URL 
          var Rexp = /((http|https|ftp):\/\/[\w?=&.\/-;#~%-]+(?![\w\s?&.\/;#~%"=-]*>))/g;        
           // Replac the RegExp content by HTML element

          return text.replace(Rexp, "<br><a style='max-width: 70%; overflow-x:hidden; position: absolute;' href='$1' target='_blank'>$1</a><br><br><div style='width: 100%; height: 100px; background: #f5f8fa; display:flex; border-radius: 5px; border: 1px solid #ececed;'><img width='100px' src='https://1001freedownloads.s3.amazonaws.com/icon/thumb/355977/ModernXP-73-Globe-icon.png'><p style='margin:10px;'><img width='16' src='https://img.icons8.com/ios-glyphs/30/868686/link.png'/> External reference<br><a style='max-width: 70%; overflow-x:hidden;' href='$1' target='_blank'>$1</a></p></div>");
      } 
      document.write(rep(text));
      
    </script>