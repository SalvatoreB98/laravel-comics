@extends('layout.default')
@section('home', 'header')
@section('content')
<section class="content">
    <div class="wrap">
        <div class="title">
            <h3>CURRENT SERIES</h3>
        </div>
    </div>

    <div class="current wrap">
        {{-- @dump($comicsList); --}}
        @foreach($comicsList as $key => $comic)
        <div class="comic-container padding-2">
            <a href="">
                <div class="cover"><img src="{{$comic['thumb']}}" alt=""></div>
                <div class="description"> {{Str::limit($comic["title"],17)}}</div>
            </a>
        </div>
        @endforeach
    </div>
</section>
@endsection
