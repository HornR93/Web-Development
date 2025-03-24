<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index ()
    {

        return view('subscription');

    }

    public function store(Request $request)
    {
        $request->validate([
            'visitor_id' => 'required|integer|exists:visitors,id',
            'visit_count' => 'nullable|integer|min:0',
            'expiration_date' => 'required|date|after:today',
            'price' => 'nullable|numeric|min:0',
            'status' => 'boolean',  //is_active
        ]);

        Visitor::create([
            'visitor_id' => $visitor->id,
            'visit_count' => $request->visit_count,
            'expiration_date' => $request->expiration_date,
            'price' => $request->price,
            'status' => $request->status,
        ]);

          }
};
