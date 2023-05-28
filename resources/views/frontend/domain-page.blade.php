@extends('frontend.layouts.app')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 mt-5">
                    <div class="breadcrumb-content">
                        <div class="mb-4">
                            <h1 class="text-dark text-uppercase text-white">Domain Age Checker </h1>
                            <small class="text-dark text-white">Super fast domain age checker tools.</small>
                        </div>
                        <form action="" method="get">
                            <div class="input-group bg-white p-1 px-2 rounded-pill border border-3 border-secondary">
                                <input type="text" name="domain"
                                    @if ($exatDomain) value="{{ $exatDomain }}" @endif
                                    class="form-control form-control-md border border-0" placeholder="Enter your domain"
                                    aria-label="Recipient's username" aria-describedby="button-addon2"
                                    style="outline: none">
                                <button class="btn btn-white" type="submir" id="button-addon2">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="breadcrumb-content">
                    <h1 class="mb-3">Domain Age Checker </h1>
                    <span>The Best Free Online SEO Tools You Will Ever Need</span>
                    <form action="" method="get">
                        <div class="input-group mb-3">
                            <input type="text" name="domain" @if ($domain) value="{{$domain}}" @endif class="form-control form-control-md" placeholder="Enter your domain" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-light" type="submir" id="button-addon2">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                        <div class="input-group bg-white p-2 rounded-pill border border-1">
                            <input type="text" name="domain" @if ($domain) value="{{$domain}}" @endif class="form-control form-control-md border border-0"
                                placeholder="Enter your domain" aria-label="Recipient's username"
                                aria-describedby="button-addon2">
                            <button class="btn btn-white" type="submir" id="button-addon2">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                </div> --}}

                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <div class="main-content pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <!-- tracking start -->
                    <div class="tracking-area mb-4">
                        <div class="card tracking-card">
                            <div class="card-header bg-light">
                                <h5>
                                    <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                                        class="rounded-circle flex-shrink-0">
                                    Doman Age
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <td>Domain Age </td>
                                                <td>: <strong>{{ $age }}</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tracking end -->
                    <!-- tracking start -->
                    <div class="tracking-area">
                        <div class="card tracking-card">
                            <div class="card-header bg-light">
                                <h5>
                                    <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                                        class="rounded-circle flex-shrink-0">
                                    Doman Information
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <table class="table table-responsive table-hover">
                                        <tbody>
                                            @foreach ($arr as $key => $val)
                                                @php
                                                    $data = strtolower($key);
                                                @endphp
                                                <tr>
                                                    <td>{{ $key }} </td>
                                                    <td>: @if (strpos($data, 'creation date') || strpos($data, 'updated date') || strpos($data, 'registry expiry date')  )
                                                        @php
                                                            $date = new DateTime($val);
                                                            $formattedDate = $date->format('d F Y');
                                                            echo $formattedDate;
                                                        @endphp
                                                    @else
                                                        {{$val}}
                                                    @endif </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tracking end -->



                    <!-- info start -->
                    {{-- <div class="info-area">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('frontend')}}/images/728x90.png" class="w-100" alt="">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.

                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus
                                PageMaker
                                including versions of Lorem Ipsum</p>
                            <img src="{{asset('frontend')}}/images/nastuh.jpg" class="w-100 about-img" alt="">
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here,
                                content
                                here', making it look like readable English.

                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                in
                                their infancy.</p>
                            <img src="{{asset('frontend')}}/images/728x90.png" class="w-100" alt="">
                            <div class="info-social text-center position-relative">
                                <a href="#" style="background:#1877F2;"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" style="background:#1DA1F2;"><i class="fab fa-twitter"></i></a>
                                <a href="#" style="background:#E4405F;"><i class="fab fa-instagram"></i></a>
                                <a href="#" style="background:#0A66C2;"><i class="fab fa-linkedin"></i></a>
                                <a href="#" style="background:#CD201F;"><i class="fab fa-youtube"></i></a>
                            </div>
                            <hr>
                            <div class="author-info d-flex">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-xl-4 col-lg-4">
                                        <img src="{{asset('frontend')}}/images/avatar.jpg" class="w-100 rounded-3 shadow-sm avatar" alt=""></div>
                                    <div class="col-sm-8 col-md-8 col-xl-8 col-lg-8">
                                        <div class="author-content">
                                            <h4>James Smith <span>CEO / CO-FOUNDER</span> </h4>
                                            <p>Enjoy the little things in life. For one day, you may look back and
                                                realize
                                                they were the big things. Many of life's failures are people who did
                                                not
                                                realize how close they were to success when they gave up.</p>
                                            <div class="author-social">
                                                <a href="#" style="background:#1877F2;"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#" style="background:#1DA1F2;"><i class="fab fa-twitter"></i></a>
                                                <a href="#" style="background:#E4405F;"><i class="fab fa-instagram"></i></a>
                                                <a href="#" style="background:#0A66C2;"><i class="fab fa-linkedin"></i></a>
                                                <a href="#" style="background:#CD201F;"><i class="fab fa-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                    <!-- info end -->

                </div>
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <aside>
                        <div class="sidebar">
                            <img src="{{ asset('frontend') }}/images/300x250.png" class="w-100 sidebar-img" alt="">
                            <div class="card my-3">
                                <div class="card-header bg-primary text-white">
                                    <h6>Popular Tools</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item"> <i class="fa fa-check"></i> <a href="#">And a
                                                fifth
                                                one</a></li>
                                        <li class="list-group-item"> <i class="fa fa-check"></i> <a href="#">And a
                                                fifthAnd a fifthAnd a fifthAnd a fifth one</a></li>
                                        <li class="list-group-item"> <i class="fa fa-check"></i> <a href="#">And a
                                                fifth
                                                one</a></li>
                                        <li class="list-group-item"> <i class="fa fa-check"></i> <a href="#">And a
                                                fifth
                                                one</a></li>
                                        <li class="list-group-item"> <i class="fa fa-check"></i> <a href="#">And a
                                                fifth
                                                one</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar">
                            <img src="{{ asset('frontend') }}/images/300x250.png" class="w-100 sidebar-img" alt="">
                            <div class="card my-3">
                                <div class="card-header bg-primary text-white">
                                    <h6>Recent Posts</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <img src="{{ asset('frontend') }}/images/nastuh.jpg" alt="">
                                            <div class="list-group-content">
                                                <a href="#">And a fifth one</a>
                                                <span>April 28, 2022</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <img src="{{ asset('frontend') }}/images/nastuh.jpg" alt="">
                                            <div class="list-group-content">
                                                <a href="#">And a fifth one</a>
                                                <span>April 28, 2022</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <img src="{{ asset('frontend') }}/images/nastuh.jpg" alt="">
                                            <div class="list-group-content">
                                                <a href="#">And a fifth one</a>
                                                <span>April 28, 2022</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <img src="{{ asset('frontend') }}/images/nastuh.jpg" alt="">
                                            <div class="list-group-content">
                                                <a href="#">And a fifth one</a>
                                                <span>April 28, 2022</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <img src="{{ asset('frontend') }}/images/nastuh.jpg" alt="">
                                            <div class="list-group-content">
                                                <a href="#">And a fifth one</a>
                                                <span>April 28, 2022</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <img src="{{ asset('frontend') }}/images/nastuh.jpg" alt="">
                                            <div class="list-group-content">
                                                <a href="#">And a fifth one</a>
                                                <span>April 28, 2022</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <img src="{{ asset('frontend') }}/images/300x250.png" class="w-100 sidebar-img"
                                alt="">
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <hr>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 mb-3">
                    <div class="follow-social text-center">
                        <h3 class="mb-4">Follow us</h3>
                        <a href="#" style="background:#1877F2;"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="#" style="background:#1DA1F2;"><i class="fab fa-twitter"></i> Twitter</a>
                        <a href="#" style="background:#E4405F;"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#" style="background:#0A66C2;"><i class="fab fa-linkedin"></i> Linkedin</a>
                        <a href="#" style="background:#CD201F;"><i class="fab fa-youtube"></i> Youtube</a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
@endsection
