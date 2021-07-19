<?php
class Permission extends CI_Controller
{
    public function index()
    {
        $this->load->view('permission');
    }
    public function permission1()
    {

        if ($this->session->userdata('PermissionSetup') == "checked") {
            redirect('Permisson/permissionView');
        } else {
            redirect('Home/PpvsHome');
        }
    }


    public function permissionView()
    {

        if ($this->session->userdata('PermissionSetup') == "checked") {
            $this->load->model("Model_permission");
            // $UserName= $this->load->post('Uasername');
            $data["user_fetch_data"] = $this->Model_permission->user_fetch_data();
            $data["user_permission_data"] = $this->Model_permission->user_permission_data();
            $this->load->view('permission', $data);
        } else {
            redirect('Home/PpvsHome');
        }
    }

    //Permission setup
    public function userAdd()
    {

        $Position = $this->input->post('Position');
        $UserName = $this->input->post('UserName');

        $data = array('Position' => $Position, 'UserName' => $UserName, 'PermissionGrant' => "YES");
        //print_r($data);

        $this->load->model('Model_permission');
        $this->Model_permission->insertPermission($data, $UserName);

        $data["user_permission_data"] = $this->Model_permission->user_permission_data();
        $this->session->set_flashdata('msg', 'User inserted successfully.');
        redirect('Permission/permissionView');
    }

    public function autofill()
    {
        $this->load->model('Model_permission');
        $result = $this->Model_permission->auto($_POST['uname1']);

        echo $result;
    }

    public function grant1()
    {
        $this->load->model('Model_permission');
        $this->Model_permission->grant1($_POST['name'], $_POST['project'], $_POST['status']);
    }
}