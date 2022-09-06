<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;

class ControllerTeste extends Controller
{
    public function create(){
        return view('teste');
    }

    public function postData(Request $request)
    {
        $input = $request->all();
        $input['cat'] = json_encode($input['cat']);

        Post::create($input);

        dd('Post created successfully.');
    }
}
