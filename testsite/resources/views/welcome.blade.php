@extends('layouts.app', ['class' => 'bg-dark'])

@section('content')
    <div class="header bg-gradient-success py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">A Teacher-Student Q&A blog</h1>
                    </div>

                </div>
                <h3 class="text-white">Login or Register to ask and answer questions</h3>
                <a href="/studentdash" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Student?</a>
                 <a href="/teacherdash" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Teacher?</a>
            </div>
        </div>
       
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-dark" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
