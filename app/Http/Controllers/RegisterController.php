<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register",
            ]);
    }
    public function store (Request $request)
    {
    $validateData = $request->validate([
    'name'=>'required|max:255',
    'username'=>'required|min:3|max:255|unique:users',
    'email'=>'email:dns|unique:users',
    'password'=>'required|min:5|max:255'
    ]);
    $validateData['password'] = Hash::make($validateData['password']);

    User::create($validateData);
    return redirect('/login')->with('sukses', 'register Berhasi, Silahkan Login !');
}
}