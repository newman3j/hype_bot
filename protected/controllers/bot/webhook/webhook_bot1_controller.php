<?php
class webhook_bot1_controller extends bot_project
{
	public function end()
	{
		$this->writeLog('test', $_GET);
		$this->writeLog('test', $_POST);
		$raw = file_get_contents('php://input');
		parse_str($raw, $params);
		$this->writeLog('test', json_decode($raw, true));
		$this->success();
	}
}