<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{

        public function index()
    {
        return view('classe');
    }
    public function result(Request $request)
    {
        $exam = new Exam();
        $exam->prenom = $request->prenom;
        $exam->nom = $request->nom;
        $exam->matiere = $request->matiere;
        $exam->note = $request->note;
        $exam->examen = $request->examen;
        $exam->semestre = $request->semestre;
        $exam->save();
        return redirect('classe')->with('status', 'Enregistrement Reussi');
        
    }
}
