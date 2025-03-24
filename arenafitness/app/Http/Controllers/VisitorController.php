<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5',
            'gender' => 'required|in:male,female', 
            'mail' => 'required|email|unique:visitors,mail',
            'note' => 'nullable|string|max:255',
        ], [
            'name.required' => 'Jméno je povinné pole',
            'name.min' => 'Jméno musí mít alespoň 5 znaků',
            'mail.required' => 'Email je povinné pole',
            'mail.email' => 'Email musí být ve správném formátu',
            'mail.unique' => 'Tento email je již registrován',
        ]);

        Visitor::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'mail' => $request->mail,
            'note' => $request->note,
        ]);

        

          }

          public function create()
{
    $visitors = Visitor::all();
    return view('subscription');
}
}
