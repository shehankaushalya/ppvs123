<?php
class Project extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load user model
        $this->load->model('Model_project');
    }
    public function projects()
    {


        if ($this->session->userdata('ProjectView') == "checked") {



            $data["project_fetch_data"] = $this->Model_project->fetch_data();

            $this->load->view('project', $data);
        } else {
            redirect('Home/PpvsHome');
        }
    }


    public function register()
    {

        // echo "sign up successful";

        $this->form_validation->set_rules('projectname', 'projectname', 'required|is_unique[projectmaster.ProjectName]|strtoupper');
        $this->form_validation->set_rules('projectcode', ' projectcode', 'required|is_unique[projectmaster.ProjectCode]|strtoupper');
        // $this->form_validation->set_rules('mainlocation', 'mainlocation', 'required');
        $this->form_validation->set_rules('description', 'description');

        if ($this->form_validation->run() == false) {
            redirect('Project/projectView');
        } else {
            $this->load->model('Model_project');
            $response = $this->Model_project->insertProjectData();
            if ($response) {
                $this->session->set_flashdata('msg', 'Inserted Successfully.');
                redirect('Project/projects');
            } else {
                $this->session->set_flashdata('errmsg', 'Something went wrong');
                redirect('Project/projectView');
            }
        }
    }

    public function projectView()
    {

        if ($this->session->userdata('ProjectView') == "checked") {
            $this->load->model("Model_project");
            $data["project_fetch_data"] = $this->Model_project->fetch_data();
            $this->load->view('project', $data);
        } else {
            redirect('Home/PpvsHome');
        }
    }
    public function updatedata()
    {

        $ProjectName = $this->input->post('ProjectName');
        $ProjectCode = $this->input->post('ProjectCode');
        // $MainLocation = $this->input->post('MainLocation');
        $Description = $this->input->post('Description');

        $this->Model_project->update_records($ProjectName, $ProjectCode, $Description);
        $this->session->set_flashdata('msg', 'Data updated successfully.');

        redirect('Project/projects');
    }
    public function deletedata()
    {

        $ProjectCode = $this->input->post('ProjectCode');

        $this->Model_project->deletedata($ProjectCode);
        // echo "Date updated successfully !”;
        $this->session->set_flashdata('msg', 'Data deleted successfully.');
        redirect('Project/projects');
    }

    function register_projectcode_exists()
    {
        if (array_key_exists('projectcode', $_POST)) {
            if ($this->Model_project->projectcode_exists($this->input->post('projectcode')) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

    function register_projectname_exists()
    {
        if (array_key_exists('projectname', $_POST)) {
            if ($this->Model_project->projectname_exists($this->input->post('projectname')) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }
}