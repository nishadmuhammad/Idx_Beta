<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Validator;
class EnquiryController extends Controller
{
    public function addTask(request $request){
        $user_id = 1;//Auth::User()->user_id;

    
        $validator=validator::make($request->all(),[

           
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',

            ]);
            if ($validator->fails()){
                return response()->json(['error'=>$validator->errors()],400);
            }

            $name   = $request->input('name');
            $email   = $request->input('email');
            $message   = $request->input('message');
       
            $res = DB::table ('enquiry')
            ->insert([
                 'message' => $message,
                'name' => $name,
                'email' => $email,
                
            ]);
            if($res){
                return response()->json(['message'=>'enquiry submitted successfully ','success'=>true],200);
            }else{
                return response()->json(['message'=>'enquiry failed','success'=>false],200);
            }
}
}
