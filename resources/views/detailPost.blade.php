@extends('layouts.app')
@section('title')
    Trang chi tiết tin tức
@endsection

@section('content')
    




<!-- News Ticker End -->

<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="home-1.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li><a href="{{route('categories',$slug)}}" class="btn-link">{{$category}}</a></li>
            <li class="active"><span>{{$posts->title}}</span></li>
        </ul>
    </div>
</div>
<!-- Main Breadcrumb End -->

<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row">
            <div class="main--content col-md-8" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Post Item Start -->
                    <div class="post--item post--single post--title-largest pd--30-0">
                        <div class="post--img">
                            <a href="#" class="thumb"><img src="assets/img/{{$posts->image}}" alt=""></a>
                            <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                            <div class="post--map">
                                <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map</p>

                                <div class="map--wrapper">
                                    <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                </div>
                            </div>
                        </div>

                        <div class="post--cats">
                            <ul class="nav">
                                <li><span><i class="fa fa-folder-open-o"></i></span></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Fitness</a></li>
                                <li><a href="#">Music</a></li>
                            </ul>
                        </div>

                        <div class="post--info">
                            <ul class="nav meta">
                                <li><a href="#">Norma R. Hogan</a></li>
                                <li><a href="#">{{$posts->created_at}}</a></li>
                                <li><span><i class="fa fm fa-eye"></i>{{$posts->views}}</span></li>
                                <li><a href="#"><i class="fa fm fa-comments-o"></i>02</a></li>
                            </ul>

                            <div class="title">
                                <h2 class="h4">{{$posts->title}}</h2>
                            </div>
                        </div>

                        <div class="post--content">
                            <p>{{$posts->description}}</p>

                            <h4>Where does it come from?</h4>

                            <p>{{$posts->content}}</p>

                            <div class="row">
                                {{-- <div class="col-sm-6">
                                    <ul class="list">
                                        <li>Integer vitae libero ac risus egestas placerat.</li>
                                        <li>Fusce lobortis lorem at ipsum semper sagittis.</li>
                                        <li>Cras ornare tristique eros elit nulla nec ante.</li>
                                        <li>Ut aliquam sollicitudin iaculis ultricies nulla.</li>
                                        <li>Vivamus molestie gravida turpis lobortis lorem.</li>
                                        <li>Nam convallis pellentesque nisl commodo nulla.</li>
                                    </ul>
                                </div> --}}

                                <div class="col-sm-6">
                                    <img src="assets/img/{{$posts->image}}" alt="">
                                    <p class="img-caption">Finibus Bonorum et Malorum</p>
                                </div>
                            </div>

                            <blockquote>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal making it look like readable english many desktop.</p>

                                <footer>Semyaza, Australia</footer>
                            </blockquote>

                            <h4>Why do we use it?</h4>

                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                    </div>
                    <!-- Post Item End -->

                    <!-- Post Tags Start -->
                    <div class="post--tags">
                        <ul class="nav">
                            <li><span><i class="fa fa-tags"></i></span></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Image</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#">Audio</a></li>
                            <li><a href="#">Latest</a></li>
                            <li><a href="#">Trendy</a></li>
                            <li><a href="#">Special</a></li>
                            <li><a href="#">Recipe</a></li>
                        </ul>
                    </div>
                    <!-- Post Tags End -->

                    <!-- Post Social Start -->
                    <div class="post--social pbottom--30">
                        <span class="title"><i class="fa fa-share-alt"></i></span>
                        
                        <!-- Social Widget Start -->
                        <div class="social--widget style--4">
                            <ul class="nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social Widget End -->
                    </div>
                    <!-- Post Social End -->

                    <!-- Post Author Info Start -->
                    {{-- <div class="post--author-info clearfix">
                        <div class="img">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <a href="author.html" class="btn-link">
                                        <img src="assets/img/news-single-img/author.jpg" alt="">
                                        <p class="name">Karla Gleichauf</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="info">
                            <h2 class="h4">About The Author</h2>

                            <div class="content">
                                <p>That is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has ab more  normal distribution of letters, as opposed to using content here.</p>
                            </div>

                            <ul class="social nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <!-- Post Author Info End -->

                    <!-- Post Nav Start -->
                    <div class="post--nav">
                        <ul class="nav row">
                            <li class="col-xs-6 ptop--30 pbottom--30">
                                <!-- Post Item Start -->
                                <div class="post--item">
                                    <div class="post--img">
                                        <a href="#" class="thumb"><img src="assets/img/news-single-img/post-nav-prev.jpg" alt=""></a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Astaroth</a></li>
                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                            </ul>

                                            <div class="title">
                                                <h3 class="h4"><a href="#" class="btn-link">On the other hand, we denounce with righteous indignation and dislike demoralized</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                            </li>

                            <li class="col-xs-6 ptop--30 pbottom--30">
                                <!-- Post Item Start -->
                                <div class="post--item">
                                    <div class="post--img">
                                        <a href="#" class="thumb"><img src="assets/img/news-single-img/post-nav-next.jpg" alt=""></a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Astaroth</a></li>
                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                            </ul>

                                            <div class="title">
                                                <h3 class="h4"><a href="#" class="btn-link">On the other hand, we denounce with righteous indignation and dislike demoralized</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                            </li>
                        </ul>
                    </div>
                    <!-- Post Nav End -->

                    <!-- Post Related Start -->
                    <div class="post--related ptop--30">
                        <!-- Post Items Title Start -->
                        <div class="post--items-title" data-ajax="tab">
                            <h2 class="h4">Tin liên quan</h2>

                            <div class="nav">
                                <a href="#" class="prev btn-link" data-ajax-action="load_prev_related_posts">
                                    <i class="fa fa-long-arrow-left"></i>
                                </a>
                                <span class="divider">/</span>

                                <a href="#" class="next btn-link" data-ajax-action="load_next_related_posts">
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Post Items Title End -->

                        <!-- Post Items Start -->
                        <div class="post--items post--items-2" data-ajax-content="outer">
                            <ul class="nav row" data-ajax-content="inner">
                                @foreach ($tinlq as $item)
                                    
                                    <li class="col-sm-6 pbottom--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1">
                                        <div class="post--img">
                                        <a href="#" class="thumb"><img src="assets/img/{{$item->image}}" alt=""></a>
                                        <a href="#" class="cat">{{$item->category->ten_loai}}</a>
                                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Khoa</a></li>
                                                <li><a href="#">{{$item->created_at}}</a></li>
                                            </ul>

                                            <div class="title">
                                                <h3 class="h4"><a href="#" class="btn-link">{{$item->title}}</a></h3>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="post--content">
                                            <p>{{$item->description}}</p>
                                        </div>

                                        <div class="post--action">
                                        <a href="#">Continue Reading... </a>
                                    </div>
                                    </div>
                                <!-- Post Item End -->
                                    </li>
                                @endforeach

                              
                            </ul>

                            <!-- Preloader Start -->
                            <div class="preloader bg--color-0--b" data-preloader="1">
                                <div class="preloader--inner"></div>
                            </div>
                            <!-- Preloader End -->
                        </div>
                        <!-- Post Items End -->
                    </div>
                    <!-- Post Related End -->

                    <!-- Comment List Start -->
                    <div class="comment--list pd--30-0">
                        <!-- Post Items Title Start -->
                        <div class="post--items-title">
                            <h2 class="h4">{{$countComment}} Bình luận</h2>
                            <i class="icon fa fa-comments-o"></i>
                        </div>
                        <!-- Post Items Title End -->

                        <ul class="comment--items nav">
                            @forelse ($comment as $item)
                            <li>
                                <!-- Comment Item Start -->
                                <div class="comment--item clearfix">
                                    <div class="comment--img float--left">
                                        <img src="assets/img/{{$item->user->image}}" alt="">
                                    </div>

                                    <div class="comment--info">
                                        <div class="comment--header clearfix">
                                            <p class="name">{{$item->user->name}}</p>
                                            <p class="date">{{$item->created_at}}</p>

                                            <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                        </div>

                                        <div class="comment--content">
                                            <p>{{$item->content}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Item End -->
                            </li>


                            @empty
                                Chưa có bình luận nào
                            @endforelse
                           
{{-- 
                            <li>
                                <!-- Comment Item Start -->
                                <div class="comment--item clearfix">
                                    <div class="comment--img float--left">
                                        <img src="assets/img/news-single-img/comment-avatar-02.jpg" alt="">
                                    </div>

                                    <div class="comment--info">
                                        <div class="comment--header clearfix">
                                            <p class="name">M Shyamalan</p>
                                            <p class="date">12 May 2017 at 05:28 pm</p>

                                            <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                        </div>

                                        <div class="comment--content">
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Item End -->

                                <ul class="comment--items nav">
                                    <li>
                                        <!-- Comment Item Start -->
                                        <div class="comment--item clearfix">
                                            <div class="comment--img float--left">
                                                <img src="assets/img/news-single-img/comment-avatar-03.jpg" alt="">
                                            </div>

                                            <div class="comment--info">
                                                <div class="comment--header clearfix">
                                                    <p class="name">Liz Montano</p>
                                                    <p class="date">12 May 2017 at 05:28 pm</p>

                                                    <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                                </div>

                                                <div class="comment--content">
                                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Comment Item End -->
                                    </li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="comment--form pd--30-0">
                        <!-- Post Items Title Start -->
                        <div class="post--items-title">
                            <h2 class="h4">Bình luận</h2>

                            <i class="icon fa fa-pencil-square-o"></i>
                        </div>
                        <!-- Post Items Title End -->

                        <div class="comment-respond">
                            <form action="{{route('auth.comment')}}" data-form="validate" method="POST">
                                {{-- <p>Don’t worry ! Your email address will not be published. Required fields are marked (*).</p> --}}
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>
                                            <span>Comment *</span>
                                            <textarea name="comment" class="form-control" ></textarea>
                                        </label>
                                    </div>
                                    @if ($errors->has('comment'))
                                        <span style="color: red" >{{$errors->first('comment')}}</span>
                                    @endif
                                    {{-- <div class="col-sm-6">
                                        <label>
                                            <span>Name *</span>
                                            <input type="text" name="name" class="form-control" required>
                                        </label>

                                        <label>
                                            <span>Email Address *</span>
                                            <input type="email" name="email" class="form-control" required>
                                        </label>

                                        <label>
                                            <span>Website</span>
                                            <input type="text" name="website" class="form-control">
                                        </label>
                                    </div> --}}
                                    <input type="hidden" name="id_post" value="{{$posts->id}}" >
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Gửi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comment Form End -->
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
@endsection

    {{-- <!-- Sticky Social Start -->
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

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div> --}}
    <!-- Back To Top Button End -->
{{-- 
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
 --}}
