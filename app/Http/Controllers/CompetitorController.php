<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CompetitorModel;
use Illuminate\Http\Request;

class CompetitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competitors  = competitorModel::all();
        return response()->json($competitors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()    
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" =>"required|string|max:255",
            "age" =>"required|string|max:255",
            "height" =>"required|string|max:255",
            "weight" =>"required|string|max:255",
            "gender" =>"required|string|max:255",
            "CPF" =>"required|string|max:255",
            "RG" =>"required|string|max:255",
            "team" =>"required|string|max:255",
            ]);

            $competitor = competitorModel::create($validatedData);

            return response()->json($competitor, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $competitor = competitorModel::find($id);
        if(!$competitor){
            return response()->json(["message" => "competitor not found"], 404);
        }
        return response()->json($competitor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $competitor = CompetitorModel::find($id);
            if(!$competitor){
                return response()->json(["message" => "competitor not found"], 404);
            }
                $validatedData = $request->validate([
                    "name" =>"required|string|max:255",
                    "age" =>"required|string|max:255",
                    "height" =>"required|string|max:255",
                    "weight" =>"required|string|max:255",
                    "gender" =>"required|string|max:255",
                    "CPF" =>"required|string|max:255",
                    "RG" =>"required|string|max:255",
                    "team" =>"required|string|max:255",
                    ]);

                    $competitor->update($validatedData);

                    return response()->json($competitor, 0);
            }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $competitor = CompetitorModel::find($id);
        if(!$competitor){
            return response()->json(["message" => "competitor not found"], 404);
        }
        $competitor->delete();

        return response()->json(["message" => "competitor deleted successfully"], 200);
    }
}