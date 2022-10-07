<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    public function submitContact(Request $request){
        sleep(1);  
        return response()->json(['success'=>'Thank you! Our team will be in touch.']);
    }

    public function submitContact2(Request $request){
        return response()->json(['success'=>'Thank you! Our team will be in touch.']);
    }



    public function submitFooterContact(Request $request){
        sleep(1);  
        return response()->json(['success'=>'Great, You have been subscribed.']);
    }

    public function unsubscribe(Request $request){
        sleep(1);  
        return response()->json(['success'=>'You have been successfully unsubscribed.']);
    }

}