@extends('layouts.app', ['class' => 'bg-dark'])

@section('content')

   <div class="header bg-gradient-dark py-7 py-lg-8">
        <div class="container">

        	
                <div class="row justify-content-center">
                <h1 class="text-white">Ask a question and get an answer</h1>
                	</div> 
                	<br>
                	<br>

        <div class="container">
                <div class="row justify-content-center">
				 <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-4"><small>{{ __('Mention a specific teacher to get an answer from, or allow any teacher to answer the question below') }}</small></div>
                        <div class="text-center">




        
            <div>
                            <div>
                                <div class="text-center text-muted mb-4">
                                    <span>
                                            <i class="ni ni-archive-2 text-primary"></i> Question Title<i class="text-primary">—</i>

                                        </span>
                            {{ $question->title}}
                                 </div>
                                    
                        </div> 
                         <div>
                                <div class="text-center text-muted mb-4">
                                    <span>
                                            <i class="ni ni-box-2 text-primary"></i> Category<i class="text-primary">—</i>

                                        </span>
                            {{ $question->category}}
                                 </div>
                                    
                        </div> 
                       
                            <div>
                                <div class="text-center text-muted mb-4">
                                    <span>
                                            <i class="ni ni-archive-2 text-primary"></i> Question<i class="text-primary">—</i>

                                        </span>
                            {{ $question->question}}

                                 </div>
                                 <img src="answerimage/{{$question['id']}}" width="500">
                                    
                        </div> 
 <br> 
 <br> 

                           
        
                   
                 
                       
                        <form enctype="multipart/form-data" action="/saveanswer" method="post" role="saveanswer" >
                @csrf
                 <input type="hidden" id="id" name="id" value="{{$question->id}}">
                 <div class="col">
                <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    </div> 
                                    <textarea class="form-control" name="answer" rows="3" placeholder="Answer Question here! Or upload an image"></textarea>

                                </div>
                </div>
                </div>
                <div class="col">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        
                      </div>
                        <input type="file" name = "answerimage" placeholder="Upload Image (Optional)">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li> {{$error}}</li>
                                @endforeach
                            </ul>
                      </div>
                      @endif
                    </div>
                </div>
                
                 
                
                
        
    <button type="submit" class="btn btn-success mt-4">{{ __(' Answer Question ') }}</button>
		   
            
        </form>

				</div>
				</div>
				</div>
				</div>
				</div>
    </div>
</div>
</div>
       
        
@endsection