<?php
/**
 * 关联页
 */

namespace App\Core\Controller\Front;


class IndexController extends \Controller
{
    public function index()
    {
        $this->display("front/index/index");
    }
}