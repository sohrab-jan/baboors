<?php
include_once "Mindex.php";
class user extends main{
    public function add_user($data){
        $this->db->query("INSERT INTO user_tbl (username, password,email,name) VALUES ('$data[username]','$data[password]','$data[email]','$data[name]')");
    }

    public function login_user($data){
        $sql=$this->db->query("SELECT * FROM user_tbl WHERE username='$data[username]'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function user_name($id){
            $sql=$this->db->query("SELECT * FROM user_tbl WHERE id='$id'");
            $result=$sql->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

}