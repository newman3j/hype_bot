<?php
class webhook_bot1_controller extends bot_project
{
	public function end()
	{
		$this->writeLog('test', $_GET);
		$this->writeLog('test', $_POST);
		$raw = file_get_contents('php://input');
		$this->writeLog('test', $raw);
		$this->success();
	}
}