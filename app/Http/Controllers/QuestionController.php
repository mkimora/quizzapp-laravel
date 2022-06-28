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
        Session::put("nextq",'1');
        Session::put("wrongans",'0');
        Session::put("correctans",'0');
        $q=question::all()->first();

        return view('answerDesk')->with(['question'=>$q]);
    }

    public function submitans(Request $request)
    {
        $nextq=Session::get('nextq');
        $wrongans=Session::get('wrongans');
        $correctans=Session::get('correctans');
        $validate = $request->validate([
            'ans' => 'required',
            'dbans' => 'required',
        ]);
        $nextq+=1;

        if($request->dbans==$request->ans)
        {
            $correctans+=1;
        }else{
            $wrongans+=1;
        }
        Session::put("nextq",$nextq);
        Session::put("wrongans",$wrongans);
        Session::put("correctans",$correctans);

        $i=0;
        $questions=question::all();
        
        foreach($questions as $question)
        {
            $i++;
            if($questions->count() < $nextq)
            {
                return view('end');
            }
            if($i==$nextq)
            {
                return view('answerDesk')->with(['question'=>$question]);
            }
        }
    }
}
