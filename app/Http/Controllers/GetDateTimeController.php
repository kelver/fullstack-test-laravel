<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetDateTimeController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'data' => now()->format('d/m/Y à\s\ H:i')
        ], 200, [], JSON_PRETTY_PRINT);
    }
}
