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
            'question'=>'required',
            'opa'=>'required',
            'opb'=>'required',
            'opc'=>'required',
            'opd'=>'required',
            'ope'=>'required',
            'opf'=>'required',
            'opg'=>'required',
            'oph'=>'required',
            'opi'=>'required',
            'opj'=>'required',
            'ans'=>'required',
        ]);
        $q=new question();
        $q->question=$request->question;
        $q->a=$request->opa;
        $q->b=$request->opb;
        $q->c=$request->opc;
        $q->d=$request->opd;
        $q->e=$request->ope;
        $q->f=$request->opf;
        $q->g=$request->opg;
        $q->h=$request->oph;
        $q->i=$request->opi;
        $q->j=$request->opj;
        $q->ans=$request->ans;

        //$q=save();
        Session::put('successMessage',"Question successfully Added");

        return redirect('questions');
    }
}
