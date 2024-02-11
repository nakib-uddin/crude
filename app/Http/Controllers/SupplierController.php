<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', ['suppliers' => $suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'contact_person' => 'required',
            'email' => 'required|email|unique:suppliers',
            'phone_number' => 'nullable',
            'address' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'zip_code' => 'nullable',
            'country' => 'nullable',
            'tax_id' => 'nullable',
        ]);
    
        $newSupplier = Supplier::create($data);
        return redirect(route('supplier.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', ['supplier' => $supplier]);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $data = $request->validate([
            'name' => 'required',
            'contact_person' => 'required',
            'email' => 'required|email|unique:suppliers,email,' . $supplier->id,
            'phone_number' => 'nullable',
            'address' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'zip_code' => 'nullable',
            'country' => 'nullable',
            'tax_id' => 'nullable',
        ]);
    
        $supplier->update($data);
    
        return redirect(route('supplier.index'))->with('success', 'Supplier updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

    return redirect(route('supplier.index'))->with('success', 'Supplier deleted successfully');

    }
}
