<?php

namespace App\Core\Controller\Api;

class TestController extends \Kerisy\Http\Controller {

    public function get(\Kerisy\Http\Request $request, \Kerisy\Http\Response $response) {
        return json_encode(['error_code' => 10001, 'error' => 'test error :)']);
    }

}
