<?php
class Excel_export_model extends CI_Model
{
 function fetch_data()
 {
  $Verification = 'Yes';
  $this->db->order_by("Id", "DESC");
  $this->db->limit(5000);
  $this->db->where_not_in("Verification",$Verification);
  $this->db->where('date BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()');
  $query = $this->db->get("verification");
  return $query->result();
 }

 
}