@extends('layouts.app')        
@section('title')
    Trang danh mục
@endsection       
@section('content')
    
<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="home-1.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li class="active"><span>Blog</span></li>
        </ul>
    </div>
</div>
<!-- Main Breadcrumb End -->

<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Post Items Start -->
                    <div class="post--items post--items-5 pd--30-0">
                        <ul class="nav">
                            @foreach ($posts as $post)  
                            <li>
                                <!-- Post Item Start -->
                                <div class="post--item post--title-larger">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
                                            <div class="post--img">
                                                <a href="{{route('detailPost',['slug'=>$slug,'slugPost'=>$post->slug])}}" class="thumb"><img src="assets/img/{{$post->image}}" alt="" ></a>
                                                <a href="#" class="cat">Kids</a>
                                            </div>
                                        </div>

                                        <div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{$ten_loai}}</a></li>
                                                    <li><a href="#">{{$post->created_at}}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="{{route('detailPost',['slug'=>$slug,'slugPost'=>$post->slug])}}" class="btn-link">{{$post->title}}</a></h3>
                                                </div>
                                            </div>

                                            <div class="post--content">
                                                <p>{{$post->description }}</p>
                                            </div>

                                            <div class="post--action">
                                                <a href="{{route('detailPost',['slug'=>$slug,'slugPost'=>$post->slug])}}">Continue Reading...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                            </li> 
                            @endforeach
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
<!-- Main Content Section End -->  
<!-- Sticky Social Start -->
<div id="stickySocial" class="sticky--right">
    <ul class="nav">
        <li>
            <a href="#">
                <i class="fa fa-facebook"></i>
                <span>Follow Us On Facebook</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-twitter"></i>
                <span>Follow Us On Twitter</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-google-plus"></i>
                <span>Follow Us On Google Plus</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-rss"></i>
                <span>Follow Us On RSS</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-vimeo"></i>
                <span>Follow Us On Vimeo</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-youtube-play"></i>
                <span>Follow Us On Youtube Play</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-linkedin"></i>
                <span>Follow Us On LinkedIn</span>
            </a>
        </li>
    </ul>
</div>
<!-- Sticky Social End -->
@endsection


    {{-- <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== jQuery Library ==== -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <!-- ==== Bootstrap Framework ==== -->
    <script src="js/bootstrap.min.js"></script>

    <!-- ==== StickyJS Plugin ==== -->
    <script src="js/jquery.sticky.min.js"></script>

    <!-- ==== HoverIntent Plugin ==== -->
    <script src="js/jquery.hoverIntent.min.js"></script>

    <!-- ==== Marquee Plugin ==== -->
    <script src="js/jquery.marquee.min.js"></script>

    <!-- ==== Validation Plugin ==== -->
    <script src="js/jquery.validate.min.js"></script>

    <!-- ==== Isotope Plugin ==== -->
    <script src="js/isotope.min.js"></script>

    <!-- ==== Resize Sensor Plugin ==== -->
    <script src="js/resizesensor.min.js"></script>

    <!-- ==== Sticky Sidebar Plugin ==== -->
    <script src="js/theia-sticky-sidebar.min.js"></script>

    <!-- ==== Zoom Plugin ==== -->
    <script src="js/jquery.zoom.min.js"></script>

    <!-- ==== Bar Rating Plugin ==== -->
    <script src="js/jquery.barrating.min.js"></script>

    <!-- ==== Countdown Plugin ==== -->
    <script src="js/jquery.countdown.min.js"></script>

    <!-- ==== RetinaJS Plugin ==== -->
    <script src="js/retina.min.js"></script>

    <!-- ==== Google Map API ==== -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="js/main.js"></script>

</body>
</html> --}}
