@extends('frontend.layouts.app')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-area text-center" style="min-height:90vh; height:auto" >
        <div class="container">
            <div class="row" >
                <div class="col-md-8 offset-md-2 mt-5">
                    <div class="breadcrumb-content">
                        <div class="mb-4">
                            <h1 class="text-dark text-uppercase text-white">Domain Age Checker </h1>
                            <small class="text-dark text-white">Super fast domain age checker tools.</small>
                        </div>
                        <form action="" method="get">
                            <div class="input-group bg-white p-1 px-2 rounded-pill border border-3 border-secondary">
                                <input type="text" name="domain" class="form-control form-control-md border border-0"
                                    placeholder="Enter your domain" aria-label="Recipient's username"
                                    aria-describedby="button-addon2" style="outline: none">
                                <button class="btn btn-white" type="submir" id="button-addon2">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row text-light" style="margin-top: 12%">
                <div class="col-12 col-md-4">
                    <div class="flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                            <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                            <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                          </svg>
                    </div>
                    <h5 class="fs-4">Super Fast Loading</h5>
                    <p class="small">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and</p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                          </svg>
                    </div>
                    <h5 class="fs-4">100% Free Tools</h5>
                    <p class="small">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and</p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                          </svg>
                    </div>
                    <h5 class="fs-4">User Friendly</h5>
                    <p class="small">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and</p>
                </div>
            </div>

        </div>
    </div>

    <!-- breadcrumb end -->
@endsection
