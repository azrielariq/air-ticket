<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_Setting');
    }
    public function index(){
        if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');
        }

    	$data['setting'] = $this->M_Setting->get_setting();
		$data['nav'] = 'setting';
        $this->load->view('admin/template/V_Header',$data);
    	$this->load->view('admin/V_Setting');
    	$data['script'] = '';
		$this->load->view('admin/template/V_Footer',$data);
    }

    public function update(){
    	

    	$rand_basename = explode('.',basename($_FILES["bannerimg"]["name"]));
        $rand_basename = bin2hex(openssl_random_pseudo_bytes(32)).'.'.end($rand_basename);

        $target_dir = "./_assets/banner_bg/";
        $target_file = $target_dir . $rand_basename;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["bannerimg"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["bannerimg"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["bannerimg"]["tmp_name"], $target_file)) {
                // echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
            // $this->M_Reservation->insert_proof_of_payment($this->input->post('reservation_code'),$rand_basename);
        $banner_title = $this->input->post('bannertitle');
    	$banner_description = $this->input->post('bannerdescription');
    	$banner_other = $this->input->post('bannerother');
    	$banner_img = $this->input->post('bannerimg');

    	$data = [
    		'banner_title' => $banner_title,
    		'banner_description' => $banner_description,
    		'banner_other' => $banner_other,
    		'banner_img' => $rand_basename
    	];

    	$this->M_Setting->update($data);
    	redirect(base_url().'admin/setting');

            
              
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

}