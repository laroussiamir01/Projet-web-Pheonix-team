<?php

    require_once '../models/User.php';
    require_once '../helpers/session_helper.php';

    class Users {

        private $userModel;
        
        public function __construct(){
            $this->userModel = new User;
        }

        public function register(){
            //Process form
            
            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Init data
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'pwdRepeat' => trim($_POST['pwdRepeat'])
            ];

            //Validate inputs
            if(empty($data['name']) || empty($data['email']) || empty($data['username']) || 
            empty($data['password']) || empty($data['pwdRepeat'])){
                flash("register", "Please fill out all inputs");
                redirect("../views/signup.php");
            }

            if(!preg_match("/^[a-zA-Z0-9]*$/", $data['username'])){
                flash("register", "Invalid username");
                redirect("../views/signup.php");
            }

            if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                flash("register", "Invalid email");
                redirect("../views/signup.php");
            }

            if(strlen($data['password']) < 6){
                flash("register", "Invalid password");
                redirect("../views/signup.php");
            } else if($data['password'] !== $data['pwdRepeat']){
                flash("register", "Passwords don't match");
                redirect("../views/signup.php");
            }

            //User with the same email or password already exists
            if($this->userModel->findUserByEmailOrUsername($data['email'], $data['username'])){
                flash("register", "Username or email already taken");
                redirect("../views/signup.php");
            }

            //Passed all validation checks.
            //Now going to hash password
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

            //Register User
            if($this->userModel->register($data)){
                redirect("../views/login.php");
            }else{
                die("Something went wrong");
            }
        }

    public function login(){
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data=[
            'name/email' => trim($_POST['name/email']),
            'password' => trim($_POST['password'])
        ];

        if(empty($data['name/email']) || empty($data['password'])){
            flash("login", "Please fill out all inputs");
            header("location: ../views/login.php");
            exit();
        }

        //Check for user/email
        if($this->userModel->findUserByEmailOrUsername($data['name/email'], $data['name/email'])){
            //User Found
            $loggedInUser = $this->userModel->login($data['name/email'], $data['password']);
            if($loggedInUser){
                //Create session
                $this->createUserSession($loggedInUser);
            }else{
                flash("login", "Password Incorrect");
                redirect("../views/login.php");
            }
        }else{
            flash("login", "No user found");
            redirect("../views/login.php");
        }
    }

    public function createUserSession($user){
        $_SESSION['id'] = $user->id;
        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        redirect("../views/index.php");
    }

    public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        session_destroy();
        redirect("../views/index.php");
    }
}

    $init = new Users;

    //Ensure that user is sending a post request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        switch($_POST['type']){
            case 'register':
                $init->register();
                break;
            case 'login':
                $init->login();
                break;
            default:
            redirect("../views/index.php");
        }
        
    }else{
        switch($_GET['q']){
            case 'logout':
                $init->logout();
                break;
            default:
            redirect("../views/index.php");
        }
    }

    