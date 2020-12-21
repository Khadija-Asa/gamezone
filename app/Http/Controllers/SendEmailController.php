<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
  function index()
  {
   return view('contact');
  }

  function send(Request $request)
  {
    $this->validate($request, [
      'name'     =>  'required',
      'mail'  =>  'required',
      'message' =>  'required'
    ]);

    $data = array(
        'name'      =>  $request->name,
        'mail'   =>   $request->mail,
        'message'   =>   $request->message
    );

    Mail::to('contact@gamezone.fr')->send(new SendMail($data));
    dd($data);
    return redirect()->route('contact', ['success' => true]);
  }
}
