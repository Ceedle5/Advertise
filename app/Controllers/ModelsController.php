<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ModelsController extends BaseController
{
    public function v125()
    {
        return view('models/v125'); 
    }

    public function x200()
    {
        return view('models/x200');
    }

    public function g350()
    {
        return view('models/g350');
    }
}
