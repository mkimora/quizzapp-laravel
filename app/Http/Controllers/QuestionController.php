<?php

namespace App\Http\Controllers;

use App\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    public function add(Request $request)
    {
        $validate = $request->validate([
            'question' => 'required',
            'opa' => 'required',
            'opb' => 'required',
            'opc' => 'required',
            'opd' => 'required',
            'ans' => 'required',
        ]);
        $q = new question();
        $q->question = $request->question;
        $q->a = $request->opa;
        $q->b = $request->opb;
        $q->c = $request->opc;
        $q->d = $request->opd;
        $q->ans = $request->ans;

        $q->save();
        Session::put('successMessage', "Question ajoutée avec succés");

        return redirect('questions');
    }

    public function show()
    {
        $qs = question::all();

        return view('questions')->with(['questions' => $qs]);
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'question' => 'required',
            'opa' => 'required',
            'opb' => 'required',
            'opc' => 'required',
            'opd' => 'required',
            'ans' => 'required',
            'id' => 'required',
        ]);
        $q = question::find($request->id);
        $q->question = $request->question;
        $q->a = $request->opa;
        $q->b = $request->opb;
        $q->c = $request->opc;
        $q->d = $request->opd;
        $q->ans = $request->ans;

        $q->save();
        Session::put('successMessage', "Question modifiée avec succés");

        return redirect('questions');
    }

    public function delete(Request $request)
    {
        $validate = $request->validate([
            'id' => 'required',
        ]);
        question::where('id',$request->id)->delete();

        Session::put('successMessage', "Question supprimée avec succés");

        return redirect('questions');
    }

    public function startquiz()
    {
        
    }
}
