<?php

include_once "Mindex.php";
class contact extends main{
    public function add_contact($data){
        $this->db->query("INSERT INTO contact_tbl (username,lastname,email,subject,text) VALUES ('$data[username]','$data[lastname]','$data[email]','$data[subject]','$data[text]')");
    }
    public function list_contact(){
        $sql=$this->db->query("SELECT * FROM contact_tbl ");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}