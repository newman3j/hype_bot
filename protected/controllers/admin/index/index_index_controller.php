<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 14.09.17
 * Time: 16:44
 */
class index_index_controller extends index_helper
{
    public function content()
    {
        $this->view('index/index');
    }

    protected function rules()
    {
        $this->rules = [
            'content' => [
                'auth' => true,
                'allowed_roles' => 'all'
            ],
            'test' => [
                'allowed_methods' => ['GET', 'POST'],
                'auth' => false,
            ],
        ];
    }

    public function test()
    {
        $this->writeLog('test', $_GET);
        $this->writeLog('test', $_POST);
        $this->writeLog('test', $_SERVER);
        $data = file_get_contents('php://input');
        $this->writeLog('test', $data);
    }
}