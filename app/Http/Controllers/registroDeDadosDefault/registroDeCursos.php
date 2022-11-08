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
    public function create(){

        $apiConnection = new ApiConnection();

        $jsonData = $apiConnection->json('https://suap.ifpb.edu.br/api/ensino/cursos/v1/'
        ,getenv('API_URSERNAME'), getenv('API_PASSWORD'));

        $campi = Campus::all()->jsonSerialize();

        if ($jsonData == null){
            return response("NULL");
        }

        $contador = 0;

        while (True){
            $next = $jsonData['next'];
            try{
                foreach ($jsonData['results'] as $item){
                    $campiId = 1;
                    foreach ($campi as $campus){
                        if (str_contains($item['diretoria'], "-JP")){
                            $campiId = 2;
                            break;
                        }
                        if ($campus['nome'] != 'REITORIA' && (
                            str_contains($item['diretoria'], $campus['nome'])
                            ||
                            str_contains($item['descricao'], $campus['nome'])
                            ||
                            str_contains($item['descricao'], $campus['sigla'])
                            ||
                            str_contains($item['descricao'], $campus['sigla'])
                            )){
                            $campiId = $campus['id'];
                            break;
                        }
                    }

                    $curso = Curso::create([
                        'nome' => $item['descricao'],
                        'modalidade' => $item['modalidade'],
                        'diretoria' => $item['diretoria'],
                        'codigo' => $item['codigo'],
                        'campi_id' => $campiId,
                    ]);
                    $contador += 1;
                }
                event(new Registered($curso));
            }catch (QueryException $ex){
                if ($ex->getCode() != 23000){
                    return response("Erros encontrados!");
                }
            }

            if ($next == null){
                break;
            }

            $jsonData = $apiConnection->json($next
                ,getenv('API_URSERNAME'), getenv('API_PASSWORD'));
        }

        return response('Concluido! (' .$contador. ') informações inseridas!');
    }
}
