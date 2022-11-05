<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect('/');
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }

    public function edit($id)
    {
        $students = Student::find($id);
        return view('Students.edit', compact('students'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return redirect('/');
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('/');
    }
}