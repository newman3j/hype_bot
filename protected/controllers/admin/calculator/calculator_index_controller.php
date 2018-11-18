<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 08.04.18
 * Time: 23:37
 */
class calculator_index_controller extends admin_project
{
    public function content()
    {
        $this->view('calculator/index');
    }
}