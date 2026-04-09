<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Crud;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
        $values = Profile::with('crud')->get();
        return view('profiles.index', compact('values'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $values = Crud::all();
        return view('profiles.create', compact('values'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'crud_id' => 'required|exists:cruds,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'email' => 'required|email|unique:profiles,email',
        ]);

        Profile::create([
            'crud_id' => $request->crud_id,
            'name' => $request->name,
            'description' => $request->description,
            'email' => $request->email,
        ]);

        return redirect()->route('profile.index')->with('success', 'Profile created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
