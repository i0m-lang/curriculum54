<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function send(Request $request)
    {
        $user = new User();
        $user->name       = $request->name;
        $user->kana       = $request->kana;
        $user->email      = $request->email;
        $user->password   = Hash::make($request->password);
        $user->phone      = $request->phone;
        $user->zipcode    = $request->postcode;
        $user->prefecture = $request->prefecture;
        $user->city       = $request->city;
        $user->address    = $request->address;
        $user->remarks    = $request->remarks;

        $user->save();

        return redirect()->route('admin.account')->with('success', 'アカウントを登録しました。');
    }

    public function confirm(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->route('contact.index');
        }

        $validated = $request->validate([
            'name'       => 'required|string|max:30',
            'kana'       => 'required|string|max:30',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|min:8',
            'phone'      => 'required|regex:/^[0-9-]+$/',
            'postcode'   => 'required|regex:/^[0-9-]+$/',
            'prefecture' => 'required',
            'city'       => 'required|max:30',
            'address'    => 'required|max:50',
            'remarks'    => 'nullable|max:255',
        ]);

        return view('contact.confirm', compact('validated'));
    }
}