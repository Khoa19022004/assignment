@extends('layouts.app')

@section('content')
<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Post Items Start -->
                    <h2>Kết quả cho {{$q}}</h2>
                    <div class="post--items post--items-5 pd--30-0">
                        <ul class="nav">
                            
                            @forelse ($search as $post)
                                
                            <li>
                                <!-- Post Item Start -->
                                <div class="post--item post--title-larger">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
                                            <div class="post--img">
                                                <a href="{{route('detailPost',['slug'=>$post->category->slug,'slugPost'=>$post->slug])}}" class="thumb"><img src="assets/img/{{$post->image}}" alt="" ></a>
                                                <a href="#" class="cat">Kids</a>
                                            </div>
                                        </div>

                                        <div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{$post->category->ten_loai}}</a></li>
                                                    <li><a href="#">{{$post->created_at}}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="{{route('detailPost',['slug'=>$post->category->slug,'slugPost'=>$post->slug])}}" class="btn-link">{{$post->title}}</a></h3>
                                                </div>
                                            </div>

                                            <div class="post--content">
                                                <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                                            </div>

                                            <div class="post--action">
                                                <a href="news-single-v1.html">Continue Reading...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                            </li> 
                            @empty
                                <h2>Không có tin tức đấy đâu ba</h2>
                            @endforelse
                        </ul>
                    </div>
                    <!-- Post Items End -->

                    <!-- Pagination Start -->
                    <div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
                        <p class="pagination-hint float--left">Page 02 of 03</p>

                        <ul class="pagination float--right">
                            <li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
                            <li><a href="#">01</a></li>
                            <li class="active"><span>02</span></li>
                            <li><a href="#">03</a></li>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                <i class="fa fa-angle-double-right"></i>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li><a href="#">20</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Pagination End -->
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