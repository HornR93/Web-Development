<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    // Zobrazí formulář pro přidání návštěvníka
    public function create()
    {
        return view('visitors.create');
    }

    // Uloží návštěvníka do databáze
    public function store(Request $request)
    {
        // Ověření dat
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female', // pokud používáš enum pro pohlaví
            'mail' => 'required|email|unique:visitors,mail',
            'note' => 'nullable|string|max:255',
        ]);

        // Vytvoření nového návštěvníka
        Visitor::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'mail' => $request->mail,
            'note' => $request->note,
        ]);

        // Přesměrování zpět na formulář s potvrzením
        return redirect()->route('visitors.create')->with('success', 'Návštěvník byl úspěšně přidán.');
    }
}