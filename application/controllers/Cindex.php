<?php

    class Cindex extends CI_Controller{
        
        function tampil(){
            $this->load->view('index');
        }

        function dashboard(){
            $this->load->view('admin/vadmin');
        }

        function dashboardUser(){
			$this->load->view('dashUser/vuser');
        }
        
        function aboutTest(){
            $data['kontenuser'] = $this->load->view('/dashUser/aboutTest',"", TRUE);
			$this->load->view('dashUser/vuser', $data);
        }

        function institution(){
            $data['kontenuser'] = $this->load->view('/dashUser/institution',"", TRUE);
			$this->load->view('dashUser/vuser', $data);
        }
        function logout()
		{
			$this->session->sess_destroy();
			redirect('chalaman/login','refresh');	
		}
    
    }

?>