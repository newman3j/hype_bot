<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 15.05.18
 * Time: 23:53
 */
class tbot_class extends staticBase
{
    private static $instance;

    private static function bot()
    {
        if(null === self::$instance) {
            require_once PROTECTED_DIR . 'vendor/autoload.php';
            self::$instance = new Telegram\Bot\Api(WINKL_BOT);
        }
        return self::$instance;
    }

    public static function sendToRole($role_id, $message)
    {
        $users = self::model('system_users')->getByField('role_id', $role_id, true);
        foreach ($users as $user) {
            if($user['telegram_chat_id']) {
                try {
                    self::bot()->sendMessage([
                        'chat_id' => $user['telegram_chat_id'],
                        'text' => $message
                    ]);
                } catch (Exception $e) {
                    return false;
                }

            }
        }
        return true;
    }

    public static function send($chat_id, $message)
    {
        if(!empty($chat_id)) {
            try {
                self::bot()->sendMessage([
                    'chat_id' => $chat_id,
                    'text' => $message
                ]);
            } catch (Exception $e) {
            }
        }
    }

    public static function orderNotification($order)
    {
        $users = self::model('system_users')->getByField('order_notification', 1, true);
        foreach ($users as $user) {
            tbot_class::send($user['telegram_chat_id'], 'New order! https://admin.' . DOMAIN . '/orders/order/?id=' . $order['id']);
        }
    }
}