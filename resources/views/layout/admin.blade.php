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
        .bg-2 { padding:15px; background:#aaaaaa; border-radius: 3px; opacity:0.4;filter:alpha(opacity=40);}        
        footer { background:#dddddd; padding:30px 0;}
        .container-fluid { padding-top:20px 0; }
        .navbar {padding:10px 0; font-size: 15px; letter-spacing:1px; background-color:slategrey; color:#ffffff !important; border:none; border-radius:0; }
        .navbar-nav li a { padding:15px 20px;color:#ccc !important;}		
        .navbar-nav li a:hover {color:white !important;}
        body {font:normal 14px Kanit; background:#f1f1f1; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
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
                    <a class="navbar-brand" href="admin" style="float:left; color:#ffffff;"><i class="fa fa-home" style="font-size:27px;"></i></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">				
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin/category"><i class="fa fa-hashtag" aria-hidden="true"></i> หมวดหมู่</a></li>
                        <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i> บทความ</a></li>
                        <li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> รูปภาพ</a></li>
                        <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> ผู้ใช้งาน</a></li>                                                 
                        <li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> ตั้งค่า</a></li>
           
                        <li><a href="login"><span class="fa fa-sign-out"></span>&nbsp;ออกสู่ระบบ</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid text-center margin-bottom">
            <div class="container text-left">

                <div class="bg-1" style="margin-top:0px;"> 
                    @yield('content')
                </div>	
            </div>
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