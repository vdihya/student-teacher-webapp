<?php

namespace App\Http\Controllers;
use App\Questions;
use App\Teacher;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use Image;
class TeacherController extends Controller
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

       $teachers = Teacher::where('role', 'teacher')->get();
       $questions = Questions::sortable()->paginate();
        return view('teacherdash',compact('questions','teachers'));
     }
 
public static function searchteacher(Request $request)
    {


        $t = $request->teach;
         
            if($t!==null)
                {
                    $q = $request->input('teach');
                  $questions = Questions::where('askedto','LIKE',$q)->sortable()->get();
             
                }
                
             
       $teachers = Teacher::where('role', 'teacher')->get();
            
            return view ('teacherdash',compact(
                'questions','teachers'));
             

    }
    public function answerquestion($questionid)
    {
        $question = Questions::findOrFail($questionid);

        return view('answerquestion',compact('question'));
     }
     public function saveanswer(Request $request)
    {
        
       

        $request->validate([

            'answerimage' => 'image|max:2048',
        ]);

        if($request->answerimage)
        {
            $questionfile = $request->answerimage;
        $image = Image::make($questionfile);
        Response::make($image->encode(
            'jpg'));
        }
        else
        {
            $image=''; 
        }


       Questions::where('id',$request->id)->update(['answerimage' => $image]);
        Questions::where('id',$request->id)->update(['answer' => $request->answer]);
        Questions::where('id',$request->id)->update(['status' => 1]);

         return redirect('/teacherdash');
}
 
       
}
