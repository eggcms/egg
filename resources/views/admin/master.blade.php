<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
        h1,h2,h3,h4,h5,h6,p { font-family:'Kanit','tahoma'; }
        h1 { font-size:24px; }
        p {font:normal 14px Kanit;}
        .margin-bottom {margin-bottom: 20px;}
        .bg-1 { padding:15px; background:#ffffff; border-radius: 3px; opacity:0.4;filter:alpha(opacity=40);}
        footer { background:#dddddd; padding:30px 0;}
        .container-fluid { padding-top:20px 0; }
        .navbar {padding:10px 0; font-size: 15px; letter-spacing:1px; background-color:#555555; color:#ffffff !important; border:none; border-radius:0; }
        .navbar-nav li a { padding:15px 20px;color: #f3f3f3 !important;}		
        .navbar-nav li a:hover {color: #1abc9c !important;}
        body {font:normal 14px Kanit; background:#e5e5e5; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        </style>

	</head>
	<body>
        <!-- TopHeader -->
        <div class="container-fluid">
            <div class="container"></div>
        </div>
        <!-- Navbar -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="float:left; color:#ffffff;"><i class="fa fa-home" style="font-size:27px;"></i></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">				
                    <ul class="nav navbar-nav navbar-right">
<!--                        <li><a href="#"><i class="fa fa-home"></i> หน้าแรก</a></li>
                        <li><a href="#"><i class="fa fa-home"></i> ติดต่อเรา</a></li>
                        <li><a href="#"><i class="fa fa-home"></i> ข้อมูลส่วนตัว</a></li> -->
                    
                        <li><a href="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;เข้าสู่ระบบ</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid text-center margin-bottom">
            <div class="container text-left">
                <div class="bg-1" style="margin-top:0px;"> 
                    @yield('content')
                    @for ($i = 0; $i < 10; $i++)
                        <p>The current value is {{ $i }} (test loop)</p>
                    @endfor

                </div>	
            </div>
        </div>
        @yield('rows')
        <div class="row">
            test sourcetree
        </div>
        
        <footer class="container-fluid" style="margin-top:20px;"">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 text-center"><b style="color:#999999;">Prower By</b> <a href="#">Egg Cms</a></div>
                <div class="col-sm-1"></div>
            </div>	
        </footer>
    </body>
</html>