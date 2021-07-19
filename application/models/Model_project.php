<?php

class Model_project extends CI_Model
{

    function insertProjectData()
    {

        $data = array(

            'ProjectName' => $this->input->post('projectname', true),
            'ProjectCode' => $this->input->post('projectcode', true),
            // 'MainLocation' => $this->input->post('mainlocation', true),
            'Description' => $this->input->post('description', true)

        );
        return $this->db->insert('projectmaster', $data);
    }

    function fetch_data()
    {

        $query = $this->db->query("SELECT * FROM projectmaster LEFT JOIN userproject ON projectmaster.ProjectName=userproject.ProjectName where userproject.status='checked'");
        return $query;
    }

    public function show($id)
    {
        if (is_array($id)) {
            $this->db->where_in('ProjectName', $id);
        } else {
            $q = $this->db->select('*')->from('projectmaster')->where('ProjectName', $id)->get();
            return $q ? true : false;
        }
    }

    function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from('projectmaster');

        //fetch data by conditions
        if (array_key_exists("where", $params)) {
            foreach ($params['where'] as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        if (array_key_exists("order_by", $params)) {
            $this->db->order_by($params['order_by']);
        }

        if (array_key_exists("ProjectName", $params)) {
            $this->db->where('ProjectName', $params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        } else {
            //set start and limit
            if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit'], $params['start']);
            } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit']);
            }

            if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
                $result = $this->db->count_all_results();
            } else {
                $query = $this->db->get();
                $result = ($query->num_rows() > 0) ? $query->result_array() : false;
            }
        }

        //return fetched data
        return $result;
    }


    public function update_records($ProjectName, $ProjectCode, $Description)
    {
        $this->db->query("update projectmaster set Description='$Description' where ProjectCode='$ProjectCode' ");
    }

    public function deletedata($ProjectCode)
    {

        $this->db->query("delete from projectmaster  where   ProjectCode ='" . $ProjectCode . "'");
    }

    public function projectcode_exists($projectcode)
    {

        $this->db->where('ProjectCode', $projectcode);
        $query = $this->db->get('projectmaster');
        if ($query->num_rows() > 0) {
            return  true;
        } else {
            return false;
        }
    }

    public function projectname_exists($projectname)
    {

        $this->db->where('ProjectName', $projectname);
        $query = $this->db->get('projectmaster');
        if ($query->num_rows() > 0) {
            return  true;
        } else {
            return false;
        }
    }
}