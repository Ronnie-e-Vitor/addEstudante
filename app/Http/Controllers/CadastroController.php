<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->nome = $request->nome;
        $student->curso = $request->curso;

        $student->save();

        return response()->json([
            "message" => "Estudante Cadastrado"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::get()->toJson(JSON_PRETTY_PRINT);
        return response($students, 200);
    }

    public function exibirEstudante($id){
        if(Student::where('id', $id)->exists()){
            $students = Student::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($students, 200);

        }else {
            return response()->json([
                "message" => "Student not found"
            ],404);

        }



    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Student::where('id', $id)->exists()) {
            $student = Student::find($id);
            $student->nome = is_null($request->nome) ? $student->nome: $request->nome;
            $student->curso = is_null($request->curso) ? $student->curso: $request->curso;
            $student->save();

            return response()->json([
                "message" => "dados atualizados"
            ], 200);


        }else{
            return response()->json([
                "message" => "estudasnte nao enconrado"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
