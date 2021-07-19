<?php

class Model_user extends CI_Model
{

    function insertUserdata()
    {
        $data = array(

            'Name' => $this->input->post('name', true),
            'UserName' => $this->input->post('username', true),
            'Password' => sha1($this->input->post('password', true)),
            'Position' => $this->input->post('catagory', true),
            'ContactNumber' => $this->input->post('contact', true),
            'Status' => 'ACTIVE'
        );
        return $this->db->insert('usermaster', $data);
    }

    function LoginUser()
    {

        $UserName = $this->input->post('username');
        $Password = sha1($this->input->post('password'));
        $Status = "ACTIVE";
        // $MobileUser = 'checked';

        $this->db->where('UserName', $UserName);
        $this->db->where('Password', $Password);
        $this->db->where('Status', $Status);
        // $this->db->where('MobileUser !=', $MobileUser);
        $respond = $this->db->get('usermaster');
        if ($respond->num_rows() == 1) {
            return $respond->row(0);
        } else {
            return false;
        }
    }

    function user_fetch_data()
    {

        $query = $this->db->get("usermaster");
        return $query;
    }

    public function show($id)
    {
        if (is_array($id)) {
            $this->db->where_in('UserName', $id);
        } else {
            $q = $this->db->select('*')->from('usermaster')->where('UserName', $id)->get();
            return $q ? true : false;
        }
    }

    function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from('usermaster');

        //fetch data by conditions
        if (array_key_exists("where", $params)) {
            foreach ($params['where'] as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        if (array_key_exists("order_by", $params)) {
            $this->db->order_by($params['order_by']);
        }

        if (array_key_exists("UserName", $params)) {
            $this->db->where('UserName', $params['id']);
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

    function getRows1()
    {
        $query = $this->db->get("usermaster");
        return $query;
    }

    /*
     * Delete data from the database
     * @param id array/int
     */
    public function delete($id)
    {
        if (is_array($id)) {
            $this->db->where_in('UserName', $id);
        } else {
            $this->db->where('UserName', $id);
        }
        $delete = $this->db->delete('usermaster');
        return $delete ? true : false;
    }




    public function update_records($UserName, $Name, $Position, $ContactNumber, $Status)
    {
        $this->db->query("update usermaster set Name='$Name',Position='$Position',ContactNumber='$ContactNumber',Status='$Status' where UserName='$UserName' ");
    }
    public function deletedata($UserName)
    {

        $this->db->query("delete from usermaster  where   UserName ='" . $UserName . "'");
    }



    public function getPassword($UserName, $old_password)
    {
        $this->db->where('UserName', $UserName);
        $this->db->where('Password', $old_password);

        $query = $this->db->get('usermaster');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function checkusername($UserName, $old_password)
    {
        return $this->db->query("Select * from usermaster where UserName='$UserName' and Password='$old_password' ");
    }



    public function changepassword($UserName, $old_password, $re_password)
    {
        if ($this->db->query("update usermaster set Password='$re_password' where UserName='$UserName' and Password ='$old_password'  ")) {
            return false;
        } else {
            return true;
        }
    }

    public function reset($UserName, $Re_Password)
    {
        if ($this->db->query("update usermaster set Password='$Re_Password' where UserName='$UserName'")) {
            return false;
        } else {
            return true;
        }
    }

    public function username_exists($username)
    {
        $this->db->where('UserName', $username);
        $query = $this->db->get('usermaster');
        if ($query->num_rows() > 0) {
            return  true;
        } else {
            return false;
        }
    }
}
