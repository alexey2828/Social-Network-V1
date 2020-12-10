

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
@include('layouts.header')
<br><br>
<body style="background-color: #f5f5f7; ">
	<div class="mobile">
		<div class="container" style="max-width: 1300px;">
            <form method="post" action="{{ route('upload_avatars') }}" enctype="multipart/form-data">
                 <label style="height: 35px;" for="exampleInputEmail1">Change avatar...</label><br>
                 <div style="display: flex">
                     <input name="_token" type="hidden" value="{{ csrf_token() }}">
                     <input  type="file" multiple name="file[]" required><br>
                     <button class="btn btn-outline-secondary" id="btn" type="submit" type="button">Отправить</button>
                 </div>
            </form>

            <form method="post" action="{{ route('upload_file_header') }}" enctype="multipart/form-data">
                <label style="height: 35px;" for="exampleInputEmail1">Change header...</label><br>
                <div style="display: flex">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input  type="file" multiple name="file[]" required><br>
                    <button class="btn btn-outline-secondary" id="btn" type="submit" type="button">Отправить</button>
                </div>
            </form>
            <br>
		</div>
	</div>
</body>
</html>