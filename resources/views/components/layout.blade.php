<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"
            integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0"
            crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap"
          rel="stylesheet"/>
</head>
<body>

<nav class="navbar navbar-expand-lg  bg-dark navcolor">


    @auth
        <div class="container-fluid text-light my-2">


            {{--            <div class="d-flex  my-3 justify-content-centre ">--}}
            <div class="col-lg-3">
                <a href="#" class="navbar-brand  text-light">Our Application</a>
            </div>
            {{--                <a href="#" class="text-white mr-2 header-search-icon" title="Search" data-toggle="tooltip"--}}
            {{--                   data-placement="bottom"><i class="fas fa-search"></i></a>--}}

            <form class="d-flex col-lg-4" role="search" method="get" action="/search">
            <select name="specialist" class="form-select  mb-3" aria-label=".form-select-lg example">
                <option selected>Select Category</option>
                @foreach($specialists as $specialist)
                    <option value="{{$specialist->id}}">{{$specialist->name}}</option>
                @endforeach
            </select>

                <input name="q" class="form-control me-2" type="search" placeholder="Search Doctor" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>

            {{--                <span class="text-white mr-2 header-chat-icon" title="Chat" data-toggle="tooltip"--}}
            {{--                      data-placement="bottom"><i class="fas fa-comment"></i></span>--}}
            {{--                <a href='/profile/{{auth()->user()->username}}' class="mr-2"><img title="My Profile" data-toggle="tooltip" data-placement="bottom"--}}
            {{--                                                                                  style="width: 32px; height: 32px; border-radius: 16px"--}}
            {{--                                                                                  src="{{auth()->user()->avatar}}"></a>--}}
            {{--                <a class="btn btn-sm btn-success mr-2" href="{{route('createPost')}}">Create Post</a>--}}

            <form action="/logout" method="POST" class="col-lg-4 offset-md-2">
                @csrf
                <button class="btn btn-md btn-secondary">Sign Out</button>
            </form>

        </div>
        </div>
    @else
        <div class="container-fluid text-light bg-dark navcolor">

            <a href="#" class="navbar-brand fs-1 cms text-light">Our Application</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                <div class="navbar-nav ms-auto d-flex column ">
                    <form action="{{route('userlogin')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg p-3">
                                <input name="loginemail" class="form-control form-control-sm input-dark" type="text"
                                       placeholder="email" autocomplete="off"/>
                            </div>
                            <div class="col-lg p-3">
                                <input name="loginpassword" class="form-control form-control-sm input-dark"
                                       type="password" placeholder="Password"/>
                            </div>
                            <div class="col-lg-auto p-3">
                                <button class="btn btn-primary btn-sm">Sign In</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endauth

</nav>

@if(session()->has('success'))
    <div class="container container--narrow">
        <div class="alert alert-success text-center">
            {{session('success')}}
        </div>
    </div>
@endif
@if(session()->has('failure'))
    <div class="container container--narrow">
        <div class="alert alert-danger text-center">
            {{session('failure')}}
        </div>
    </div>

@endif

@yield('content')

<!-- footer begins -->
<footer class="border-top text-center small text-muted py-3">
    <p class="m-0">Copyright &copy; 2023 <a href="/" class="text-muted">OurApp</a>. All rights reserved.</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
</body>
</html>
