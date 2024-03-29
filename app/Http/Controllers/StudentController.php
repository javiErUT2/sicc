<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::all();
        $students =Student::paginate(5);
        return view('students',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {   
        return view('students.create-student.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request -> validate([
            'student_name' =>  'required',
            'last_name' => 'required',
            'id_student' => 'required',
            'birth_date' => 'required',
            'comments' => 'required',
        ]);


        $students = new Student;
        $students->student_name = $request->input('student_name');
        $students->last_name = $request->input('last_name');
        $students->id_student=$request->input('id_student');
        $students->birth_date=$request->input('birth_date');
        $students->comments=$request->input('comments');
    

        $students->save();
        return redirect()->back();
        


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Student::find($id);
       return view('show-student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $students = Student::find($id);
        $students->student_name = $request->input('student_name');
        $students->last_name = $request->input('last_name');
        $students->id_student=$request->input('id_student');
        $students->birth_date=$request->input('birth_date');
        $students->comments=$request->input('comments');
    

        $students->save();
        return redirect()->route('estudiantes.index')->with('notificacion','Estudiante editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $students = Student::find($id);
        $students->delete();

        return redirect()->back();
    }
}
