<?php 
	class mycontroller extends CI_Controller {
		function index(){
			$this->load->model('mymodel');
			$data = $this->mymodel->selectdata();
			$this->load->view('layout/index' , ['getdata'=>$data]);
		}
		function delete($id){
			$this->load->model('mymodel');
			$check = $this->mymodel->deleterow($id);
			if($check == true){
				redirect('mycontroller/index');
			}
		}
		function edit($id){
			$this->load->model('mymodel');
			$user_data = $this->mymodel->showdata($id);
			$this->load->view('layout/update' , ['info'=>$user_data]);
		}
		function updatedata($id){
			$inputs = $this->input->post();
			$this->load->model('mymodel');
			$check = $this->mymodel->updatedata($id , $inputs);
			if($check == true){
				redirect('mycontroller/index');
			}
		}
	}
 ?>