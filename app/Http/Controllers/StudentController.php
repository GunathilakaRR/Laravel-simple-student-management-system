<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{

    public function home(){
        return view("student.home");
    }

    public function index(){
        $students = Student::all();
        return view("student.index", compact('students'));
    }



    public function create(){
        return view("student.create");
    }


    public function store(Request $request){

        $rules= [
            'fname' => 'required|string',
            'lname'=> 'required|string',
            'tel'=> 'required|string',
            'address'=> 'required|string',
            'birthday'=> 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules, $messages=[
            'fname.required'=>'first name can not be empty'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
        #method 1 of sending data to the database
        // $student = new Student();

        // $student->fname = $request->fname;
        // $student->lname = $request->lname;
        // $student->tel = $request->tel;
        // $student->address = $request->address;
        // $student->birthday = $request->birthday;
        // $student->save();

        #method 2 of sending data to the database
        $student = Student::create($request->all());
        return redirect()->route('student.index');

        
    }


    public function update($id){
         $student = Student::where('id', $id)->first();
         return view('student.update',compact('student'));
    }

    public function modify(Request $request, $student_id){
        
        $student = Student::where('id', $student_id)->first();
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->tel = $request->tel;
        $student->address = $request->address;
        $student->birthday = $request->birthday;

        $student->save();
        return redirect()->route('student.index');
   }
}
