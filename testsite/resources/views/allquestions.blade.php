@extends('layouts.app', ['class' => 'bg-dark'])

@section('content')
<div class="header bg-gradient-dark py-7 py-lg-8">
        <div class="container">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white text-center">Questions Asked</h1>
                    </div>
                
        </div>
        <div class="container">
        <form action="/searchstudent" method="POST" role="searchstudent">
                @csrf
                
           
            <div class="row">
                <div class="col">
                 
                 <div class="form-group">

                    <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-cart"></i></span>
                                    </div>
                    <select class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="stud" onchange='this.form.submit()' >
                         <option hidden value="" >Select Student Name to filter and get specific questions asked</option>
                      @foreach($students as $student)

                      <option value="{{ $student->id }}">{{ $student->name }}</option>
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
             @if($question->status ==0)

                    <td><span class="badge badge-dot mr-4">
                      <i class="bg-danger"></i>
                     This question has not yet been answered, check back again later.
                    </span> </td>

            @elseif($question->status ==1)
                    <td><span class="badge badge-dot mr-4">
                      <i class="bg-success"></i>
                     This question has been answered, <a href="/answer/{{$question->id}}" class="text-dark">View answer!</a>
                    </span> </td>
            @endif
      </div>

</div>
</div>


                @endforeach

@endsection
