<?php

class Model_progress extends CI_Model
{

    function insertProgressData($file_path)
    {

        date_default_timezone_set('Asia/Colombo');
        $date=date('Y-m-d_H:i:s');

        $data = array(

            // 'PpdCode' => date('Y-m-d_H:i:s'),
            'ProjectCode' => $this->input->post('projectcode', true),
            'LocationCode' => $this->input->post('locationcode', true),
            'Status' => $this->input->post('status', true),
            'PhotoItem' => $this->input->post('photoitem', true),
            // 'Image' => $this->input->post('image', true),
            'Image' => $file_path,
            'ImgDate' => $this->input->post('imgdate', true),
            'PpdCode' => $this->input->post('projectcode') . "_" . date('Y-m-d_H:i:s'),

        );

        return $this->db->insert('progressmaster', $data);
    }

    function progress_fetch_data()
    {

        // $query = $this->db->get("progressmaster");
        // return $query;
        $query = $this->db->query("SELECT * FROM progressmaster LEFT JOIN userproject ON progressmaster.ProjectCode=userproject.ProjectCode where userproject.status='checked'");
        return $query;
    }

    function project_fetch_data()
    {
        // $query = $this->db->get("projectmaster");
        // return $query;
        $query = $this->db->query("SELECT * FROM projectmaster LEFT JOIN userproject ON projectmaster.ProjectCode=userproject.ProjectCode where userproject.status='checked'");
        return $query;
    }

    // function location_fetch_data()
    // {
        
    //     $query = $this->db->get("locationsubmaster");
    //     return $query;
        
    // }

    function location_fetch_data()
    {
        $query = $this->db->query("SELECT * FROM locationsubmaster LEFT JOIN userproject ON locationsubmaster.ProjectCode=userproject.ProjectCode where userproject.status='checked'");
        return $query;
    }

    public function show($id)
    {
        if (is_array($id)) {
            $this->db->where_in('PpdCode', $id);
        } else {
            $q = $this->db->select('*')->from('progressmaster')->where('PpdCode', $id)->get();
            return $q ? true : false;
        }
    }

    function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from('progressmaster');

        //fetch data by conditions
        if (array_key_exists("where", $params)) {
            foreach ($params['where'] as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        if (array_key_exists("order_by", $params)) {
            $this->db->order_by($params['order_by']);
        }

        if (array_key_exists("PpdCode", $params)) {
            $this->db->where('PpdCode', $params['id']);
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

    public function update_records($PpdCode, $ProjectCode, $LocationCode, $Status, $PhotoItem, $Image, $ImgDate)
    {
        $this->db->query("update progressmaster set ProjectCode = '$ProjectCode', LocationCode='$LocationCode', 
        Status ='$Status', PhotoItem ='$PhotoItem', Image ='$Image', ImgDate='$ImgDate' where PpdCode='$PpdCode' ");
    }
    public function deletedata($PpdCode)
    {

        $this->db->query("delete from progressmaster where PpdCode ='" . $PpdCode . "'");
    }

    function autoProject($ProjectCode)
        {
            $this->db->where('ProjectCode', $ProjectCode);
            $query = $this->db->get('projectmaster');


            foreach ($query->result() as $row) {
                return $output .= '<option value="' . $row->ProjectCode . '">' . $row->ProjectCode . '</option >';
            }
        }

        function autoLocation($LocationCode)
        {
            $this->db->where('LocationCode', $LocationCode);
            $query = $this->db->get('locationsubmaster');


            foreach ($query->result() as $row) {
                return $output .= '<option value="' . $row->LocationCode . '">' . $row->LocationCode . '</option >';
            }
        }




    public function ppdcode_exists($ppdcode)
    {
        $this->db->where('PpdCode', $ppdcode);
        $query = $this->db->get('progressmaster');
        if ($query->num_rows() > 0) {
            return  true;
        } else {
            return false;
        }
    }


    /*public function suppliercode_exists($suppliercode)
    {
        $this->db->where('SupplierCode', $suppliercode);
        $query = $this->db->get('suppliermaster');
        if ($query->num_rows() > 0) {
            return  true;
        } else {
            return false;
        }
    }*/

    function project_progress_fetch_data()
    {

        // $query = $this->db->query("SELECT DISTINCT progressmaster.ProjectCode FROM progressmaster LEFT JOIN userproject ON progressmaster.ProjectCode=userproject.ProjectCode where userproject.status='checked'");
        // return $query;

        $query = $this->db->query("SELECT * FROM progressmaster LEFT JOIN userproject ON progressmaster.ProjectCode=userproject.ProjectCode where userproject.status='checked'");
        return $query;
    }

    function project_location_fetch_data()
    {

        $query = $this->db->query("SELECT * FROM progressmaster LEFT JOIN userproject ON progressmaster.ProjectCode=userproject.ProjectCode where userproject.status='checked'");
        return $query;
    }


    
}