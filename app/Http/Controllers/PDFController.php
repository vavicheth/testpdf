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

        dd($request->all());

        if($request->ajax())
        {

            return 'test success!';


        }

    }
}
