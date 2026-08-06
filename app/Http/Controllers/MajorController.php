<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Displaying major list";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Displaying major create form";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Storing new major";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Displaying major with ID: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Displaying major edit form with ID: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Updating major with ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Deleting major with ID: {$id}";
    }
}