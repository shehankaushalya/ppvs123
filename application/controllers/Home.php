<?php
class Home extends CI_Controller
{
    public function PpvsHome()
    {
        if ($this->session->userdata('username') != "") {
            redirect('Progress/project_progress_view');
        } else {
            redirect('User/LogoutUser');
        }
        
    }


    // public function PpvsHome()
    // {
    //     if ($this->session->userdata('username') != "") {
    //         $this->load->view('PpvsHome.php');
    //     } else {
    //         redirect('User/LogoutUser');
    //     }
    // }

    // public function ItemView()
    // {
    //     if ($this->session->userdata('username') != "") {
    //         redirect('Progress/project_item_view');
    //     } else {
    //         redirect('User/LogoutUser');
    //     }
        
    // }



    public function ItemView($project_code)
    {
        // = 'testing';
    //    $data['project_data'] =  model.getProjectDataByid($project_code);
        $data['project_code'] = $project_code;
        if ($this->session->userdata('username') != "") {
            $this->load->view('ItemView.php', $data);
        } else {
            redirect('User/LogoutUser');
        }
    }

    public function LocationView($item_code, $project_code)
    {

        $data['project_code'] = $project_code;
        $data['item_code'] = $item_code;
        if ($this->session->userdata('username') != "") {
            redirect('Progress/project_location_view', $data);
        } else {
            redirect('User/LogoutUser');
        }
        
    }

    // public function LocationView()
    // {
    //     if ($this->session->userdata('username') != "") {
    //         $this->load->view('LocationView.php');
    //     } else {
    //         redirect('User/LogoutUser');
    //     }
    // }

    public function ImageView()
    {
        if ($this->session->userdata('username') != "") {
            redirect('Progress/project_image_view');
        } else {
            redirect('User/LogoutUser');
        }
        
    }

    // public function ProgressView()
    // {
    //     if ($this->session->userdata('username') != "") {
    //         $this->load->view('ProgressView.php');
    //     } else {
    //         redirect('User/LogoutUser');
    //     }
    // }

    
}
