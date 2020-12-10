
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
<header class="header">
	<div class="container" style="max-width: 1350px;">
 	<a class="logo" href="{{url('main')}}">logo</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu" style="">
            <li><a href="index.html"><img id="ico" src="https://img.icons8.com/material-rounded/50/ffffff/home-page.png"/> Home</a></li>
            <li><a href="resume.html"><img id="ico" src="https://img.icons8.com/material-outlined/50/ffffff/search-chat.png"/> Search</a></li>
            <li><a href="portfolio.html"><img id="ico" src="https://img.icons8.com/material-outlined/64/ffffff/file.png"/> News</a></li>
            <li><a id="settings-menu" style="margin-left: -40px;">|</a></li>
            <li><a id="settings-menu" href="https://github.com/alexey2828"><img width="20" style="margin-top: 2px; margin-left: -20px;" src="https://img.icons8.com/ios-glyphs/30/ffffff/filled-appointment-reminders.png"/></a></li>
            <li><a id="settings-menu" href="https://github.com/alexey2828"><img width="20" style="margin-top: 2px;margin-left: -20px;" src="https://img.icons8.com/material-sharp/24/ffffff/settings.png"/></a></li>
            <li><a id="settings-menu" style="margin-left: -50px;">|</a></li>
            <li><a id="settings-menu" href="{{url('profile')}}" style="margin-left: -50px;"><div style="background: url('https://m.media-amazon.com/images/M/MV5BMTc3Njg2MTE4Ml5BMl5BanBnXkFtZTcwMDc4MTUzNA@@._V1_.jpg') no-repeat center; margin: -8px; margin-left: 5px; width: 40px; height: 40px; border-radius: 50%; background-size: cover;"></div></a></li>
        </ul>
        </div>
</header><br><br>
<body style="background-color: #f5f5f7; ">
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('post-form') }}" method="post">
     
            @csrf
            <div class="form-group">
                <textarea name="body" id="message" class="form-control" placeholder="Enter the text"></textarea>
            </div>

        <button type="submit" class="btn-my">Upload!</button>
        </form>


<br><br>
        <form method="post" action="{{ route('upload_comments') }}" enctype="multipart/form-data">
                @csrf
                <div style="margin-top: -10px; width: 95%;" class="input-group mb-3">
                  <input type="file" multiple name="file[]" type="file" id="selectedFile" style="display: none;" />
                    <button multiple name="file[]" type="button" value="" style="background: white; border: silver; border-radius: 5px;" onclick="document.getElementById('selectedFile').click();" /><img width="23" height="23" src="https://img.icons8.com/ios-filled/50/767676/installing-updates.png"/></button>
                    <textarea name="body" id="message" class="form-control" placeholder="Enter the text"></textarea>
                </div>
            <button type="submit" class="btn-my">Upload!</button>
        </form>
    </div>
</body>
</html>