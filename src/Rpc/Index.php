<?php

/**
 * User: Peter Wang
 * Date: 16/9/13
 * Time: 下午3:18
 */
namespace App\Rpc;

use Kerisy\Rpc\Controller;

class Index extends Controller
{

    public function index()
    {
       return $this->response("hello Kerisy");
    }
}