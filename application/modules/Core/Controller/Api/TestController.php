<?php

namespace Core\Conrtoller\Api;

class TestController extends \Kerisy\Http\Controller {

    public function get($request, $response) {
        return json_encode(['error_code' => 10001, 'error' => 'test error :)']);
    }

}
