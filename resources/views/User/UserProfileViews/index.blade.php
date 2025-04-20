<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/User/userprofile.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <a href="{{ route('views.Homepage') }}">
        <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo">
      </a>
      <nav>
        <ul class="nav_links">
          
          <li><a style="color:#FFDB99" href="views.journal">Journal</a></li>
          <li><a href="#">Appointment</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Chat</a></li>
        </ul>
      </nav>
    <img style="width:50px; margin-left:15px;" src="images/profile.png" alt="profile">
    </header>