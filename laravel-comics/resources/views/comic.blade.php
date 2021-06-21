@extends('layout.default')
@section('pageTitle', $comic['title']);
@section('content')
<div class="bar">
    <div class="wrap">
        <div class="img-container">
            <img src="{{$comic['thumb']}}" alt="">
            <div class="description">VIEW GALLERY</div>
        </div>
    </div>
</div>
<div class="wrap comic-content">
    <div>
        <h1> {{$comic["title"]}}</h1>
        <div class="price-bar">
            <div class="flex-grow">
                <div class="padding-2"> U.S. Price: <span>{{$comic['price']}}</span> </div>
                <div class="padding-2 border-right">AVAILABLE </div>
            </div>
            <div>
                <div class="padding-2"> <span>
                        <div class="btn">Check Availability</div>
                    </span></div>
            </div>
        </div>
        <p>
            {{$comic['description']}}
        </p>
    </div>
    <div class="padding-3">
        ADVERTISEMENT
        <div><img src="/imgs/adv.jpg" alt=""></div>
    </div>
</div>
<div class="horizontal-line"></div>
<div class="wrap">
    <div class="specs">
        <div class="full-width">
            <h2> Talent </h2>
            <div class="horizontal-line"></div>
            <div class="flex">
                <h5> Art by </h5>
                <div>
                    @foreach($comic['artists'] as $artist)
                    <span>{{$artist}}</span>
                    @endforeach
                </div>
            </div>
            <div class="horizontal-line"></div>
            <div class="flex">
                <h5> Written by </h5>
                <div>
                    @foreach($comic['writers'] as $writer)
                    <span>{{$writer}}</span>
                    @endforeach
                </div>
            </div>
            <div class="horizontal-line"></div>
        </div>
        <div class="full-width">
            <h2> Specs </h2>
            <div class="horizontal-line"></div>
            <div class="flex">
                <h5> Series </h5>
                <div>
                    <a href="">{{$comic['series']}}</a>
                </div>
            </div>
            <div class="horizontal-line"></div>
            <div class="flex">
                <h5> U.S price </h5>
                <div>
                    {{$comic['price']}}
                </div>
            </div>
            <div class="horizontal-line"></div>
            <div class="flex">
                <h5> On Sale Date </h5>
                <div>
                   {{$comic['sale_date']}}
            </div>
            <div class="horizontal-line"></div>
        </div>
    </div>
</div>
@endsection
