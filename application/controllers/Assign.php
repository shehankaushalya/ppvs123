<?php
class Assign extends CI_Controller
{
    public function index()
    {
        $this->load->view('assign');
    }
    public function permission1()
    {

        if ($this->session->userdata('ProjectAssign') == "checked") {
            redirect('Assign/assignView');
        } else {
            redirect('Home/PpvsHome');
        }
    }


    public function assignView()
    {

        if ($this->session->userdata('ProjectAssign') == "checked") {
            $this->load->model("Model_assign");
            // $UserName= $this->load->post('Username');
            $data["user_fetch_data"] = $this->Model_assign->user_fetch_data();
            $data["user_assign_data"] = $this->Model_assign->user_assign_data();
            $data["project_assign_data"] = $this->Model_assign->project_fetch_data();
            $data["userproject_fetch_data"] = $this->Model_assign->userproject_fetch_data();

            $this->load->view('assign', $data);
        } else {
            redirect('Home/PpvsHome');
        }
    }

    //Permission setup
    public function userAdd()
    {

        $Name = $this->input->post('name');
        $UserName = $this->input->post('username');

        $data = array('name' => $Name, 'username' => $UserName, 'UserAssign' => "YES");
        //print_r($data);

        $this->load->model('Model_assign');
        $this->Model_assign->insertPermission($data, $UserName);

        $data["user_assign_data"] = $this->Model_assign->user_assign_data();
        $this->session->set_flashdata('msg', 'User added successfully');
        redirect('Assign/assignView');
    }

    public function userAssign()
    { {
            $this->load->model('Model_assign');
            $this->Model_assign->userAssign($_POST['name'], $_POST['project'], $_POST['status'], $_POST['ProjectCode']);
        }
    }

    // public function userAssign()
    // {
    //     if ($this->input->post('update')) {


    //         $input_data['ProjectName'] = $this->input->post('ProjectName');
    //         // if (!$input_data['ProjectName']) {
    //         //     redirect('Assign/assignView');
    //         // }
    //         $input_data['UserName'] = $this->input->post('UserName');
    //         $this->load->model('Model_assign');

    //         $this->Model_assign->saveUser($input_data);
    //         redirect('Assign/assignView');
    //     } else {
    //         echo "No request";
    //     }
    // }
    public function autofillAssign()
    {
        $this->load->model('Model_assign');
        $result = $this->Model_assign->autoFill($_POST['name1']);

        echo $result;
    }
}