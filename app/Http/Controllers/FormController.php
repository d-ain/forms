<?php

namespace App\Http\Controllers;

use App\Models\Form;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $this->validate($request, Form::$rules);
        $form = $request->all();
        Form::create($form);
        return redirect('/add');
    }
    public function thanks()
    {
        return view('thanks');
    }
}