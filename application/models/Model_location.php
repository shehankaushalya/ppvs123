<?php

class Model_location extends CI_Model
{

    function insertLocationData()
    {

        $data = array(

            'Location' => $this->input->post('locationname', true),
            'LocationCode' => $this->input->post('locationcode', true),
            'Description' => $this->input->post('description', true),
            'ProjectName' => $this->input->post('projectname', true),
            'ProjectCode' => $this->input->post('projectcode', true),
            'Status' => $this->input->post('status', true),
        );
        return $this->db->insert('locationsubmaster', $data);
    }


    function location_fetch_data()
    {
        $query = $this->db->query("SELECT * FROM locationsubmaster LEFT JOIN userproject ON locationsubmaster.ProjectName=userproject.ProjectName where userproject.status='checked'");
        return $query;
    }

    public function project_fetch_data()
    {
        $query = $this->db->query("SELECT * FROM projectmaster LEFT JOIN userproject ON projectmaster.ProjectName=userproject.ProjectName where userproject.status='checked'");
        //$query = $this->db->get("projectmaster");
        return $query;
    }

    public function ProjectView()
    {
        $ProjectName = $this->input->post('ProjectName');
        $this->db->where('ProjectName', $ProjectName);


        $respond = $this->db->get('projectmaster');
        if ($respond->num_rows() == 1) {
            return $respond->row(0);
        } else {
            return false;
        }
    }

    public function show($id)
    {
        if (is_array($id)) {
            $this->db->where_in('LocationCode', $id);
        } else {
            $q = $this->db->select('*')->from('locationsubmaster')->where('LocationCode', $id)->get();
            return $q ? true : false;
        }
    }

    function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from('locationsubmaster');

        //fetch data by conditions
        if (array_key_exists("where", $params)) {
            foreach ($params['where'] as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        if (array_key_exists("order_by", $params)) {
            $this->db->order_by($params['order_by']);
        }

        if (array_key_exists("LocationCode", $params)) {
            $this->db->where('LocationCode', $params['id']);
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

    public function update_records($LocationCode, $Location, $Description, $ProjectCode, $Status)
    {
        $this->db->query("update locationsubmaster set Location='$Location',Description='$Description',ProjectCode='$ProjectCode',ProjectName=(Select ProjectName From projectmaster where ProjectCode = '$ProjectCode'), Status='$Status'  where LocationCode='$LocationCode' ");
    }

    public function deletedata($LocationCode)
    {

        $this->db->query("delete from locationsubmaster  where   LocationCode ='" . $LocationCode . "'");
    }
    public function location_exists($locationcode)
    {
        $this->db->where('LocationCode', $locationcode);
        $query = $this->db->get('locationsubmaster');
        if ($query->num_rows() > 0) {
            return  true;
        } else {
            return false;
        }
    }

    public function location_name_exists($locationname)
    {
        $this->db->where('Location', $locationname);
        $query = $this->db->get('locationsubmaster');
        if ($query->num_rows() > 0) {
            return  true;
        } else {
            return false;
        }
    }    

    function auto($projectcode)
    {
        $this->db->where('ProjectCode', $projectcode);
        $query = $this->db->get('projectmaster');


        foreach ($query->result() as $row) {
            return $output .= '<option value="' . $row->ProjectName . '">' . $row->ProjectName . '</option >';
        }
        //  $output;
    }
    function mobile_user_fetch_data()
    {
        $query = $this->db->query("Select * from usermaster where MobileUser='checked'");
        return $query;
    }
    function filter($fromdate, $todate, $UserName)
    {
        $sqldata = $this->db->query("select * from verification where UserName='$UserName' AND Date BETWEEN '$fromdate' AND '$todate'");
        return $sqldata;
    }
    function filters($fromdate, $todate)
    {
        $sqldata = $this->db->query("select * from verification where Date BETWEEN '$fromdate' AND '$todate'");
        return $sqldata;
    }
}
