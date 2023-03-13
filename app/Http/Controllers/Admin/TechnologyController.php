<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::orderBy('updated_at', 'DESC')->paginate(10);
        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technology = new Technology();
        return view('admin.technologies.create', compact('technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'label' => 'required|string|unique:technologies|max:20',
            'color' => 'nullable|string|max:20',
            'icon' => 'nullable|string',
        ], [
            'lable.required' => "A technology must have at least one label",
            'label.max' => "Technology has a maximum of :max characters",
            'label.unique' => "Already exists a technology with this name",
            'color.max' => "The color must be a string with :max characters",
            'icon.string' => "Icon must be a string"
        ]);

        $data = $request->all();

        $technology = new Technology();

        $technology->fill($data);

        $technology->save();

        return to_route('admin.technologies.index')
            ->with('message', "'$technology->label' technology has been successfully created")
            ->with('technology', 'success');
    }


    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        return to_route('admin.technologies.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
        $request->validate([
            'label' => 'required|string|unique:technologies|max:20',
            'color' => 'nullable|string|max:20',
            'icon' => 'nullable|string',
        ], [
            'lable.required' => "A technology must have at least one label",
            'label.max' => "Technology has a maximum of :max characters",
            'label.unique' => "Already exists a technology with this name",
            'color.max' => "The color must be a string with :max characters",
            'icon.string' => "Icon must be a string"
        ]);

        $data = $request->all();

        $technology->update($data);

        return to_route('admin.types.index')
            ->with('message', "'$technology->label' technology has been successfully modified")
            ->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        $technology->delete();
        return to_route('admin.technologies.index')
            ->with('message', "'$technology->label' technology has been successfully deleted")
            ->with('technology', 'success');
    }
}
