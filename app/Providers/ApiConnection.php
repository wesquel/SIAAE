<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;

class ApiConnection
{
    public function json($url, $user, $password){

        $response = Http::withBasicAuth($user,
            $password)->get($url);

        if ($response->status() != 200){
            return null;
        }

        return $jsonData = $response->json();
    }
}
