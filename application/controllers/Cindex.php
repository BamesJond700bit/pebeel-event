<?php

    class Cindex extends CI_Controller{
        
        function tampil(){
            $this->load->view('index');
        }

        function dashboard(){
            $this->load->view('admin/vadmin');
        }

        function dashboardUser(){
            $data['kontenuser'] = $this->load->view('/dashUser/vmytest',"", TRUE);
			$this->load->view('dashUser/vuser', $data);
        }
        
        function aboutTest(){
            $data['kontenuser'] = $this->load->view('/dashUser/aboutTest',"", TRUE);
			$this->load->view('dashUser/vuser', $data);
        }

        function institution(){
            $data['kontenuser'] = $this->load->view('/dashUser/institution',"", TRUE);
			$this->load->view('dashUser/vuser', $data);
        }

        function mytest(){
            $data['kontenuser'] = $this->load->view('/dashUser/vmytest',"", TRUE);
			$this->load->view('dashUser/vuser', $data);
        }

        function score(){
            $data['kontenuser'] = $this->load->view('/dashUser/vtestinfo',"", TRUE);
			$this->load->view('dashUser/vuser', $data);
        }

        function logout()
		{
			$this->session->sess_destroy();
			redirect('chalaman/login','refresh');	
		}
    
    }

?>