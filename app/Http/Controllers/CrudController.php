<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $values = Crud::all();
        return view('testing_crud.index' , compact('values'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testing_crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    //   dd($request->all());
       
        $request->validate([
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'address' => 'required',
            ]);


            // elequent way to insert data into database
           
            // elequent way to insert data into database
            Crud::create([
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address
            ]);
    
            return redirect()->route('crud.index')->with('success', 'Data created successfully.');
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

        $value = Crud::find($id);
        return view('testing_crud.edit', compact('value'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
      $request->validate([
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'address' => 'required',
            ]);

            $crud = Crud::find($id);
            $crud->update([
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address
            ]);
    
            return redirect()->route('crud.index')->with('success', 'Data updated successfully.');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud = Crud::find($id);
        $crud->delete();

        return redirect()->route('crud.index')->with('success', 'Data deleted successfully.');
    }
}
