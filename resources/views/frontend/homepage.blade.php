@extends('frontend.layouts.app')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-area text-center bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 mt-4">
                    <div class="breadcrumb-content">
                        <div class="mb-4">
                            <h1 class="text-dark">Domain Age Checker </h1>
                            <small class="text-dark">Super fast domain age checker tools.</small>
                        </div>
                        <form action="" method="get">
                            <div class="input-group bg-white p-1 px-2 rounded-pill border border-3">
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
        </div>
    </div>
    <!-- breadcrumb end -->
@endsection
