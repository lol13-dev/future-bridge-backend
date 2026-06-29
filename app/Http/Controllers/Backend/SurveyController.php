<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surveys = Survey::orderBy('created_at', 'desc')->get();
        return view('backend.surveys.index', compact('surveys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.surveys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'description' => 'nullable|string',
            'is_active' => 'required|boolean',
        ], [
            'name.required' => 'Please enter the survey name.',
            'title.required' => 'Please enter the survey title.',
            'is_active.required' => 'Please select the survey status.',
        ]);
        
        $survey = Survey::create($request->all());

        return redirect()->route('admin.surveys.index')->with('success', 'Survey created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $survey = Survey::findOrFail($id);
        return view('backend.surveys.edit', compact('survey'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'description' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]);

        $survey = Survey::findOrFail($id);
        $survey->update($request->all());
        return redirect()->route('admin.surveys.index')->with('success', 'Survey updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $survey = Survey::findOrFail($id);
        $survey->delete();
        return redirect()->route('admin.surveys.index')->with('success', 'Survey deleted successfully.');
    }
}
