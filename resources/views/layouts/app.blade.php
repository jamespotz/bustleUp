<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css" type="text/css">
        <style type="text/css">
          body{
            background: #4ECDC4; /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #4ECDC4 , #556270); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #4ECDC4 , #556270); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #ffffff;
          }
          .star {
              visibility:hidden;
              font-size:20px;
              cursor:pointer;
              position: absolute;
              right: 15px;
              color: #ffffff;
          }
          .star:before {
             content: "\2605";
             position: absolute;
             visibility:visible;
          }
          .star:checked:before {
             content: "\2606";
             position: absolute;
          }
          .text-grayed{
            color: #ddd;
          }
          .remove-border-radius{
            border-radius: 0;
          }
          .card {
              box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
              transition: 0.3s;
              width: 30%;
              background: #fff;
              color: #000;
              border-radius: 5px;
              display: inline-block;
              margin-left: 10px;
              margin-right: 10px;
          }

          .card:hover {
              box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
          }
          .card-img{
            border-radius: 5px 5px 0 0;
          }
          .card-container {
              padding: 5px 16px;
          }
          .card-block{
            position: relative;
          }
          .card-title{
            position: absolute;
            bottom: 0;
            padding-left: 16px;
            color: #fff;
          }
          .card-footer{
            width: 100%;
            padding: 10px 0;
          }
          
          .btn-teal{
            background: #009688;
          }
          .btn-blue{
            background: #1E88E5;
          }
          
          .btn-blue, .btn-teal{ 
            color: #ffffff;
            border: none;
          }
          
          .btn-blue:focus,
          .btn-blue:hover,
          .btn-teal:focus,
          .btn-teal:hover{
            color: #ffffff;
          }

          .btn-white{
            background: #ffffff;
            color: #222222;
            border: none;
          }

          .btn-raised{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
          }
          .btn-raised:hover{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
          }
        
          .btn-ripple{
            position: relative;
            overflow: hidden;
          }

          .btn-ripple:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 5px;
            height: 5px;
            background: rgba(240, 240, 240, .5);
            opacity: 0;
            border-radius: 100%;
            transform: scale(1, 1) translate(-50%);
            transform-origin: 50% 50%;
          }
          @keyframes ripple {
            0% {
              transform: scale(0, 0);
              opacity: 1;
            }
            20% {
              transform: scale(25, 25);
              opacity: 1;
            }
            100% {
              opacity: 0;
              transform: scale(40, 40);
            }
          }

          .btn-ripple:focus:not(:active)::after {
            animation: ripple 1s ease-out;
          }
        </style>
        @yield('custom-css')
    </head>
    <body>
        <nav class="navbar navbar-default remove-border-radius">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#links" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">bustleUp</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="links">
              <ul class="nav navbar-nav">
                <li class="active"><a href="/">Todos <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Completed</a></li>
                <li><a href="#">Over due todos</a></li>
                <li><a href="#">Sign In</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="container-fluid">
          @yield('content')
        </div>

        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
