<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question_model extends CI_Model {

    public function get_questions($type = null) {
        if ($type) {
            $this->db->where('question_type', $type);
        }
        return $this->db->get('questions')->result_array();
    }

    public function insert_question($data) {
        return $this->db->insert('questions', $data);
    }

    public function insert_score($data) {
        return $this->db->insert('scores', $data);
    }
    public function get_next_question($current_id, $question_type) {
        $this->db->where('id >', $current_id);
        $this->db->where('question_type', $question_type);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('questions', 1);
        return $query->row_array();
    }
    
    public function get_all_questions() {
        return $this->db->get('questions')->result_array();
    }
    
}


