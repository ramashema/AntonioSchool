<?php

namespace App\Http\Controllers;

use App\Darasa;
use App\Guardian;
use Illuminate\Http\Request;
use App\Student;

use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        # home page that display the list of students
        $students = Student::orderBy('first_name', 'asc')->paginate(10);

        return view('students_list')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $guardians = Guardian::all();
        $madarasa = Darasa::all();

        return view('students_create')->with(['guardians' => $guardians, 'madarasa'=> $madarasa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:50|alpha',
            'middle_name' => 'nullable|max:50|alpha',
            'last_name' => 'required|max:50|alpha',
            'date_of_birth' => 'date',
            'guardian' => 'required|numeric',
            'darasa' => 'required|numeric'
        ]);

        Student::create([
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'date_of_birth' => $request->input('date_of_birth'),
            'guardian_id' => $request->input('guardian'),
            'darasa_id' => $request->input('darasa'),
        ]);

        $students = Student::all();
        return redirect(route('students.index'))->with('success', 'Student Added')->with('students', $students);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
