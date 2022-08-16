<?php

namespace App\Http\Controllers\registroDeDadosDefault;

use App\Http\Controllers\Controller;
use App\Models\Campus;
use App\Models\Curso;
use App\Providers\ApiConnection;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class registroDeCursos extends Controller
{
    public function create(Request $request){

        $apiConnection = new ApiConnection();

        $jsonData = $apiConnection->json('https://suap.ifpb.edu.br/api/ensino/cursos/v1/'
        ,getenv('API_URSERNAME'), getenv('API_PASSWORD'));


        if ($jsonData == null){
            return response("NULL");
        }
        $check = True;
        $contador = 0;

        while ($check){

            $next = $jsonData['next'];
            try{
                foreach ($jsonData['results'] as $item){
                    $curso = Curso::create([
                        'nome' => $item['descricao'],
                        'modalidade' => $item['modalidade'],
                        'diretoria' => $item['diretoria'],
                        'campi_id' => 1,
                    ]);
                    $contador += 1;
                }
            }catch (QueryException $ex){

            }



            if ($next == null){
                break;
            }

            $jsonData = $apiConnection->json($next
                ,getenv('API_URSERNAME'), getenv('API_PASSWORD'));

            event(new Registered($curso));
        }

        return response('Concluido! (' .$contador. ') informações inseridas!');
    }
}
