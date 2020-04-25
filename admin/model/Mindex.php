<?php
class main{
    public function __construct(){
        global $db;
        $this->db=$db;
    }

    public function uploaderImage($fil,$url,$exts){
            $file=$_FILES[$fil];
            $array=explode('.',$file['name']);
            $newname=rand(1,3333).'.'.end($array);
            $from=$file['tmp_name'];
            $to=$url."/".$newname;
            foreach ($exts as $ext){
                if ($file['type']==$ext){
                    move_uploaded_file($from,"../".$to);
                    return $to;
                }
            }
        }
    public function basket_list_pro($id){
           $result=$this->db->query("SELECT * FROM basket_tbl LEFT JOIN 
           pro_tbl ON basket_tbl.pro_id=pro_tbl.id
           WHERE basket_tbl.user_id='$id' ");
           $result->execute();
           $result=$result->fetchAll(PDO::FETCH_ASSOC);
           return $result;
       }
}