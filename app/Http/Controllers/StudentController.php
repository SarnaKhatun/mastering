<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;
    protected $subjects;

    public function add ()
    {
        return view('admin.student.add');
    }

    public function newStudent (Request $request)
    {
        Student::newStudent($request);
        return redirect()->back()->with('message', 'student data added/inserted successfully');
    }

    public function dashboard ()
    {
        $this->student = Student::all();
        return view('admin.home.dashboard',[
            'students' => $this->student,
        ]);
    }

    public function edit ($id)
    {
        $this->student = Student::find($id);
        $this->subjects = explode(', ', $this->student->subjects);
        return view('admin.student.edit',[
            'student'=> $this->student,
            'subjects' => $this->subjects,
        ]);
    }

    public function update (Request $request, $id)
    {

        Student::updateStudent($request, $id);
        return redirect('/dashboard')->with('message', 'student data updated successfully');
    }

   public function delete ($id)
   {
       $this->student = Student::find($id);
       if (file_exists($this->student->image))
       {
           unlink($this->student->image);
       }

       $this->student->delete();
       return redirect()->back()->with('message', 'this student info deleted successfully');
   }
}
