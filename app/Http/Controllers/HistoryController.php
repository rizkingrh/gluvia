<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the dashboard with historical data.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        
        // Calculate stats
        // We use all() for stats to be accurate across all data, not just the current page
        // For larger datasets, this should be cached or query-optimized
        $averageGlucose = History::all()->avg('glucose');
        $totalRecords = History::count(); // Using total records as requested "Total Patients" proxy

        $histories = History::orderBy('created_at', 'desc')->paginate($perPage)->withQueryString();

        return view('glucose-history', compact('histories', 'averageGlucose', 'totalRecords', 'perPage'));
    }
}
