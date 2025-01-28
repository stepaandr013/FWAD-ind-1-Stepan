<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        $client = auth('client')->user();
        return view('client.home', compact('client'));
    }
    public function auth_h()
    {
        $title = "Autodoc | Login";
        return view('client.auth', compact('title'));
    }
    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth('client')->attempt($credentials)) {
            return to_route('client.home');
        }

        return back()->with('error', 'The provided credentials do not match our records.');
    }

    public function register(){
        $title = 'Register';

        return view('client.register', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required'
        ]);

        $client = new Client();

        $client->name = $request->name;
        $client->email = $request->email;
        $client->password = bcrypt($request->password);

        $client->save();

        return redirect()->back()->with('success', 'You have been registered successfully');
    }

    public function logout()
    {
        auth('client')->logout();

        return redirect()->route('client.auth');
    }
}
