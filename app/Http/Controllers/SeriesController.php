<?php

namespace App\Http\Controllers;

use App\Models\Serie;

class SeriesController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->classe = Serie::class;
    }

}
