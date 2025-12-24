<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'glucose' => 'required',
            'status' => 'required|string',
        ]);
        
        $history = History::create($validated);
        
        return response()->json([
            'error' => false,
            'message' => 'History created successfully',
        ], 201);
    }

    public function index()
    {
        return view('glucose-history');
    }
}
