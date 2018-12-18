<?php
class webhook_bot1_controller extends bot_project
{
	public function end()
	{
		$this->writeLog('test', $_GET);
		$this->writeLog('test', $_POST);
		$raw = file_get_contents('php://input');
		$arr = json_decode($raw, true);
		$this->writeLog('test', $raw);
		$this->writeLog('test', getallheaders());
		if($arr['message']['entities'][0]['type'] === 'bot_command') {
			$bot = new bot_commands_class($arr['message']);
		}
		$this->success();
	}
}