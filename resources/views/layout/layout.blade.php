<!DOCTYPE html>
<html>
<head>
    <title> {{config('app.name')}}</title>
    <style>
    body{
        font-family: sans-serif;
    margin: 0;
    padding: 0;
    }
    .navList {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }
    
    .navA {
        float: right;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    .navLi .navA:hover:not(.navActive) {
        background-color: #111;
    }
    
    #navActive {
        background-color: #194635;
    }
</style>
    
</head>
<body>

<!----Navbar----->
<div class="nav">      
    <ul class="navList">
        <li class="navLi" style="float: left;"><a class="navA" href="#home"><b>{{config('app.name')}}</b></a></li>
        <li class="navLi"><a class="navA" href="#home">Home</a></li>
        <li class="navLi"><a class="navA" href="#news">Employees</a></li>
        <li class="navLi"><a class="navA" href="#contact">Contact</a></li>
        <li class="navLi"><a class="navA" id="navActive" href="#about">About</a></li>
    </ul>
</div>
<!----End of Navbar----->
<div class="contents">
      {{-- page content goes here --}}
      @yield('content')
</div>


</body>
</html>