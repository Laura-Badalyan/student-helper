<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpinionsController extends Controller
{
    protected $view = "pages.opinions";

    public function index()
    {
        return $this->view('index');
    }
}
