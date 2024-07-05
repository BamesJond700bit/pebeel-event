<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Cimport extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mimport');
    }

    function tampilimport(){
        $this->load->view('admin/Vimport');
    }

    private function buatpwd() {
        $kata = "ABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
        $password = substr(str_shuffle($kata), 0, 6);
        return $password;
    }

    public function import() {
        if (isset($_FILES['upload_file']) && $_FILES['upload_file']['error'] == 0) {
            $upload_file = $_FILES['upload_file']['name'];
            $extension = pathinfo($upload_file, PATHINFO_EXTENSION);
    
            if ($extension == 'csv') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else if ($extension == 'xls') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
    
            $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
            $sheetdata = $spreadsheet->getActiveSheet()->toArray();
            $sheetcount = count($sheetdata);
    
            if ($sheetcount > 1) {
                $data = array();
                $duplicate_entries = array();
                for ($i = 1; $i < $sheetcount; $i++) {
                    $nama = isset($sheetdata[$i][0]) ? $sheetdata[$i][0] : null;
                    $nim = isset($sheetdata[$i][1]) ? $sheetdata[$i][1] : null;
                    $email = isset($sheetdata[$i][2]) ? $sheetdata[$i][2] : null;
                    $tgl_lahir_excel = isset($sheetdata[$i][3]) ? $sheetdata[$i][3] : null;
                    
    
                    // Mengonversi format tanggal dari Excel (01/01/2001) ke format YYYY-MM-DD
                    $tgl_lahir_php = date_create_from_format('d/m/Y', $tgl_lahir_excel);
                    $tgl_lahir_formatted = $tgl_lahir_php ? $tgl_lahir_php->format('Y-m-d') : null;
    
                    // Memastikan kolom nama, nim, email, dan tgl_lahir tidak kosong
                    if (!empty($nama) && !empty($nim) && !empty($email) && !empty($tgl_lahir_formatted)) {
                        // Periksa apakah email atau nim sudah ada
                        if ($this->Mimport->is_duplicate($email, $nim)) {
                            $duplicate_entries[] = "Email: $email, NIM: $nim";
                        } else {
                            $data[] = array(
                                'nama' => $nama,
                                'nim' => $nim,
                                'email' => $email,
                                'tgl_lahir' => $tgl_lahir_formatted, // Menggunakan format YYYY-MM-DD
                                'password' => $this->buatpwd(), // Menggunakan fungsi buatpwd untuk membuat password acak
                                'role' => 'user',
                               
                            );
                        }
                    }
                }
    
                if (!empty($data)) {
                    $insertdata = $this->Mimport->insert_batch($data);
    
                    if ($insertdata) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil ditambahkan</div>');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Tidak ada data yang valid untuk diimpor</div>');
                }
    
                if (!empty($duplicate_entries)) {
                    $duplicates = implode('<br>', $duplicate_entries);
                    $this->session->set_flashdata('message', '<div class="alert alert-warning">Data berikut sudah ada: <br>' . $duplicates . '</div>');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">File tidak memiliki cukup baris untuk diimpor</div>');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Tidak ada file yang dipilih atau terjadi kesalahan saat mengunggah file</div>');
        }
    
        redirect('cimport/tampilimport');
    }
    
}
?>
