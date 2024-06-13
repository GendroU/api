<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mercedes;

class MercedesController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->get('limit');

        if ($limit) {
            return response()->json(Mercedes::limit($limit)->get());
        }

        return response()->json(Mercedes::get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'mudel' => 'required|string',
            'engine' => 'required|string',
            'image_url' => 'required|url',
        ]);

        $mercedes = Mercedes::create($request->all());

        return response()->json($mercedes);
    }

    public function show(Mercedes $Mercedes)
    {
        return response()->json($Mercedes);
    }

    public function update(Request $request, Mercedes $Mercedes)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'mudel' => 'required|string',
            'engine' => 'required|string',
        ]);

        $Mercedes->update($request->all());

        return response()->json($Mercedes);
    }

    public function destroy(Mercedes $Mercedes)
    {
        $Mercedes->delete();

        return response()->json(['message' => 'Mercedes deleted']);
    }

}