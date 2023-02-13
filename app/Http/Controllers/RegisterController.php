<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index () {
        return view('auth.register');
    }

    public function store (Request $request) {

        $request->request->add([
            "slug" => Str::slug($request->slug)
        ]);

        $this->validate($request, [
            'name' => 'required',
            'slug' => ['required','unique:users'],
            'email' => ['required','unique:users','email'],
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' =>  $request->get('email'),
            'password' => Hash::make($request->password),
            'slug' => $request->slug
        ]);
        
        dd($request->get('name'),
            $request->get('slug'),
            $request->get('email'),
            $request->get('password')
        );
    }
}
