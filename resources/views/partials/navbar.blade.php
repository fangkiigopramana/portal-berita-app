<!-- Top Banner Start -->
<div class="container-fluid">
    <div class="row align-items-center py-2 px-lg-5">
        <div class="col-lg-4">
            <a href="/" class="navbar-brand d-none d-lg-block">
                <h1 class="m-0 display-5 text-uppercase">AI<span class="text-primary">NEWS</span></h1>
            </a>
        </div>
    </div>
</div>
<!-- Top Banner End -->

<!-- Navbar Start -->
<div class="container-fluid p-0 mb-3">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                {{-- <a href="single.html" class="nav-item nav-link">Single News</a> --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
                    <div class="dropdown-menu rounded-0 m-0">
                    @foreach ($listType as $type)
                        <a href="/{{$type}}" class="dropdown-item">{{ucwords(str_replace('-',' ',$type))}}</a>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->