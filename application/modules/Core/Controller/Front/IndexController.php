<?php
/**
 * 首页
 */

namespace App\Core\Controller\Front;


class IndexController extends \Controller
{
    public function index()
    {
        $this->display("front/index/index");
    }
}