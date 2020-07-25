@extends('layouts.app', ['class' => 'bg-primary'])

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




        <form enctype="multipart/form-data" action="/savequestion" method="post" role="savequestion" >
                @csrf
                
            <div class="col">
                <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                                    </div>
                                    <input class="form-control" name="title" placeholder="Question Title" type="text" required autofocus/>
                                </div>
                            </div>
                </div>
        <div class="col">
                <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                                    </div>
                                    <input class="form-control" name="category" placeholder="Category" type="text" required autofocus/>
                                </div>
                            </div>
                </div>
               <div class="col">
                <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-cart"></i></span>
                                </div>
                                 <select class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="askedto">

                                    <option hidden value="" >Select Teacher</option>
                                    
                                    @foreach($teachers as $teacher)

                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                    
                                    @endforeach
                                    
                                </select>
                            
                            </div>
                            </div>
        
                <div class="col">
                <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    </div> 
                                    <textarea class="form-control" name="question" rows="3" placeholder="Ask Question here!"></textarea>

                                </div>
                </div>
                </div>
                <div class="col">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        
                      </div>
                        <input type="file" name = "questionimage">
                        
                    </div>
                </div>
                
                
                
                 
                
                
                
        
    <button type="submit" class="btn btn-success mt-4">{{ __(' Ask Question ') }}</button>
		   
            
        </form>

				</div>
				</div>
				</div>
				</div>
				</div>
    </div>
</div>
</div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-success" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        
@endsection