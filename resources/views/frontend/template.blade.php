@extends('admin.layouts.master-without-nav')
@section('title')
    @lang('translation.landing')
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('body')


    <body data-bs-spy="scroll" data-bs-target="#navbar-example">
    @endsection
    @section('content')
        <!-- Begin page -->
        <div class="layout-wrapper landing">
           @include('frontend.body.nav_frontend')

           <br><br>
<div class="container">
    <div class="row justify-content-center"> 
<div class="row">
    <div class="col-12">
        <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
            <h5 class="mb-0 pb-1 text-decoration-underline">Free Template</h5>
        </div>
        <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
            @foreach ($templates as $item)       
            <div class="col">
                <a href="{{ route('frontend.free.template.view', ['slug' => $item->slug]) }}">
                <div class="card card-body">
                    <div class="d-flex mb-4 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle">
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <h5 class="card-title mb-1">Oliver Phillips</h5>
                            <p class="text-muted mb-0">Digital Marketing</p>
                        </div>
                    </div>
                    <h6 class="mb-1">$15,548</h6>
                    <p class="card-text text-muted">Expense Account</p>
                    <a href="javascript:void(0)" class="btn btn-primary btn-sm">Generate</a>
                </div>
                </a>
            </div>
            @endforeach
        </div><!-- end row -->
    </div><!-- end col -->
</div>
</div>
</div>

            <!-- Start footer -->
            @include('frontend.body.footer_frontend')
            <!-- end footer -->

            <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        </div>
        <!-- end layout wrapper -->
    @endsection
    @section('script')

        <script src="{{ URL::asset('build/js/pages/landing.init.js') }}"></script>
       
    @endsection