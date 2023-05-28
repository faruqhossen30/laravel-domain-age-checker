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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-browser-safari" viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm.25-14.75v1.5a.25.25 0 0 1-.5 0v-1.5a.25.25 0 0 1 .5 0Zm0 12v1.5a.25.25 0 1 1-.5 0v-1.5a.25.25 0 1 1 .5 0ZM4.5 1.938a.25.25 0 0 1 .342.091l.75 1.3a.25.25 0 0 1-.434.25l-.75-1.3a.25.25 0 0 1 .092-.341Zm6 10.392a.25.25 0 0 1 .341.092l.75 1.299a.25.25 0 1 1-.432.25l-.75-1.3a.25.25 0 0 1 .091-.34ZM2.28 4.408l1.298.75a.25.25 0 0 1-.25.434l-1.299-.75a.25.25 0 0 1 .25-.434Zm10.392 6 1.299.75a.25.25 0 1 1-.25.434l-1.3-.75a.25.25 0 0 1 .25-.434ZM1 8a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 0 .5h-1.5A.25.25 0 0 1 1 8Zm12 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 1 1 0 .5h-1.5A.25.25 0 0 1 13 8ZM2.03 11.159l1.298-.75a.25.25 0 0 1 .25.432l-1.299.75a.25.25 0 0 1-.25-.432Zm10.392-6 1.299-.75a.25.25 0 1 1 .25.433l-1.3.75a.25.25 0 0 1-.25-.434ZM4.5 14.061a.25.25 0 0 1-.092-.341l.75-1.3a.25.25 0 0 1 .434.25l-.75 1.3a.25.25 0 0 1-.342.091Zm6-10.392a.25.25 0 0 1-.091-.342l.75-1.299a.25.25 0 1 1 .432.25l-.75 1.3a.25.25 0 0 1-.341.09ZM6.494 1.415l.13.483a.25.25 0 1 1-.483.13l-.13-.483a.25.25 0 0 1 .483-.13ZM9.86 13.972l.13.483a.25.25 0 1 1-.483.13l-.13-.483a.25.25 0 0 1 .483-.13ZM3.05 3.05a.25.25 0 0 1 .354 0l.353.354a.25.25 0 0 1-.353.353l-.354-.353a.25.25 0 0 1 0-.354Zm9.193 9.193a.25.25 0 0 1 .353 0l.354.353a.25.25 0 1 1-.354.354l-.353-.354a.25.25 0 0 1 0-.353ZM1.545 6.01l.483.13a.25.25 0 1 1-.13.483l-.483-.13a.25.25 0 1 1 .13-.482Zm12.557 3.365.483.13a.25.25 0 1 1-.13.483l-.483-.13a.25.25 0 1 1 .13-.483Zm-12.863.436a.25.25 0 0 1 .176-.306l.483-.13a.25.25 0 1 1 .13.483l-.483.13a.25.25 0 0 1-.306-.177Zm12.557-3.365a.25.25 0 0 1 .176-.306l.483-.13a.25.25 0 1 1 .13.483l-.483.13a.25.25 0 0 1-.306-.177ZM3.045 12.944a.299.299 0 0 1-.029-.376l3.898-5.592a.25.25 0 0 1 .062-.062l5.602-3.884a.278.278 0 0 1 .392.392L9.086 9.024a.25.25 0 0 1-.062.062l-5.592 3.898a.299.299 0 0 1-.382-.034l-.005-.006Zm3.143 1.817a.25.25 0 0 1-.176-.306l.129-.483a.25.25 0 0 1 .483.13l-.13.483a.25.25 0 0 1-.306.176ZM9.553 2.204a.25.25 0 0 1-.177-.306l.13-.483a.25.25 0 1 1 .483.13l-.13.483a.25.25 0 0 1-.306.176Z"/>
                                      </svg>
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
                            <div class="card-header bg-light d-flex">

                                <h5 class="pl-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                        <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                      </svg>
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

    </div>
@endsection
