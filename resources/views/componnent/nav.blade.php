 <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
    <div class="sticky-content-inner">
        <!-- Widget Start -->
        <div class="widget">
            <!-- Ad Widget Start -->
            <div class="ad--widget">
                <a href="#">
                    <img src="assets/img/slidebar.png" alt="">
                </a>
            </div>
            <!-- Ad Widget End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Stay Connected</h2>
                <i class="icon fa fa-share-alt"></i>
            </div>

            <!-- Social Widget Start -->
            <div class="social--widget style--1">
                <ul class="nav">
                    <li class="facebook">
                        <a href="#">
                            <span class="icon"><i class="fa fa-facebook-f"></i></span>
                            <span class="count">521</span>
                            <span class="title">Likes</span>
                        </a>
                    </li>
                    <li class="twitter">
                        <a href="#">
                            <span class="icon"><i class="fa fa-twitter"></i></span>
                            <span class="count">3297</span>
                            <span class="title">Followers</span>
                        </a>
                    </li>
                    <li class="google-plus">
                        <a href="#">
                            <span class="icon"><i class="fa fa-google-plus"></i></span>
                            <span class="count">596282</span>
                            <span class="title">Followers</span>
                        </a>
                    </li>
                    <li class="rss">
                        <a href="#">
                            <span class="icon"><i class="fa fa-rss"></i></span>
                            <span class="count">521</span>
                            <span class="title">Subscriber</span>
                        </a>
                    </li>
                    <li class="vimeo">
                        <a href="#">
                            <span class="icon"><i class="fa fa-vimeo"></i></span>
                            <span class="count">3297</span>
                            <span class="title">Followers</span>
                        </a>
                    </li>
                    <li class="youtube">
                        <a href="#">
                            <span class="icon"><i class="fa fa-youtube-square"></i></span>
                            <span class="count">596282</span>
                            <span class="title">Subscriber</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Social Widget End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Email</h2>
                <i class="icon fa fa-envelope-open-o"></i>
            </div>

            <!-- Subscribe Widget Start -->
            <div class="subscribe--widget">
                <div class="content">
                    <p>Subscribe to our newsletter to get  latest news, popular news and exclusive updates.</p>
                </div>

                <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="mailchimpAjax">
                    <div class="input-group">
                        <input type="email" name="EMAIL" placeholder="E-mail address" class="form-control" autocomplete="off" required>

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-lg btn-default active"><i class="fa fa-paper-plane-o"></i></button>
                        </div>
                    </div>

                    <div class="status"></div>
                </form>
            </div>
            <!-- Subscribe Widget End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4 ">Top Tin Mới</h2>
                <i class="icon fa fa-newspaper-o"></i>
            </div>

            <!-- List Widgets Start -->
            <div class="list--widget list--widget-1">
                {{-- <div class="list--widget-nav" data-ajax="tab">
                    <ul class="nav nav-justified active">
                        <li>
                            <a href="#" >Hot News</a>
                        </li>
                        <li class="">
                            <a href="#" >Trendy News</a>
                        </li>
                        <li>
                            <a href="#" >Most Watched</a>
                        </li>
                    </ul>
                </div> --}}

                <!-- Post Items Start -->
                <div class="post--items post--items-3" >
                    <ul class="nav">
                        @foreach ($TopNew as $item)
                            
                            <li>
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-3">
                                <div class="post--img">
                                    <a href="news-single-v1.html" class="thumb"><img src="assets/img/{{$item->image}}" alt=""></a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">{{$item->category->ten_loai}}</a></li>
                                            <li><a href="#">{{$item->created_at}}</a></li>
                                        </ul>

                                        <div class="title">
                                            <h3 class="h4"><a href="{{route('detailPost',[$item->category->slug,$item->slug])}}" class="btn-link">{{$item->description}}<a></h3>
                                        </div>
                                    </div>
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
            <!-- List Widgets End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Advertisement</h2>
                <i class="icon fa fa-bullhorn"></i>
            </div>

            <!-- Ad Widget Start -->
            <div class="ad--widget">
                <a href="#">
                    <img src="assets/img/ads-img/ad-300x250-2.jpg" alt="">
                </a>
            </div>
            <!-- Ad Widget End -->
        </div>
        <!-- Widget End -->
    </div>
</div>
