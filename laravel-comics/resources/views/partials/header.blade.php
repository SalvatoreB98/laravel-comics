{{-- HEADER --}}
<header>
    <div class="top-bar">
    <div class="flex wrap">
         <a href="">DC POWER™ VISA®</a>
         <a href="">ADDITIONAL DC SITES </a>
    </div>
    </div>
    <nav class="wrap flex">
        <div class="logo-container"><img src="{{asset('imgs/dc-logo.png')}}" alt=""></div>
        <div class="links">
            <a class="{{ Request::route()->getName() == 'characters' ? 'active' : ''}}" href="{{route('characters')}}">CHARACTERS</a> 
            <a class="{{ Request::route()->getName() == 'comics' ? 'active' : ''}}" href="{{route('comics')}}">COMICS</a> 
            <a class="{{ Request::route()->getName() == '' ? 'active' : ''}}" href="">MOVIES</a> 
            <a class="{{ Request::route()->getName() == '' ? 'active' : ''}}" href="">TV</a> 
            <a class="{{ Request::route()->getName() == '' ? 'active' : ''}}" href="">GAMES</a> 
            <a class="{{ Request::route()->getName() == '' ? 'active' : ''}}" href="">COLLECTIBLES</a> 
            <a class="{{ Request::route()->getName() == '' ? 'active' : ''}}" href="">VIDEOS</a> 
            <a class="{{ Request::route()->getName() == '' ? 'active' : ''}}" href="">FANS</a> 
            <a class="{{ Request::route()->getName() == '' ? 'active' : ''}}" href="">NEWS</a> 
            <a class="{{ Request::route()->getName() == '' ? 'active' : ''}}" href="">SHOP</a> 
        </div>
        <input type="text" placeholder="Search">
    </nav>
</header>
<div class="jumbotron">
</div>