@extends('layouts.app')
@section('title')
    Trang chủ
@endsection

@section('content')
<div class="main-content--section pbottom--30">
    <div class="container">
        <!-- Main Content Start -->
        <div class="main--content">
            <!-- Post Items Start -->
            <div class="post--items post--items-1 pd--30-0">
                <div class="row gutter--15">
                    @foreach ($slide as $item)
                        
                    <div class="col-md-6">
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-1 post--title-larger">
                            <div class="post--img">
                                <a href="{{route('detailPost',[$item->category->slug,$item->slug])}}" class="thumb"><img src="assets/img/{{$item->image}}" alt=""></a>
                                <a href="#" class="cat">{{$item->category->ten_loai}}</a>
                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                <div class="post--map">
                                    <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map</p>

                                    <div class="map--wrapper">
                                        <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                    </div>
                                </div>

                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="#">Khoa</a></li>
                                        <li><a href="#">{{$item->created_at}}</a></li>
                                    </ul>

                                    <div class="title">
                                        <h2 class="h4"><a href="{{route('detailPost',[$item->category->slug,$item->slug])}}" class="btn-link">{{$item->description}}</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Post Items End -->
        </div>
        <!-- Main Content End -->
        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <div class="row">
                        @foreach ($data as $item)
                            <div class="col-md-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                                <div class="post--items-title" >
                                    <h2 class="h4">{{$item->ten_loai}}</h2>
                                </div>
                            <!-- Post Items Title End -->
                            
                            <!-- Post Items Start -->
                                <div class="post--items post--items-2">
                                    <ul class="nav gutter--15" >                            
                                        <li class="col-xs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="assets/img/{{$item->posts[0]->image}}" alt=""></a>
                                                <a href="#" class="cat">War</a>
                                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Khoa</a></li>
                                                        <li><a href="#">{{$item->posts[0]->created_at}}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="{{route('detailPost',[$item->slug,$item->posts[0]->slug])}}" class="btn-link">{{$item->posts[0]->description}}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                        </li>
                                   
                                    @for ($i = 1; $i <= 2; $i++)
                                        <li class="col-md-6">
                                        <!-- Post Item Start -->
                                            <div class="post--item post--layout-2" style="margin-top: 10px">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="assets/img/{{$item->posts[$i]->image}}" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Khoa</a></li>
                                                        <li><a href="#">{{$item->posts[$i]->created_at}}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="{{route('detailPost',[$item->slug,$item->posts[$i]->slug])}}" class="btn-link">{{$item->posts[$i]->description}}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        <!-- Post Item End -->
                                        </li>
                                    @endfor
                                    </ul>
                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                                </div>
                            <!-- Post Items End -->
                            </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
                @include('componnent.nav')
            <!-- Main Sidebar End -->
        </div>

            
    </div>
</div>
@endsection