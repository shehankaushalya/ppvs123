<?php
class Home extends CI_Controller
{
    public function PpvsHome()
    {
        if ($this->session->userdata('username') != "") {
            $this->load->model("Model_progress");
            $data["project_progress_fetch_data"] = $this->Model_progress->project_progress_fetch_data();
            $this->load->view('PpvsHome', $data);
            // redirect('Progress/project_progress_view');
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

    public function LocationView()
    {

        $item_code = $this->uri->segment(3);
        $project_code = $this->uri->segment(4);
        $data['item_code'] = $item_code;
        $data['project_code'] = $project_code;
          

        if ($this->session->userdata('username') != "") {
            $this->load->model("Model_progress");
            $data["project_location_fetch_data"] = $this->Model_progress->project_location_fetch_data($item_code, $project_code);
            $this->load->view('LocationView', $data);
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
        $item_code = $this->uri->segment(3);
        $project_code = $this->uri->segment(4);
        $location_code = $this->uri->segment(5);
        $remark = $this->uri->segment(6);
        
        
        $data['item_code'] = $item_code;
        $data['project_code'] = $project_code;
        $data['location_code'] = $location_code;
        $data['remark'] = $remark;


        if ($this->session->userdata('username') != "") {
            $this->load->model("Model_progress");
            $data["project_image_fetch_data_none"] = $this->Model_progress->project_image_fetch_data_none($item_code, $project_code, $location_code);
            $data["project_image_fetch_data_lhs"] = $this->Model_progress->project_image_fetch_data_lhs($item_code, $project_code, $location_code);
            $data["project_image_fetch_data_rhs"] = $this->Model_progress->project_image_fetch_data_rhs($item_code, $project_code, $location_code);
            $this->load->view('ImageView', $data);
            // redirect('Progress/project_image_view');
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
