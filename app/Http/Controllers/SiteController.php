<?php

namespace App\Http\Controllers;


class SiteController extends Controller
{
    protected $i_rep;
    protected $cart_rep;
    protected $title;
    protected $template;
    protected $vars = [];

    public function __construct()
    {
    }
    protected function renderOutput(){
        return view($this->template)->with($this->vars);
    }

}
