<?php
/**
 * User: Peter Wang
 * Date: 16/9/28
 * Time: 下午7:17
 */

namespace App\Lib\Middleware;

use Kerisy\Http\Request;
use Kerisy\Http\Response;

class Author
{

    public function perform(Request $request, Response $response)
    {
        $response->redirect("/index/test");
        return false;
    }

}