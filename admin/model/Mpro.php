<?php
include_once "Mindex.php";
class pro extends main{

    public function add_pro($data,$to){
        $sql=$this->db->query("INSERT INTO pro_tbl (title,text,count,price,cat_id,img) VALUES ('$data[title]','$data[text]','$data[count]','$data[price]','$data[cat_id]','$to')");
//        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
//        return $sql;
    }

    public function list_pro(){
        $sql=$this->db->query(" SELECT * FROM pro_tbl ");
        $res=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function delete_pro($id){
        $this->db->exec("DELETE  FROM pro_tbl WHERE id='$id'");
    }

    public function edit_pro($id){
        $sql=$this->db->query("SELECT * FROM pro_tbl WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function edit_pro_done ($data,$id){
        $this->db->query("UPDATE pro_tbl SET title='$data[title]',text='$data[text]',count='$data[count]',price='$data[price]',cat_id='$data[cat_id]' WHERE id='$id'");
    }
    public function list_main_procat(){
        $sql=$this->db->query(" SELECT * FROM procat_tbl  WHERE chid='0'");
        $res=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function basket_list($id){
        $sql=$this->db->query("SELECT * FROM pro_tbl WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
//    public function pro_list_row($id){
//        $sql=$this->db->query("SELECT * FROM pro_tbl WHERE id='$id'");
//        $result=$sql->fetch(PDO::FETCH_ASSOC);
//        return $result;
//    }
    public function pro_detail($id){
            $sql=$this->db->query("SELECT * FROM pro_tbl WHERE id='$id'");
            $result=$sql->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

}