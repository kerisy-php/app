<?php
/**
 * Kerisy Framework
 *
 * PHP Version 7
 *
 * @author          kaihui.wang <hpuwang@gmail.com>
 * @copyright      (c) 2015 putao.com, Inc.
 * @package         kerisy/framework
 * @version         3.0.0
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