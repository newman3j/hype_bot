<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 12.10.17
 * Time: 10:04
 */
class send_grid_api extends coreApi
{
    public static function sendHtml($to, $to_name, $subject, $template, $from = 'info@winkl.shop', $from_name = 'Winkl.')
    {
        require_once PROTECTED_DIR . 'vendor/autoload.php';
        $from = new SendGrid\Email($from_name, $from);
        $to = new SendGrid\Email($to_name, $to);
        $content = new SendGrid\Content("text/html", $template);
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        $apiKey = SEND_GRID_API_KEY;//getenv('SENDGRID_API_KEY');
        $sg = new \SendGrid($apiKey);
        $response = $sg->client->mail()->send()->post($mail);
        if($response->statusCode() == '200' || $response->statusCode() == 202) {
            return true;
        } else {
            return false;
        }
    }

    public static function sendText($to, $to_name, $subject, $template, $from = 'info@winkl.shop', $from_name = 'Winkl.')
    {
        require_once PROTECTED_DIR . 'vendor/autoload.php';
        $from = new SendGrid\Email($from_name, $from);
        $to = new SendGrid\Email($to_name, $to);
        $content = new SendGrid\Content("text/plain", $template);
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        $apiKey = SEND_GRID_API_KEY;//getenv('SENDGRID_API_KEY');
        $sg = new \SendGrid($apiKey);
        $response = $sg->client->mail()->send()->post($mail);
        if($response->statusCode() == '200' || $response->statusCode() == 202) {
            return true;
        } else {
            return false;
        }
    }
}