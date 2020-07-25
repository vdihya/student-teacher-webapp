@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
<div class="header bg-gradient-dark py-7 py-lg-8">
        <div class="container">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white text-center">Ask Questions --- Get Answers!</h1>
                    </div>
                    <a href="/askquestion" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Ask a question now</a>
                	<a href="/allquestions" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Questions</a>
                	
        </div>
@endsection
