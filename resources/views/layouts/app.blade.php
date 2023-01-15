
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="open source html and css template">
    <meta name="author" content="mlp design">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="pastel.css">
</head>
<body>
<!-- Menu Items -->
<nav>
    <input type="checkbox" id="show-menu" role="button">
    <label for="show-menu" class="open"><span class="fa fa-bars"></span></label>
    <label for="show-menu" class="close"><span class="fa fa-times"></span></label>
    <ul id="menu">
        <li><a class="active" href="/">Home</a></li>
        <li><a href="archive">Archives</a></li>
        <li><a href="#">Pastel</a></li>
        <li><a href="#">Empty</a></li>
        <li><a href="#">Also Empty</a></li>
    </ul>
</nav>
<!-- // -->
<!-- Banner -->
<div id="banner">
    <div id="header">
        <h1>The Archive Hub</h1>
        <p class="sub">Find many archives  from different companies for educational and research purposes</p>
    </div>
</div>
<!-- // -->
@yield('content')
@yield('archives')
<!-- Footer Items -->
<div id="footer">
    <p>&copy; Copyright Your Name</p>
    <!--Credits below must be kept under CC-NC 3.0 License-->
    <p><a href="http://www.mlpdesign.net">HTML and CSS</a> by MLPdesign.net</p>
</div>
<!-- // -->
</body>
</html>
