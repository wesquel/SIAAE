<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cardVaga extends Component
{

    private $nomeEmepresa;
    private $localEmpresa;
    private $contatoEmpresa;
    private $cargo;
    private $tipo;
    private $modalidade;
    private $resumo;
    private $idVaga;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nomeEmpresa, $localEmpresa, $contatoEmpresa, $cargo, $tipo, $modalidade, $resumo, $idVaga)
    {
        $this->nomeEmepresa = $nomeEmpresa;
        $this->localEmpresa = $localEmpresa;
        $this->contatoEmpresa = $contatoEmpresa;
        $this->cargo = $cargo;
        $this->tipo = $tipo;
        $this->modalidade = $modalidade;
        $this->resumo = $resumo;
        $this->idVaga = $idVaga;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-vaga', [
            'nomeEmpresa' => $this->nomeEmepresa,
            'localEmpresa' => $this->localEmpresa,
            'contatoEmpresa' => $this->contatoEmpresa,
            'cargo' => $this->cargo,
            'tipo' => $this->tipo,
            'modalidade' => $this->modalidade,
            'resumo' => $this->resumo,
            'idVaga' => $this->idVaga
        ]);
    }
}
