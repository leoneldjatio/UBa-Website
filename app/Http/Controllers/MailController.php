<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class MailController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:10'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'details'   =>   $request->message,
            'email'     =>   $request->email,
            'subject'   =>    $request->subject,
        );

        Mail::send('dynamic_email_template',$data,function($emailDetails) use($data){

            $emailDetails->from($data['email']);
            $emailDetails->to('leonelfoma@gmail.com');
            $emailDetails->subject($data['subject']);
        });
        Session::flash('Success','Thanks for contacting us!');
        return redirect('/contact');

    }
}
