<?php

class Model_permission extends CI_Model
{


    function user_fetch_data()
    {

        $this->db->select('*');
        $this->db->where(array('PermissionGrant' => ''));
        $this->db->from('usermaster');

        // // Execute the query.
        $query1 = $this->db->get();
        return $query1;
    }



    function user_permission_data()
    {

        $this->db->select('*');
        $this->db->where(array('PermissionGrant' => 'YES'));
        $this->db->from('usermaster');

        // // Execute the query.
        $query = $this->db->get();
        return $query;
    }

    function insertPermission($data, $UserName)
    {

        $this->load->database();
        $this->db->where('UserName', $UserName);
        $this->db->update('usermaster', $data);
        //$this->db->query("YOUR QUERY");

        return true;
    }


    function auto($uname1)
    {
        $this->db->where('UserName', $uname1);
        $query = $this->db->get('usermaster');


        foreach ($query->result() as $row) {
            return $output .= '<option value="' . $row->Position . '">' . $row->Position . '</option >';
        }
        //  $output;
    }
    function grant1($name, $project, $status)
    {
        $this->db->query("UPDATE usermaster SET  $project='$status' WHERE UserName ='$name' ");
    }
}