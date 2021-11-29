<?php


namespace core\admin\expansion;


use core\admin\controller\BaseAdmin;
use core\base\controller\Singleton;

class TeachersExpansion1 extends BaseAdmin
{
    use Singleton;

    public function expansion($args = []) {
        $this->title = 'test';
    }


}