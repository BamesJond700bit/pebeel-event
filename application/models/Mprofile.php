<?php
class Mprofile extends CI_Model
{
    function simpanprofile()
    {
        if ($this->session->userdata('role') === 'admin') {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $nama = $this->input->post('nama');
            $password = $this->input->post('password');
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $data_to_insert = array(
                'username' => $username,
                'email' => $email,
                'nama' => $nama,
                'password' => $hashed_password
            );

            $this->db->insert('user', $data_to_insert);

            echo "<script>alert('Data berhasil disimpan');</script>";
            redirect('cprofile/tampilprofile', 'refresh');
        } else {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $nama = $this->input->post('nama');
            $password = $this->input->post('password');
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $data_to_insert = array(
                'username' => $username,
                'email' => $email,
                'nama' => $nama,
                'password' => $hashed_password
            );

            $this->db->insert('user', $data_to_insert);

            echo "<script>alert('Data berhasil disimpan');</script>";
            redirect('chalaman/login', 'refresh');
        }
    }

    function tampilakun()
    {
        $query = $this->db->get('user');
        return $query->result();
    }
}
?>
