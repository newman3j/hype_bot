<?php
class bot_class extends base
{
	protected $user;
	protected function getUser($message)
	{
		$user = $this->model('bot_users')->getByField('chat_id', $message['chat']['id']);
		if($user) {
			$this->user = $user;
			return true;
		} elseif($request) {
			return $this->createUser($request);
		} else {
			return false;
		}
	}

	protected function createUser($message)
	{
		$user = [
			'chat_id' => $message['chat']['id'],
			'tg_user_id' => $message['from']['id'],
			'user_name' => $message['chat']['username'] ? $message['chat']['first_name'] : $message['from']['username'],
			'first_name' => $message['chat']['first_name'] ? $message['chat']['first_name'] : $message['from']['first_name'],
			'create_date' => date('Y-m-d H:i:s')
		];
		if($user = $this->model('bot_users')->insert($user)) {
			$this->user = $user;
			return true;
		}
		return false;
	}
}