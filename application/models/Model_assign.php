<?php

class Model_assign extends CI_Model
{


    function user_fetch_data()
    {

        $this->db->select('*');
        $this->db->where(array('UserAssign' => ''));
        $this->db->from('usermaster');

        // // Execute the query.
        $query1 = $this->db->get();
        return $query1;
    }

    function user_assign_data()
    {
        $this->db->select('*');
        $this->db->where(array('UserAssign' => 'YES'));
        $this->db->from('usermaster');

        // // Execute the query.
        $query = $this->db->get();
        return $query;
    }

    function project_fetch_data()
    {
        $this->db->select('*');
        $this->db->from('projectmaster');
        $query = $this->db->get();
        return $query;
    }

    function userproject_fetch_data()
    {

        $this->db->select('*');
        $this->db->from('userproject');
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


    function autoFill($name1)
    {
        $this->db->where('Name', $name1);
        $query = $this->db->get('usermaster');


        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->UserName . '">' . $row->UserName . '</option >';
        }
        return $output;
    }

    function userAssign($name, $project, $status, $ProjectCode)
    {
        $this->db->where('UserName', $name);
        $this->db->where('ProjectName', $project);

        $query = $this->db->get('userproject');
        if ($query->num_rows() == 1) {

            $this->db->query("UPDATE userproject SET  Status='$status' WHERE UserName ='$name' AND ProjectName='$project'");
        } else {

            $this->db->query("INSERT INTO userproject(Status,UserName,ProjectName,ProjectCode) values('$status','$name','$project','$ProjectCode') ");
        }
    }
}