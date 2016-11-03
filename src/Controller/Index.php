<?php

/**
 * User: Peter Wang
 * Date: 16/9/13
 * Time: 下午3:18
 */
namespace App\Controller;

use Kerisy\Foundation\Controller;

class Index extends Controller
{

    public function index()
    {
        $this->view->me = "Kerisy";
        return $this->render("index/index");
    }

}