<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(): View {
        $register = Register::latest()->paginate(5);
        
        return view('auth.register',compact('register'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View {
        return view('auth.register_create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        
        Product::create($request->all());
         
        return redirect()->route('auth.register')->with('success','Product created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Product $product): View {
        return view('auth.register.show',compact('product'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): View {
        return view('auth.register.edit',compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        
        $product->update($request->all());
        
        return redirect()->route('auth.register')->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse {
        $product->delete();
        return redirect()->route('auth.register')->with('success','Product deleted successfully');
    }
}
