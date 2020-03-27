<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
//    public function index()
//    {
//        return view('index');
//    }

    public function savepdf(Request $request)
    {

//        dd($request->keys());

//        return response($request->keys());

//        if($request->hasfile('pdf'))
//        {
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename ='001'.'.'.'pdf';
            $file->move('pdf/', $filename);
            return response('Successful!');
//            return response($extension);
//        }
//        return response('Testing no file');
        return response($request->keys());

//        return response('Testing 001');
//        return response($request->all());

//        if($request->ajax())
//        {
//            return 'test success!';
//        }

    }
}
