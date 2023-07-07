<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Tb_crud;

class ApiCrudController extends BaseController
{
    public function __construct()
    {
        $this->classe = Tb_crud::class;
    }
}
