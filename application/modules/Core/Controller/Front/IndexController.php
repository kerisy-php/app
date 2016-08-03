<?php

namespace App\Core\Controller\Front;

use Kerisy\Http\Controller;

class IndexController extends \Kerisy\Http\Controller
{
    public function index(\Kerisy\Http\Request $request, \Kerisy\Http\Response $response)
    {
        return $response->view('core/index');
    }
    
    public function json($request, \Kerisy\Http\Response $response)
    {
        return $response->json(['id' => 1, 'name' => 'aaa']);
    }
}
