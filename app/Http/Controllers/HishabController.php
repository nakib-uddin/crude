<?php

namespace App\Http\Controllers;

use App\Models\Hishab;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class HishabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $hishabs = Hishab::all();
            return view('hishabs.index', ['hishabs' => $hishabs]);
        }
        
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            $datas = Category::pluck( 'name','type','id');
            return view('hishabs.create', compact('datas'));
        }
        
        return redirect("login")->withSuccess('You are not allowed to access');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Fetch the category using its name (case-insensitive)
    $category = Category::where('name', $request['category'])->first();

    // Ensure the category exists
    if (!$category) {
        return redirect()->back()->withInput()->withErrors(['category' => 'Invalid category']);
    }

    // Validate form data
    $data = $request->validate([
        'category' => 'required',
        'amount' => 'required',
        // Uncomment this line if 'category_type' is required
    ]);

    // Add category type to the validation data
    $data['type'] = $category->type;

    // Create a new 'hisab' record
    $newHisab = Hishab::create($data);

    return redirect(route('hishab.index'))->with('success', 'Hisab created successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(Hishab $hishab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hishab $hishab)
    {
        if (Auth::check()) {
            return view('hishabs.edit', ['hishab' => $hishab]);  
        }
        
        return redirect("login")->withSuccess('You are not allowed to access');
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hishab $hishab)
    {
        $data = $request->validate([
            'category' => 'required',
            'amount' => 'required',

        ]);
        
        $hishab->update($data);
        return redirect(route('hishabs.index'))->with('success','Hishab Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hishab $hishab)
    {
        $hishab->delete();
        return redirect(route('hishab.index'))->with('success', 'Hishab deleted successfully');
        
    }
}
