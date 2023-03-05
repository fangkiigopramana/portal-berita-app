@extends('layouts.main')
@section('container')

    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12   ">
                    <div class="row mb-3">
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">{{$type}}</h3>
                          </div>
                        </div>
                        @foreach (array_slice($newsItems,0,24) as $news)
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <a href={{$news['link']}}>
                                <div class="card mb-3">
                                    <img class="card-img-top" src={{$news['image']['large']}} alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$news['title']}}</h5>
                                        <p class="card-text">{{ substr($news['contentSnippet'], 0, 50) }}....</p>
                                        <p class="card-text"><small class="text-muted">{{date_format(date_create($news['isoDate']),'l, j F Y')}}</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>                      
                </div>
            </div>

        </div>
    </div>
    <!-- News With Sidebar End -->

@endsection