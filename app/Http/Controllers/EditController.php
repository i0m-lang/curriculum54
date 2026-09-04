<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class EditController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('edit.index', compact('user'));
    }

    public function confirm(Request $request)
   {
        if ($request->isMethod('get')) {
            return redirect()->route('admin.account');
        }

        $validated = $request->validate([
            'id'         => 'required|exists:users,id',
            'name'       => 'required|string|max:30',
            'kana'       => 'required|string|max:30',
            'email'      => 'required|email|unique:users,email,' . $request->id,
            'password'   => 'nullable|min:8',
            'phone'      => 'required|regex:/^[0-9-]+$/',
            'postcode'   => 'required|regex:/^[0-9-]+$/',
            'prefecture' => 'required|string',
            'city'       => 'required|max:30',
            'address'    => 'required|max:50',
            'remarks'    => 'nullable|max:255',
        ]);

        return view('edit.confirm', compact('validated'));
    }

    public function send(Request $request)
    {
        $user = User::findOrFail($request->id);

        $user->name       = $request->name;
        $user->kana       = $request->kana;
        $user->email      = $request->email;
        $user->phone      = $request->phone;
        $user->zipcode    = $request->postcode;
        $user->prefecture = $request->prefecture;
        $user->city       = $request->city;
        $user->address    = $request->address;
        $user->remarks    = $request->remarks;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('admin.account')->with('success', 'アカウント情報を更新しました。');
    }
}