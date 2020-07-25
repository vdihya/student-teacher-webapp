@extends('layouts.app', ['class' => 'bg-dark'])

@section('content')
<div class="header bg-gradient-dark py-7 py-lg-8">
        <div class="container">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white text-center">Questions to be answered</h1>
                    </div>
                
        </div>
        <div class="container">
        <form action="/searchteacher" method="POST" role="searchteacher">
                @csrf
                
           
            <div class="row">
                <div class="col">
                 
                 <div class="form-group">

                    <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-cart"></i></span>
                                    </div>
                    <select class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="teach" onchange='this.form.submit()' >
                         <option hidden value="" >Select Teacher Name to filter and get specific questions asked</option>
                      @foreach($teachers as $teacher)

                      <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                      @endforeach
                    </select>
                </div>
                </div> 
                </div>
                
            </div>
            
        </form>
<div class="container">
@foreach($questions as $question)            
 <div class="container">
      <div class="jumbotron">
            <h1 class="display-4">{{$question['title']}}</h1>
            <p class="lead">{{$question['question']}}</p>
            <img src="getquestionimage/{{$question['id']}}">

            <hr class="my-4">
            <a href="/answerquestion/{{$question['id']}}" class="btn btn-success btn-lg" role="button" aria-disabled="true">Answer this question</a>
            <a href="/answer/{{$question['id']}}" class="btn btn-warning btn-lg text-center" role="button" aria-disabled="true">View Answers to this question</a>
            <hr class="my-4">
          
            
            <button class="btn btn-dark btn-sm">{{$question['category']}}</button>
           
      </div>

</div>
</div>


                @endforeach

@endsection
