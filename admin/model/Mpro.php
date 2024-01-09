<?php
include_once 'Mindex.php';
class pro extends main{
  
    public function pro_list(){
        $results=$this->db->query("SELECT * FROM pro_tbl");
        $row=$results->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function pro_list_catid($cat_id){
        $results=$this->db->query("SELECT * FROM pro_tbl where cat_id='$cat_id'");
        $row=$results->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function pro_list_default(){
        $results=$this->db->query("SELECT * FROM pro_tbl where chid ='0'");
        $row=$results->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function pro_under_list_default($id){
        $results=$this->db->query("SELECT * FROM pro_tbl where chid ='$id'");
        $row=$results->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function pro_add($data,$to){
        $this->db->query("insert into pro_tbl (title,cat_id,text,price,count,image) values ('$data[title]','$data[cat_id]','$data[text]','$data[price]','$data[count]','$to')");
    }
    public function procat_list(){
        $results=$this->db->query("SELECT *  FROM procat_tbl ");
        return $results;
    }
    public function pro_delete($id){
        $this->db->query("delete from pro_tbl where id='$id'");
    }
    public function pro_showEdit($id){
        $results=$this->db->query("SELECT * FROM pro_tbl where id='$id'");
        $row=$results->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    public function pro_edit($data,$id,$to){
       $this->db->query("update pro_tbl set title='$data[title]',chid='$data[cat_id]',text='$data[text]',count='$data[count]',price='$data[price]','$to' where id='$id'");
    }

    public function pro_basket_list($id){
        $results=$this->db->query("SELECT * FROM pro_tbl where id='$id'");
        $row=$results->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    public function pro_detail($id){
        $results=$this->db->query("SELECT * FROM pro_tbl where id='$id'");
        $row=$results->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
     public function pro_compare($array){
        $sql = $this->db->query("SELECT * FROM pro_tbl WHERE id IN ($array)");
        $rows=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function pro_search($search)
    {
        $results=$this->db->query("SELECT title FROM pro_tbl WHERE title LIKE '%$search%'");
        $results=$results->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
  
}