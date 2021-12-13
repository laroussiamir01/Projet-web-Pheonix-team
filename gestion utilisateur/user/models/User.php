<?php
require_once '../libraries/Database.php';

class User {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Find user by email or username
    public function findUserByEmailOrUsername($email, $username){
        $this->db->query('SELECT * FROM tbl_users WHERE username = :username OR email = :email');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    //Register User
    public function register($data){
        $this->db->query('INSERT INTO tbl_users (name, email, username, password, roleid) 
        VALUES (:name, :email, :Uid, :password, :roleid)');
        //Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':Uid', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':roleid', 3);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //Login user
    public function login($nameOrEmail, $password){
        $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

        if($row == false) return false;

        $hashedPassword = $row->password;
        if(password_verify($password, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }

    //Reset Password
    public function resetPassword($newPwdHash, $tokenEmail){
        $this->db->query('UPDATE tbl_users SET password=:pwd WHERE email=:email');
        $this->db->bind(':pwd', $newPwdHash);
        $this->db->bind(':email', $tokenEmail);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}