<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'glucose' => 'required|string',
            'status' => 'required|string',
        ]);
        
        History::create($validated);

        return response()->json([
            'error' => false,
            'message' => 'History created successfully',
        ], 201);
    }

    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        
        // Calculate stats
        $averageGlucose = History::all()->avg('glucose');
        $totalRecords = History::count();

        $histories = History::orderBy('created_at', 'desc')->paginate($perPage)->withQueryString();

        return view('glucose-history', compact('histories', 'averageGlucose', 'totalRecords', 'perPage'));
    }
}
