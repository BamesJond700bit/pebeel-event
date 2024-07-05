<?php

    class Cindex extends CI_Controller{
        
        function tampil(){
            $this->load->view('index');
        }

        function dashboard(){
            $this->load->view('admin/vadmin');
        }

        function dashboardUser(){
            $data['kontenuser'] = $this->load->view('/auth/lupa_pass',"", TRUE);
			$this->load->view('dashUser/vuser', $data);
        }

    
    }

?>