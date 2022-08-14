<?php

namespace App\Http\Controllers\registroDeDadosDefault;

use App\Http\Controllers\Controller;
use App\Models\Campus;
use App\Models\Empresa;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class registroDeCampi extends Controller
{
    public function create(Request $request){

        $url = "https://suap.ifpb.edu.br/api/recursos-humanos/campus/v1/";

        $response = Http::withBasicAuth(getenv('API_URSERNAME'),
            getenv('API_PASSWORD'))->get($url);

        if ($response->status() != 200){
            return response('Não concluido!');
        }

        $jsonData = $response->json();
        $contador = 0;
        try{
            foreach ($jsonData['results'] as $item){

                $campus = Campus::create([
                    'nome' => str_replace("CAMPUS ", "",$item['nome']),
                    'sigla' => str_replace("CAMPUS-", "",$item['sigla']),
                ]);
                $contador += 1;
            }
            event(new Registered($campus));
        }
        catch (QueryException $ex){
            if ($ex->getCode() != 23000){
                return response("Erros encontrados!");
            }
        }
        return response('Concluido! (' . $contador . ') informações inseridas!');
    }
}
