<?php

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load user model
        $this->load->model('Model_user');
    }

    public function index()
    {

        if ($this->session->userdata('username') != "") {
            $this->load->view('PpvsHome.php');
        } else {
            $this->session->set_flashdata('errmsg', 'Wrong Username or Password');
            redirect('User/Login');
        }
    }
    public function register()
    {

        // echo "sign up successful";

        $this->form_validation->set_rules('username', 'username', 'required|is_unique[usermaster.UserName]|min_length[5]');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[5]');
        $this->form_validation->set_rules('catagory', 'catagory', 'required');
        $this->form_validation->set_rules('contact', 'contact', 'required|min_length[10]|max_length[10]');
        if ($this->form_validation->run() == false) {
            redirect('User/users');
        } else {
            $this->load->model('Model_user');
            $response = $this->Model_user->insertUserdata();
            if ($response) {
                $this->session->set_flashdata('msg', 'Inserted Successfully.');
                redirect('User/users');
            } else {
                $this->session->set_flashdata('errmsg', 'Something Went Wrong');
                redirect('User/users');
            }
        }
    }

    public function Login()
    {
        if ($this->session->userdata('username') != "") {
            $this->load->view('PpvsHome.php');
        } else {

            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('index');
            } else {

                $this->load->model('Model_user');
                $result = $this->Model_user->LoginUser();

                if ($result != false) {
                    $user_data = array(
                        'username' => $result->UserName,
                        'position' => $result->Position,
                        'name' => $result->Name,
                        // 'ProjectNew' => $result->ProjectNew,
                        // 'ProjectView' => $result->ProjectView,
                        // 'ProjectEdit' => $result->ProjectEdit,
                        // 'ProjectDelete' => $result->ProjectDelete,

                        'ProjectNew' => $result->ProjectNew,
                        'ProjectView' => $result->ProjectView,
                        'ProjectEdit' => $result->ProjectEdit,
                        'ProjectDelete' => $result->ProjectDelete,

                        'UserNew' => $result->UserNew,
                        'UserView' => $result->UserView,
                        'UserEdit' => $result->UserEdit,
                        'UserDelete' => $result->UserDelete,
                        'UserBlock' => $result->UserBlock,

                        



                        'LocationNew' => $result->LocationNew,
                        'LocationView' => $result->LocationView,
                        'LocationEdit' => $result->LocationEdit,
                        'LocationDelete' => $result->LocationDelete,

                        'PermissionSetup' => $result->PermissionSetup,
                        'ProjectAssign' => $result->ProjectAssign,
                        'ResetPassword' => $result->ResetPassword,


                        'ProgressNew' => $result->ProgressNew,
                        'ProgressView' => $result->ProgressView,
                        'ProgressEdit' => $result->ProgressEdit,
                        'ProgressDelete' => $result->ProgressDelete,

                        'loggedin' => true
                    );
                    $this->session->set_userdata($user_data);
                    $this->session->set_flashdata('msg1', 'Welcome back');
                    // $this->load->view('PpvsHome');
                    redirect('Home/PpvsHome');
                } else {
                    $this->session->set_flashdata('errmsg', 'Wrong Username or Password');
                    redirect('User/index');
                }
            }
        }
    }

    public function LogoutUser()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('position');
        $this->session->unset_userdata('loggedin');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('ProjectNew');
        $this->session->unset_userdata('ProjectView');
        $this->session->unset_userdata('ProjectEdit');
        $this->session->unset_userdata('ProjectDelete');
        $this->session->unset_userdata('ProjectName');

        $this->session->unset_userdata('UserNew');
        $this->session->unset_userdata('UserView');
        $this->session->unset_userdata('UserEdit');
        $this->session->unset_userdata('UserDelete');
        $this->session->unset_userdata('UserBlock');

        
        
        

        $this->session->unset_userdata('LocationNew');
        $this->session->unset_userdata('LocationView');
        $this->session->unset_userdata('LocationEdit');
        $this->session->unset_userdata('LocationDelete');

        $this->session->unset_userdata('PermissionSetup');
        $this->session->unset_userdata('ProjectAssign');
        $this->session->unset_userdata('ResetPassword');

        

        
        

        $this->session->unset_userdata('ProgressNew');
        $this->session->unset_userdata('ProgressView');
        $this->session->unset_userdata('ProgressEdit');
        $this->session->unset_userdata('ProgressDelete');





        // $this->session->unset_userdata('name');
        // $this->session->unset_userdata('loggedin');
        // $this->session->unset_userdata('ProjectName');
        $this->session->set_flashdata('errmsg1', 'Logout Successfully');

        redirect('User/Login');
    }






    public function users()
    {

        if ($this->session->userdata('UserView') == "checked") {

            $data1 = array();

            if ($ids = $this->input->post('checked_id')) {
                // print_r($ids);

                if (!empty($ids)) {
                    // $this->load->model("Model_user");
                    $this->Model_user->show($ids);

                    $data['use'] = $this->Model_user->getRows();

                    if ($data1) {


                        $data1['statusMsg'] = 'Selected.';
                    } else {
                        $data1['statusMsg'] = 'Some problem occurred, please try again.';
                    }
                } else {
                    $data1['statusMsg'] = 'Select at least 1 record.';
                }
            }
            $data["user_fetch_data"] = $this->Model_user->user_fetch_data();

            $this->load->view('user', $data);
        } else {
            redirect('Home/PpvsHome');
        }
    }


    public function updatedata()
    {

        $UserName = $this->input->post('UserName');
        $Name = $this->input->post('Name');
        $Position = $this->input->post('Position');
        $ContactNumber = $this->input->post('ContactNumber');
        $Status = $this->input->post('Status');
        $this->Model_user->update_records($UserName, $Name, $Position, $ContactNumber, $Status);
        $this->session->set_flashdata('msg', 'User Updated Successfully');

        redirect('User/users');

        //   print_r($UserName);  
    }

    public function deletedata()
    {

        $UserName = $this->input->post('UserName');

        $this->Model_user->deletedata($UserName);
        $this->session->set_flashdata('msg', 'User Deleted Successfully');
        redirect('User/users');

        //   print_r($UserName);  
    }






    public function changepassword()
    {
        $UserName = $this->input->post('UserName');
        $old_password = sha1($this->input->post('old_password'));
        $new_password = sha1($this->input->post('new_password'));
        $re_password = sha1($this->input->post('re_password'));
        $current_url = $this->input->post('current_url');
        if ($this->Model_user->getPassword($UserName, $old_password)) {
            $this->Model_user->changepassword($UserName, $old_password, $re_password);
            $this->session->set_flashdata('msg', 'Changed Password Successfully');
            redirect($current_url);
        } else {
            $this->session->set_flashdata('errmsg', 'Change Password Failed');
            redirect($current_url);
        }
    }
    public function reset()
    {
        $UserName = $this->input->post('Username');

        $password = sha1($this->input->post('password'));
        $Re_Password = sha1($this->input->post('Re_Password'));
        if ($password == $Re_Password) {
            $this->Model_user->reset($UserName, $password, $Re_Password);
            $this->session->set_flashdata('msg', 'Password Reset Successfully');
        } else {
            $this->session->set_flashdata('errmsg', 'Password Reset faild');
        }
        redirect('User/users');
    }


    public function changepassword1()
    {
        $UserName = $this->input->post('UserName');
        $old_password = sha1($this->input->post('old_password'));
        $new_password = sha1($this->input->post('new_password'));
        $re_password = sha1($this->input->post('re_password'));

        if ($new_password = $re_password) {
            // $this->Model_user->checkusername($UserName, $old_password);
            //  $this->Model_user->changepassword($UserName, $old_password, $re_password);
            if (true) {
                $this->Model_user->checkusername($UserName, $old_password);
                $this->Model_user->changepassword($UserName, $old_password, $re_password);
                $this->session->set_flashdata('msg', 'Changed Password Successfully');
                redirect('User/users');
            } else {
                $this->session->set_flashdata('errmsg', 'Password Reset Failed');
                redirect('User/users');
            }
        }
    }




    //---------------------------------
    // AJAX REQUEST, IF Username EXISTS
    //---------------------------------
    function register_username_exists()
    {
        if (array_key_exists('username', $_POST)) {
            if ($this->Model_user->username_exists($this->input->post('username')) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }
}