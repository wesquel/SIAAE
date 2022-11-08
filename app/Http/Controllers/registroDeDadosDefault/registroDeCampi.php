<?php

namespace App\Http\Controllers\registroDeDadosDefault;

use App\Http\Controllers\Controller;
use App\Models\Campus;
use App\Models\Empresa;
use App\Providers\ApiConnection;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class registroDeCampi extends Controller
{
    public function create(){

        $apiConnection = new ApiConnection();

        $jsonData = $apiConnection->json('https://suap.ifpb.edu.br/api/recursos-humanos/campus/v1/'
            ,getenv('API_URSERNAME'), getenv('API_PASSWORD'));

        if ($jsonData == null){
            return response("NULL");
        }

        $contador = 0;

        try{
            foreach ($jsonData['results'] as $item){

                $campus = Campus::create([
                    'nome' => str_replace("CAMPUS ", "",$item['nome']),
                    'sigla' => str_replace("CAMPUS-", "",$item['sigla']),
                ]);
                $contador += 1;
            }
            $campus = Campus::create([
                'nome' => "PEDRAS DE FOGO",
                'sigla' => "PF",
            ]);


            $campus = Campus::create([
                'nome' => "AREIA",
                'sigla' => "AR",
            ]);

            $campus = Campus::create([
                'nome' => "SOLEDADE",
                'sigla' => "SL",
            ]);

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
