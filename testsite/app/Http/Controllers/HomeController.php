<?php

namespace App\Http\Controllers;
use App\Questions;
use App\Http\Controllers\User;
use App\Teacher;
use App\Http\Controllers\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use Image;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware(['auth','verified']);
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }
    public function getquestionimage($imageid)
        {
             $image = Questions::findOrFail($imageid);

             $image_file = Image::make($image->questionimage);

             $response = Response::make($image_file->encode('jpeg'));

             $response->header('Content-Type', 'image/jpeg');

             return $response;
            }
            public function getanswerimage($imageid)
        {
             $image = Questions::findOrFail($imageid);

             $image_file = Image::make($image->answerimage);

             $response = Response::make($image_file->encode('jpeg'));

             $response->header('Content-Type', 'image/jpeg');

             return $response;
            }
             public function answerquestion($id)
        {
            
        $question = Questions::findOrFail($id);

        return view('answer',compact('question'));
            }



    public function teacher(Request $req){
return view(‘middleware’)->withMessage(Teacher”);
}
public function student(Request $req){
return view(‘middleware’)->withMessage(Student”);
}
}

