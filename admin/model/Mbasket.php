<?php
include_once "Mindex.php";
class basket extends main{

    public function add_basket($pro_id,$user_id){
        $sql=$this->db->query("INSERT INTO basket_tbl (pro_id,user_id) VALUES ('$pro_id','$user_id')");
//        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
//        return $sql;
    }
//
    public function basket_pay_list(){
        $sql=$this->db->query(" SELECT * FROM basket_tbl WHERE  status='1'");
        $res=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function list_basket($id){
           $sql=$this->db->query(" SELECT * FROM basket_tbl WHERE user_id='$id' AND status='0'");
           $res=$sql->fetchAll(PDO::FETCH_ASSOC);
           return $res;
       }
//
    public function delete_basket($id){
        $this->db->exec("DELETE  FROM basket_tbl WHERE id='$id'");
    }
//
//    public function edit_basket($id){
//        $sql=$this->db->query("SELECT * FROM basket_tbl WHERE id='$id'");
//        $result=$sql->fetch(PDO::FETCH_ASSOC);
//        return $result;
//    }
//
//    public function edit_basket_done ($data,$id){
//        $this->db->query("UPDATE basket_tbl SET title='$data[title]',text='$data[text]',count='$data[count]',price='$data[price]',cat_id='$data[cat_id]' WHERE id='$id'");
//    }
//    public function list_main_basketcat(){
//        $sql=$this->db->query(" SELECT * FROM basketcat_tbl  WHERE chid='0'");
//        $res=$sql->fetchAll(PDO::FETCH_ASSOC);
//        return $res;
//    }
    public function basket_list_count($user_id){
        $sql=$this->db->query("SELECT * FROM basket_tbl WHERE user_id='$user_id' AND status='0'");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function basket_ajax($pro_id,$quantity){
        $this->db->query("UPDATE basket_tbl SET tedad='$quantity' WHERE pro_id='$pro_id'");
    }
    public function basket_pay($user_id){
            $this->db->query("UPDATE basket_tbl SET status='1' WHERE user_id='$user_id'");
        }


}