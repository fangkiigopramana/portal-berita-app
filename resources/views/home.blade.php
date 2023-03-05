@extends('layouts.main')
@section('container')
    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                        @foreach (array_slice($newsItems,0,5) as $news)
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src={{$news['image']['large']}} style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="">{{date_format(date_create($news['isoDate']),'l, j F Y')}}</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" target="blank" href={{$news['link']}}>{{$news['title']}}</a>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->

    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-3">
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Popular</h3>
                          </div>
                        </div>
                        @foreach (array_slice($newsItems,6,4) as $news)
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href={{$news['link']}}>
                                <div class="card mb-3">
                                    <img class="card-img-top" src={{$news['image']['large']}} alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$news['title']}}</h5>
                                        <p class="card-text">{{$news['contentSnippet']}}</p>
                                        <p class="card-text"><small class="text-muted">{{date_format(date_create($news['isoDate']),'l, j F Y')}}</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>                      
                </div>
                
                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow Us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                                <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                                <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                                <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                                <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                                <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                                <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid" src="img/news-500x280-4.jpg" alt=""></a>
                    </div>
                    <!-- Ads End -->

                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">News Types</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            @foreach ($listType as $type)
                            <a href="/{{$type}}" class="btn btn-sm btn-outline-secondary m-1">{{ucwords(str_replace('-',' ',$type))}}</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row mb-3">
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Berita lainnya</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                          </div>
                        </div>
                        @foreach (array_slice($newsItems,10,10) as $news)
                        <a href={{$news['link']}}>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="card d-flex flex-row mb-3">
                                    <img src={{$news['image']['large']}} style="width: 100px; height: 100px; object-fit: cover;" class="card-img-top">
                                    <div class="card-body">
                                        <div class="mb-1" style="font-size: 13px;">
                                            <span>{{date_format(date_create($news['isoDate']),'l, j F Y')}}</span>
                                        </div>
                                        <a class="h6 card-title" href={{$news['link']}}>{{$news['title']}}</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>                      
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->
@endsection