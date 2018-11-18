<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 15.05.18
 * Time: 23:38
 */
class api_telegram_controller extends api_helper
{
    public function webhook()
    {
        $this->writeLog('telegram', $_GET);
        $this->writeLog('telegram', $_POST);
//        $data = file_get_contents('php://input');
        $data = json_decode(file_get_contents('php://input'), true);
        $this->writeLog('telegram', $data);
    }
}