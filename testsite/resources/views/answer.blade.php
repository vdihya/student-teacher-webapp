@extends('layouts.app', ['class' => 'bg-dark'])

@section('content')
<div class="header bg-gradient-dark py-7 py-lg-8">
        <div class="container">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white text-center">Questions to be answered</h1>
                    </div>
                
        </div>

<div class="container">         
 <div class="container">
      <div class="jumbotron">
            <h1 class="display-4">{{$question['title']}}</h1>
            <p class="lead">{{$question['question']}}</p>
            <img src="getquestionimage/{{$question['id']}}">

            <hr class="my-4">
            <p class="lead">{{$question['answer']}}</p>
            <img src="getanswerimage/{{$question['id']}}">
            <hr class="my-4">

            <p class="lead">{{$question['category']}}</p>
      </div>

</div>
</div>


@endsection
