<?php
class Mdataevent extends CI_Model{
        function simpandata()
        {
            $data = $_POST;
            $id_user = $this->session->userdata('id');
            $data['id_user'] = $id_user;

            $this->db->insert('event',$data);
            echo "<script>alert('Event berhasil disimpan');</script>";
            redirect('cevent/tampilevent','refresh');
        }

        function tampildata()
        {
            $sql=
            "
            select event.*, user.nama AS id_user, kategori.nama_kategori as id_kategori
            FROM event
            INNER JOIN user ON event.id_user = user.id
            INNER JOIN kategori ON event.id_kategori = kategori.id_kategori;
            ";
            
            $query= $this->db->query($sql);
            if($query->num_rows()>0){
                foreach($query->result() as $row){
                    $hasil[]=$row; 
                }
            }
            else{
                $hasil="";
    
            }
            return $hasil;
        }

        function hapusdata($id_event)
        {
            $sql="delete from event where id_event='".$id_event."'";
            $this->db->query($sql);
            echo "<script>alert('Event berhasil dihapus');</script>";
            redirect('cevent/tampilevent','refresh');	
        }

        function updateEvent($id_event)
        {
            $data = $_POST;
            $id_user = $this->session->userdata('id');
            $data['id_user'] = $id_user;

            $condition = array('id_event' => $id_event);
            $response = $this->db->update('event',$data, $condition);
            redirect('cevent/tampilevent','refresh');	
        }


        function getEvent($id_event) 
        {
            $this->db->select('*')->from('event')->where('id_event',$id_event);
            $data = $this->db->get()->result();

            echo json_encode($data);
            
        }

        public function getKategoriData()
        {
            $query = $this->db->get('kategori');
            return $query->result();
        }

        public function get_events() 
        {
            $query = $this->db->get('event');
            return $query->result();
        }

        function getEventSurat($id_event) {
        return $this->db->select('*')->from('event')->where('id_event',$id_event)->get()->first_row(); 
        }        
        

    }
?>