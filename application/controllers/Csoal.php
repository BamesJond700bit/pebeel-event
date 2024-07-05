<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csoal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Msoal');
        $this->load->library('upload');
        $this->load->library('form_validation');
    }

    public function Vaddsoal() {
        $this->load->view('admin/Vaddsoal');
    }

    public function add_soal() {
        // Set form validation rules
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
        $this->form_validation->set_rules('opsi_a', 'Opsi A', 'required');
        $this->form_validation->set_rules('opsi_b', 'Opsi B', 'required');
        $this->form_validation->set_rules('opsi_c', 'Opsi C', 'required');
        $this->form_validation->set_rules('opsi_d', 'Opsi D', 'required');
        $this->form_validation->set_rules('tipe_soal', 'Tipe Soal', 'required');
        
        if ($this->input->post('tipe_soal') == 'listening') {
            if (empty($_FILES['audio']['name'])) {
                $this->form_validation->set_rules('audio', 'Audio', 'required');
            }
        }

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/Vaddsoal');
        } else {
            $data = array(
                'pertanyaan' => $this->input->post('pertanyaan'),
                'opsi_a' => $this->input->post('opsi_a'),
                'opsi_b' => $this->input->post('opsi_b'),
                'opsi_c' => $this->input->post('opsi_c'),
                'opsi_d' => $this->input->post('opsi_d'),
                'tipe_soal' => $this->input->post('tipe_soal'),
            );

            $soal_id = $this->Msoal->insert_soal($data);

            // Upload Configurations
            $config_gambar = array(
                'upload_path' => './uploads/images/',
                'allowed_types' => 'jpg|jpeg|png',
                'max_size' => 2048, // 2MB
                'encrypt_name' => TRUE,
            );
            
            $config_audio = array(
                'upload_path' => './uploads/audio/',
                'allowed_types' => 'mp3|wav',
                'max_size' => 5120, // 5MB
                'encrypt_name' => TRUE,
            );

            // Handle file uploads
            if (!empty($_FILES['gambar']['name'])) {
                $this->upload->initialize($config_gambar);
                if ($this->upload->do_upload('gambar')) {
                    $fileData = $this->upload->data();
                    $gambar_data = array(
                        'soal_id' => $soal_id,
                        'nama_gambar' => $fileData['file_name']
                    );
                    $this->Msoal->insert_gambar($gambar_data);
                } else {
                    // Handle upload error
                    echo $this->upload->display_errors();
                }
            }

            if (!empty($_FILES['audio']['name'])) {
                $this->upload->initialize($config_audio);
                if ($this->upload->do_upload('audio')) {
                    $fileData = $this->upload->data();
                    $audio_data = array(
                        'soal_id' => $soal_id,
                        'nama_audio' => $fileData['file_name']
                    );
                    $this->Msoal->insert_audio($audio_data);
                } else {
                    // Handle upload error
                    echo $this->upload->display_errors();
                }
            }

            redirect('/adminCsoal/Vbanksoal');
        }
    }

    public function Vbanksoal() {
        $data['soal'] = $this->Msoal->get_all_soal();
        $this->load->view('admin/Vbanksoal', $data);
    }
    

    public function edit_soal($id) {
        // Implementasi untuk edit soal
    }

    public function delete_soal($id) {
        $this->Msoal->delete_soal($id);
        redirect('Csoal/Vbanksoal');
    }
}
?>
