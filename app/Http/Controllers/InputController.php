<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function hello(Request $request): string
    {
        $name = $request->input('name');
        return "Hello $name";
    }
 
    public function helloFirstName(Request $request) : string 
    {
        $firstName = $request->input('name.first');
        return "Hello $firstName";
    }

    public function helloInput(Request $request) : string
    {
        $input = $request->input();
        return json_encode($input);    
    }

    public function arrayInput(Request $request): string 
    {
        $names = $request->input('products.*.name');
        return json_encode($names);
    }

    public function inputQuery(Request $request) : string {
        $query = $request->query();
        return json_encode($query);
    }
}
