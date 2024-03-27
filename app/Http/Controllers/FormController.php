<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormSubmit;
use Mail;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $dataValidate = request()->validate([
            'first_name'    => 'required|max:100',
            'last_name'     => 'required|max:100',
            'email'         => 'required|email',
            'phone_number'  => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'referral'      => 'nullable|max:100',
            'interested_in' => 'required',
            'attachment'    => 'nullable|mimes:pdf,doc,docx|max:99999',
            //recaptchaFieldName() => recaptchaRuleName()
        ]);

        $data = $request->all();
        // dd($data);

        $mail = new FormSubmit($data);
        // dd($mail);
        $file = $request->file('attachment');

        if($request->hasFile('attachment')){

            $mail->attach($file->getRealPath(), [
                'as'    => $file->getClientOriginalName(),
                'mime'  => $file->getClientMimeType()
            ]);          
            
        }

        // $emails = [
        //     'chris.liu@acralending.com',
        //     'chrisliu0416@gmail.com',
        //     // 'robert.jennings@acralending.com',
        // ];

        // if($request->filled('email3')){
        //     array_push($emails, $request->email3);
        // }
        // if($request->filled('email4')) {
        //     array_push($emails, $request->email4);
        // }
        //dd($mail);
        Mail::to(['webupdates@acralending.com', 'human_resources@acralending.com'])
        ->send($mail); 

        return response()->json(['success' => 'Sent Successfully. Someone will be in contact with you shortly.']);

        // return redirect('/')
        //     ->with('success', 'Form Sent Successfully');
    }
}
