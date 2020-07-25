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
class StudentController extends Controller
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
        return view('studentdash');
    }
    public function askquestion()
    {
       $teachers = Teacher::where('role', 'teacher')->get();
        return view('askquestion',compact('teachers'));
    }
    public function allquestions()
    {
       $students = Teacher::where('role', 'student')->get();
       $questions = Questions::sortable()->get();
        return view('allquestions',compact('students','questions'));
    }

public static function searchstudent(Request $request)
    {


        $t = $request->stud;
         
            if($t!==null)
                {
                    $q = $request->input('stud');
                  $questions = Questions::where('askedby','LIKE',$q)->sortable()->get();
             
                }
                
             
       $students = Teacher::where('role', 'student')->get();
            
            return view ('allquestions',compact(
                'questions','students'));
             

    }
    public function savequestion(Request $request)
    {
        
        $request->validate([

            'questionimage' => 'required|image|max:2048',
        ]);

        $question = new Questions($request->input());


        $questionfile = $request->questionimage;
        $image = Image::make($questionfile);
        Response::make($image->encode(
            'jpeg'));

        $question->questionimage = $image;
        $question->title = request('title');
        $question->question= request('question');
        $question->category = request('category');
        $question->askedby = Auth::user()->id;
        $question->askedto = request('askedto');

    
        $question->save();

         return redirect('/studentdash');
}

        public function getquestionimage($imageid)
        {
             $image = Questions::findOrFail($imageid);

             $image_file = Image::make($image->questionimage);

             $response = Response::make($image_file->encode('jpeg'));

             $response->header('Content-Type', 'image/jpeg');

             return $response;
            }
        
    }

