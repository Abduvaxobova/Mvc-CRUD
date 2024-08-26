<?php
    class UserController
    {
        private $model;
        public function __construct()
        {
            $this->model = new User();
            session_start();
        }
        public function profile()
        {
            // var_dump($_SESSION['user']); 
            require_once 'views/user/profile.php';
        }
        public function edit()
        {
            require_once 'views/user/edit.php';
        }
        public function handleEdit()
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $data = ['name' => $name, 'email' => $email];
            // var_dump($data);
            // return;
            $this->model->update($_SESSION['user']['id'],$data);
            $data['id'] = [$_SESSION['user']['id']];
            // var_dump($data);
            // die();
            $_SESSION['user'] = $data;
            $_SESSION['message'] = 'User has been updated';
            header('Location: /profile');
            exit;
        }
    }
?>