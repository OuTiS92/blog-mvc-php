<?php
include_once 'Mindex.php';
class user extends main{
  
     public function user_add($data){
        $this->db->query("insert into user_tbl (email,password,name,lastname,age,img,status,vc) values ('$data[email]','$data[password]','$data[name]','$data[lastname]','$data[age]','0','0','0')");
        $id=$this->db->lastInsertId();
        return $id;
    }
    public function user_login($data){
        $results=$this->db->query("SELECT * FROM user_tbl where email='$data[email]'");
        $row=$results->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    public function user_name($id){
        $results=$this->db->query("SELECT * FROM user_tbl where id='$id'");
        $row=$results->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}
?>