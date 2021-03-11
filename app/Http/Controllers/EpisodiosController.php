<?php

namespace App\Http\Controllers;

use App\Models\Episodio;

class EpisodiosController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->classe = Episodio::class;
    }

    public function buscaPorSerie(int $serieId)
    {
        $pisodios = Episodio::query()
            ->where('serie_id', $serieId)
            ->paginate();

        return $pisodios;
    }
}
