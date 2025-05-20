<?php

namespace App\Http\Controllers;

use App\Models\student_M;
use App\Models\User;
use Illuminate\Http\Request;

class Student1Controller extends Controller
{
    public function index()
    {
        $student = student_M::all();

        return view('student1.create', compact('student'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|max:255|string',
            'fname' => 'required|max:255|string',
            'mname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'stud_add' => 'required|max:255|string',
            'stud_DOB' => 'required|max:255|string',
        ]);
        student_M::create($request->all());
        return view('student1.create');
    }

    public function destroy(string $id)
    {
        $student = student_M::findOrFail($id);
        $student->delete();
        return redirect()->back()->with('status', 'Employee Deleted');
    }

    public function edit(int $id)
    {
        $student = student_M::find($id);
        return view('student1.edit', compact('student'));
    }

    public function update(Request $request, int $id)
    { {
            $request->validate([
                'student_id' => 'required|max:255|string',
                'fname' => 'required|max:255|string',
                'mname' => 'required|max:255|string',
                'lname' => 'required|max:255|string',
                'stud_add' => 'required|max:255|string',
                'stud_DOB' => 'required|max:255|string',
            ]);

            student_M::findOrFail($id)->update($request->all());
            return redirect()->back()->with('status', 'Employee Updated Successfully!');
            
        }
    }
}
