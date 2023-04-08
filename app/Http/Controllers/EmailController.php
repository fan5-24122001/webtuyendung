<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use App\Models\Apply;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    public function create($id)
    {
        return view('layouts.pages.userpost.mail.checkmail', compact(['id']));
    }

    public function sendEmail(Request $request)
    {

        $request->validate([
          
          
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required', 
        ]);

        // $data1 = new Apply; 
        $data1 = Apply::where('id','=',$request->id_apply)->first();
        $data = [
          'nameUser'=>$data1->name,//name của người dùng
          'email'=>$data1->email,
          'name'=>$request->name,
          'subject' => $request->subject, 
          'content' => $request->content
        ];

        Mail::send('layouts.pages.userpost.mail.check_email', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return back()->with(['message' => 'Gửi Mail Thành Công '],);
    }
}