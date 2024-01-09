<?php
include_once 'Mindex.php';
class basket extends main{
    public function basket_list($id){
        $results=$this->db->query("SELECT * FROM basket_tbl where user_id=$id AND status='0'" );
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function basket_add($user_id,$pro_id){
        $this->db->query("insert into basket_tbl (user_id,pro_id) values ('$user_id','$pro_id')");
    }
    public function basket_delete($id){
        $this->db->query("delete from basket_tbl where id='$id'");
    }
    public function basket_omit($id, $user_id){
        $this->db->query("delete from basket_tbl where pro_id='$id' AND user_id='$user_id'");
    }
    public function basket_ajax($pro_id, $quantity){
        $this->db->query("update basket_tbl set tedad='$quantity' where pro_id='$pro_id'");
    }
    public function basket_pay($user_id){
        $this->db->query("update basket_tbl set status='1' where user_id=$user_id");
    }
    public function basket_pay_list(){
        $results=$this->db->query("SELECT * FROM basket_tbl where status='1'" );
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
   
}