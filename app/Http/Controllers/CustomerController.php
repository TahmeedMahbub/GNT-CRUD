<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $cus_arr=[
            'Tahmeed',
            'Mahbub',
            'Rafid',
            'Shahir',
            'Zawad'
        ];
        return view('sub.customer', [
            'pass_cus_arr' => $cus_arr, // VARIABLE THAT WILL PASS TO OTHER PAGE => VAR NAME IN THIS PAGE
        ]);
    }
}
