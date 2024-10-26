<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'dni' => 'required|numeric',
            'password' => 'required|min:8'
        ]);
        
        $dni = $request->input('dni');
        $password = $request->input('password');
    
        if ($dni == "75902205" && $password == "edward@75902205") {
            auth()->loginUsingId(1); 
            return redirect()->route('admin.inicio'); 
        } else {
            if (auth()->attempt(['dni' => $dni, 'password' => $password])) {
                return redirect()->route('welcome'); 
            } else {
                return back()->withErrors(['message' => 'DNI o contraseña incorrectos']); 
            }
        }
    }    
}

