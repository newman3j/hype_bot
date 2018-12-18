<?php
class bot_commands_class extends bot_class 
{
	private $message;
	public function __construct($message)
	{
		$this->message = $message;
		$command = ltrim($message['text'], '/');
		if(method_exists($this, $command)) {
			$this->$command();
		} else {
			$this->fallback($this->message);
		}
	}

	private function start()
	{
		$this->getUser($this->message);
	}

	private function fallback() 
	{
		return false;
	}
}