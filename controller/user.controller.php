<?php

require_once 'model/user.php';

class UserController {

    private $model;

    /**
     * Create a new Model instance.
     */
    public function __construct() {
        $this->model = new User();
    }

    /**
     * Show the application dashboard.
     */
    public function Index() {
        require_once 'view/header.php';
        require_once 'view/user/user.php';
        require_once 'view/footer.php';
    }

    /**
     * Show the form application for create or edit
     */
    public function NewOrEdit() {
        $user = new User();

        if (isset($_REQUEST['id'])) {
            $user = $this->model->getID($_REQUEST['id']);
            require_once 'view/header.php';
            require_once 'view/user/user-edit.php';
            require_once 'view/footer.php';
        }
        else {
            require_once 'view/header.php';
            require_once 'view/user/user-created.php';
            require_once 'view/footer.php';
        }
    }

    /**
     * Store a newly created resource in storage. 
     */
    public function Store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $user = new User();

            $user->id = $_REQUEST['id'];
            $user->email = $_REQUEST['email'];
            $user->passwords = $_REQUEST['password'];
            $user->phone = $_REQUEST['phone'];
            $user->company = $_REQUEST['company'];
            $user->birthdate = $_REQUEST['birthdate'];

            $user->id > 0
                ? $this->model->Update($user)
                : $this->model->Register($user);

            header('Location: index.php');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     */
    public function Delete()
    {
        $this->model->Delete($_REQUEST['id']);
        header('Location: index.php');
    }
}