<?php
include_once "Mindex.php";
class procat extends main{

    public function add_procat($data){
        $sql=$this->db->query("INSERT INTO procat_tbl (title,chid) VALUES ('$data[title]','$data[chid]')");
//        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
//        return $sql;
    }

    public function list_procat(){
        $sql=$this->db->query(" SELECT * FROM procat_tbl ");
        $res=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function delete_procat($id){
        $this->db->exec("DELETE  FROM procat_tbl WHERE id='$id'");
    }

    public function edit_procat($id){
        $sql=$this->db->query("SELECT * FROM procat_tbl WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function edit_procat_done ($data,$id){
        $this->db->query("UPDATE procat_tbl SET title='$data[title]',chid='$data[chid]' WHERE id='$id'");
    }

    public function list_procat_catid(){
        $sql=$this->db->query("SELECT * FROM procat_tbl WHERE chid='0'");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}