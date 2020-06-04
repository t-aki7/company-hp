<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        
        return view('contacts.index', [
            'contacts' => $contacts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = new Contact;

        return view('contacts.create', [
            'contact' => $contact,
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('action');
        if($request->action === '修正') {
            return redirect()->route('contacts.create')->withInput($input);
        }
        
        $request->session()->regenerateToken();
        
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->content = $request->content;
        $contact->save();
        
        //メール送信
        \Mail::send(new \App\Mail\ContactMail([
            'to' => $request->email,
            'to_name' => $request->name,
            'my_adress' => 'aki.toyomasu@gmail.com',
            'my_name' => '豊増明博',
            'subject' => 'お問い合わせ受付完了のお知らせ',
            'body' => $request->content,
        ],'to'));
        
        return view('contacts.result');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function confirm(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:20',
            'email' => 'required',
            'content' => 'required|max:1000',
        ]);
        
        $confirms = $request;
        
        return view('contacts.confirm', [
            'confirms' => $confirms,
        ]);
    }
}
