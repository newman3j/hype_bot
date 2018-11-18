<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 24.10.17
 * Time: 12:53
 */
class login_index_controller extends login_helper
{
    public function content()
    {
        $this->view_only('login/index');
    }

    public function login()
    {
        if(!empty($_POST['user_name']) && !empty($_POST['password'])) {
            if($user = $this->model('system_users')->getByFields([
                    'user_name' => $_POST['user_name'],
                    'user_password' => hash_hmac('sha256', $_POST['password'], APP_SECRET)
                ]
            )) {
                registry::set('user', $user);
                $token = authorization::generateToken($user['id']);
                setcookie('Authorization', $token, time() + 3600 * 24 * 30, '/');
                $this->response->withHeader('Authorization', $token);
                $this->success(['url' => urldecode($_GET['redirect'])]);
            } else {
                $this->fail(['error' => 'Wrong User/Password']);
            }
        }
        $this->fail(['error' => 'Empty User/Password']);
    }

    protected function rules()
    {
        $this->rules = [
            'content' => [
                'auth' => false
            ],
            'login' => [
                'auth' => false
            ]
        ];
    }
}