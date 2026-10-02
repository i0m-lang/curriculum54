<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(5);
        return view('contact.index', compact('contacts'));
    }
    
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contact.edit', compact('contact'));
    }

    public function user()
    {
        return view('contact.user');
    }

    public function send(Request $request)
    {
        $contact = new Contact();
        $contact->company    = $request->company;
        $contact->name       = $request->name;
        $contact->phone      = $request->phone;
        $contact->mail      = $request->mail;
        $contact->birthday    = $request->birthday;
        $contact->sex = $request->sex;
        $contact->job       = $request->job;
        $contact->contact    = $request->contact;

        $contact->save();

        return redirect()->route('contact.index')->with('success', 'アカウントを登録しました。');
    }

    public function confirm(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->route('contact.user');
        }

        $validated = $request->validate([
            'company'  => 'required|string|max:50',
            'name'     => 'required|string|max:30',
            'phone'    => 'required|regex:/^[0-9-]+$/',
            'mail'     => 'required|email',
            'birthday' => 'required|date',
            'sex'      => 'required',
            'job'      => 'required',
            'contact'  => 'required|max:1000',
        ]);

        return view('contact.confirm', compact('validated'));
    }
    
    public function update(Request $request)
    {
        $contact = Contact::findOrFail($request->id);
        $contact->update($request->only(['status', 'remarks']));

        return redirect()->route('contact.index')
                        ->with('message', '更新しました');
    }
}