<?php
class Progress extends CI_Controller
{
    public function progresses()
    {

        if ($this->session->userdata('ProgressView') == "checked") {

            $this->load->model("Model_progress");

            $data1 = array();

            if ($ids = $this->input->post('checked_id')) {
                // print_r($ids);

                if (!empty($ids)) {
                    $this->load->model("Model_progress");
                    $this->Model_progress->show($ids);

                    $data['use'] = $this->Model_progress->getRows();

                    if ($data1) {


                        $data1['statusMsg'] = 'Selected.';
                    } else {
                        $data1['statusMsg'] = 'Some problem occurred, please try again.';
                    }
                } else {
                    $data1['statusMsg'] = 'Select at least 1 record.';
                }
            }
            
            $data["progress_fetch_data"] = $this->Model_progress->progress_fetch_data();
            $data["project_fetch_data"] = $this->Model_progress->project_fetch_data();
            $data["location_fetch_data"] = $this->Model_progress->location_fetch_data();
            
            $this->load->view('progress', $data);
        } else {
            redirect('Home/PpvsHome');
        }
    }

    // public function uploadFile()
    // {
    //     $config['allowed_types'] = 'jpg|jpeg|png'; 
    //     $config['upload_path'] = './uploads/images/'; 
    //     $this->load->library('upload',$config); 

    //     if($this->upload->do_upload('image')){ 
            
    //         // $data = array('upload_data' => $this->upload->data());
            
    //         $upload_data = $this->upload->data();
    //         $file_path = $upload_data['full_path'];
            
    //         // $this->load->view('progress', $data);
    //         // print_r($this->upload->data());
    //         print_r($file_path);
            
    //      }else{ 

    //         // redirect('Home/PpvsHome');
    //         print_r($this->upload->display_errors());
    //      } 
        
        
    // }

    public function register()
    {

        // $this->form_validation->set_rules('ppdcode', 'ppdcode', 'required|is_unique[progressmaster.PpdCode]');
        $this->form_validation->set_rules('projectcode', 'projectcode', 'required');
        $this->form_validation->set_rules('locationcode', 'locationcode', 'required');
        // $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('photoitem', 'photoitem', 'required');
        $this->form_validation->set_rules('workside', 'workside', 'required');
        $this->form_validation->set_rules('image', 'image');
        $this->form_validation->set_rules('imgdate', 'imgdate', 'required');
        // $this->form_validation->set_rules('imgdate', 'imgdate', 'required|is_unique[progressmaster.ImgDate]');
        $this->form_validation->set_rules('remark', 'remark', 'required');


        if ($this->form_validation->run() == false) {
            redirect('Progress/progressView');
        } else {

            $config['allowed_types'] = 'jpg|jpeg|png'; 
            $config['upload_path'] = './uploads/images/'; 
            $this->load->library('upload',$config);


            if($this->upload->do_upload('image')){ 
            
                // $data = array('upload_data' => $this->upload->data());
                
                $upload_data = $this->upload->data();
                //$file_path = $upload_data['file_path'];

                $file_path = base_url().'/uploads/images/'.$upload_data['file_name'];
                
                // $this->load->view('progress', $data);
                // print_r($this->upload->data());
                // print_r($file_path);

                $this->load->model('Model_progress');
                $response = $this->Model_progress->insertProgressData($file_path);
                if ($response) {
                
                    $this->session->set_flashdata('msg', 'Inserted Successfully.');

                    redirect('Progress/progresses');
                } else {
                    $this->session->set_flashdata('errmsg', 'Something Went Wrong');
                    redirect('Progress/progressView');
                }
                
            }else{ 
    
                // redirect('Home/PpvsHome');
                // print_r($this->upload->display_errors());
                $this->session->set_flashdata('errmsg', 'Something Went Wrong');
                redirect('Progress/progressView');
            } 




            // $this->upload->do_upload('image');
            // $upload_data = $this->upload->data();
            // $file_path = $upload_data['full_path']; 

            // $this->upload->initialize($this->set_upload_options());
            // $this->upload->do_upload('image');
            // $upload_data = $this->upload->data();
            // $file_path = $upload_data['full_path'];





            // $this->load->model('Model_progress');
            // $response = $this->Model_progress->insertProgressData($file_path);
            // if ($response) {
                
            //     $this->session->set_flashdata('msg', 'Inserted Successfully.');

            //     redirect('Progress/progresses');
            // } else {
            //     $this->session->set_flashdata('errmsg', 'Something Went Wrong');
            //     redirect('Progress/progressView');
            // }
        }
    }

    public function progressView()
    {

        if ($this->session->userdata('ProgressView') == "checked") {
            $this->load->model("Model_progress");
            $data["progress_fetch_data"] = $this->Model_progress->progress_fetch_data();
            $this->load->view('progress', $data);
        } else {
            redirect('Home/PpvsHome');
        }
    }

    public function updatedata()
    {

        $PpdCode = $this->input->post('PpdCode');
        $ProjectCode = $this->input->post('ProjectCode');
        $LocationCode = $this->input->post('LocationCode');
        // $Status = $this->input->post('Status');
        $PhotoItem = $this->input->post('PhotoItem');
        $WorkSide = $this->input->post('WorkSide');
        // $Image = $this->input->post('Image');
        $ImgDate = $this->input->post('ImgDate');
        $Remark = $this->input->post('Remark');
        $this->load->model("Model_progress");
        // $this->Model_progress->update_records($PpdCode, $ProjectCode, $LocationCode, $Status, $PhotoItem, $Image, $ImgDate);
        $this->Model_progress->update_records($PpdCode, $ProjectCode, $LocationCode, $PhotoItem, $WorkSide, $ImgDate, $Remark);
        
        $this->session->set_flashdata('msg', 'Data updated successfully.');
        redirect('Progress/progresses');
    }

    public function autofillProject()
    {
        $this->load->model('Model_progress');
        $result = $this->Model_progress->autoProject($_POST['ProjectCode']);

        echo $result;
    }

    public function autofillLocation()
    {
        $this->load->model('Model_progress');
        $result = $this->Model_progress->autoLocation($_POST['LocationCode']);

        echo $result;
    }
    

    public function deletedata()
    {

        $PpdCode = $this->input->post('PpdCode');
        $this->load->model("Model_progress");
        $this->Model_progress->deletedata($PpdCode);
        // echo "Date updated successfully !”;
        $this->session->set_flashdata('msg', 'Data deleted successfully.');
        redirect('Progress/progresses');

        //   print_r($UserName);  
    }

    function register_ppdcode_exists()
    {
        if (array_key_exists('ppdcode', $_POST)) {
            $this->load->model("Model_progress");
            if ($this->Model_progress->ppdcode_exists($this->input->post('ppdcode')) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

  /*  function register_suppliercode_exists()
    {
        if (array_key_exists('suppliercode', $_POST)) {
            $this->load->model("Model_suppliers");
            if ($this->Model_suppliers->suppliercode_exists($this->input->post('suppliercode')) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }*/



    // public function project_progress_view()
    // {

    //         $this->load->model("Model_progress");
    //         $data["project_progress_fetch_data"] = $this->Model_progress->project_progress_fetch_data();
    //         $this->load->view('PpvsHome', $data);
        
    // }


    // public function project_item_view()
    // {

    //         // $ProjectCode = $this->input->post('submit');
    //         $ProjectCode = $_POST['submit'];
    //         $this->load->model("Model_progress");
    //         $data["item_fetch_data"] = $this->Model_progress->item_fetch_data($ProjectCode);
    //         $this->load->view('ItemView', $data);
        
    // }

    

    // public function project_location_view()
    // {

    //         $this->load->model("Model_progress");
    //         $data["project_location_fetch_data"] = $this->Model_progress->project_location_fetch_data();
    //         $this->load->view('LocationView', $data);
        
    // }

    // public function project_image_view()
    // {

    //         $this->load->model("Model_progress");
    //         $data["progress_fetch_data"] = $this->Model_progress->progress_fetch_data();
    //         $this->load->view('ImageView', $data);
        
    // }
}
