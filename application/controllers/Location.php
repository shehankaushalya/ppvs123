<?php
class Location extends CI_Controller
{
    public function index()
    {

        if ($this->session->userdata('LocationView') == "checked") {
            redirect('Location/locationView');
        } else {
            redirect('Home/PpvsHome');
        }
    }

    public function add()
    {

        $this->form_validation->set_rules('locationname', 'locationname', 'required|is_unique[locationsubmaster.Location]');
        $this->form_validation->set_rules('locationcode', 'locationcode', 'required|is_unique[locationsubmaster.LocationCode]');
        $this->form_validation->set_rules('description', 'description');
        $this->form_validation->set_rules('projectname', 'projectname', 'required');

        if ($this->form_validation->run() == false) {
            redirect('Location/locationView');
        } else {
            $this->load->model('Model_location');
            $response = $this->Model_location->insertLocationData();
            if ($response) {
                $this->session->set_flashdata('msg', 'Inserted Successfully.');
                redirect('Location/locationView');
            } else {
                $this->session->set_flashdata('errmsg', 'Something Went Wrong');
                redirect('Location/locationView');
            }
        }
    }

    public function locationView()
    {

        if ($this->session->userdata('LocationView') == "checked") {
            $this->load->model("Model_location");
            $data["location_fetch_data"] = $this->Model_location->location_fetch_data();
            $data["project_fetch_data"] = $this->Model_location->project_fetch_data();

            $this->load->view('location', $data);
        } else {
            redirect('Home/PpvsHome');
        }
    }
    public function projectLocationView()
    {
        if ($this->session->userdata('username') != "") {

            if (!($this->input->post('ProjectName'))) {
                $this->session->unset_userdata('ProjectName');
                redirect('Location/locationView');
            } else {

                $this->load->model('Model_location');
                $result = $this->Model_location->ProjectView();
                if ($result != false) {
                    $project_data = array(
                        'ProjectName' => $result->ProjectName,
                        'ProjectCode' => $result->ProjectCode
                    );
                    $this->session->set_userdata($project_data);

                    redirect('Location/locationView');
                }
            }
        }
    }
    public function ClearLacation()
    {
        $this->session->unset_userdata('ProjectName');
        $this->session->unset_userdata('ProjectCode');
        redirect('Location/locationView');
    }

    public function updatedata()
    {

        $LocationCode = $this->input->post('LocationCode');
        $Location = $this->input->post('Location');
        $Description = $this->input->post('Description');
        $ProjectName = $this->input->post('ProjectName');
        $ProjectCode = $this->input->post('ProjectCode');
        $this->load->model('Model_location');
        $this->Model_location->update_records($LocationCode, $Location, $Description, $ProjectCode);
        $this->session->set_flashdata('msg', 'Data updated successfully.');
        redirect('Location/locationView');
    }

    public function deletedata()
    {
        $LocationCode = $this->input->post('LocationCode');
        $this->load->model('Model_location');
        $this->Model_location->deletedata($LocationCode);
        $this->session->set_flashdata('msg', 'Data deleted successfully.');
        redirect('Location/locationView');
    }

    //---------------------------------
    // AJAX REQUEST, IF locationcode EXISTS
    //---------------------------------
    function register_location_exists()
    {
        if (array_key_exists('locationcode', $_POST)) {
            $this->load->model('Model_location');
            if ($this->Model_location->location_exists($this->input->post('locationcode')) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

    function register_location_name_exists()
    {
        if (array_key_exists('locationname', $_POST)) {
            $this->load->model('Model_location');
            if ($this->Model_location->location_name_exists($this->input->post('locationname')) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

    public function autofillProjectcode()
    {
        $this->load->model('Model_location');
        $result = $this->Model_location->auto($_POST['projectcode']);

        echo $result;
    }
    public function userVerification()
    {
        if ($this->session->userdata('UserVerification') == "checked") {
            $this->load->model('Model_location');
            $data["mobile_user_fetch_data"] = $this->Model_location->mobile_user_fetch_data();


            $this->load->view('Map', $data);
        } else {
            redirect('Home/PpvsHome');
        }
    }
    public function filter()
    {
        if ($this->session->userdata('UserVerification') == "checked") {

            if (!isset($_POST['filter'])) {
                redirect('Location/userVerification');
            } else {
                $fromdate = $this->input->post('fromdate');
                $todate = $this->input->post('todate');
                $UserName = $this->input->post('UserName');

                if ($UserName) {
                    $this->load->model('Model_location');
                    $data["filter"] = $this->Model_location->filter($fromdate, $todate, $UserName);
                    $this->load->view('Load_Map', $data);
                } else {
                    $this->load->model('Model_location');
                    $data["filter"] = $this->Model_location->filters($fromdate, $todate);
                    $this->load->view('Load_Map', $data);
                }
            }
        } else {
            redirect('Home/PpvsHome');
        }
    }
}