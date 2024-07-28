<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Question_model');
        $this->load->library('upload');
    }

    public function index() {
        $this->load->view('quiz/quiz');
    }

    public function crud(){
        $this->load->view('quiz/add_question_view');
    }

    public function get_questions($type = 'all') {
        $questions = $this->Question_model->get_questions($type);
        echo json_encode($questions);
    }

    public function submit_answers() {
        $data = json_decode($this->input->raw_input_stream, true);
        $user_name = $data['user_name'];
        $answers = $data['answers'];
    
        $listening_score = 0;
        $reading_score = 0;
    
        $questions = $this->Question_model->get_questions();
    
        foreach ($questions as $question) {
            $question_id = $question['id'];
            $correct_option = $question['correct_option'];
            $question_type = $question['question_type'];
    
            if (isset($answers[$question_id]) && $answers[$question_id] === $correct_option) {
                if ($question_type == 'listening') {
                    $listening_score += 2; // Each correct listening question earns 2 points
                } else if ($question_type == 'reading') {
                    $reading_score += 2.5; // Each correct reading question earns 2.5 points
                }
            }
        }
    
        $total_score = $listening_score + $reading_score;
    
        $this->Question_model->insert_score([
            'user_name' => $user_name,
            'score' => $total_score
        ]);
    
        echo json_encode([
            'listening_score' => $listening_score,
            'reading_score' => $reading_score,
            'total_score' => $total_score,
            'user_name' => $user_name
        ]);
    }

    public function submit_final_answers() {
        $data = json_decode($this->input->raw_input_stream, true);
        $answers = $data['answers'];
        $user_name = $data['user_name'];
    
        $listening_score = 0;
        $reading_score = 0;
    
        $questions = $this->Question_model->get_all_questions();
    
        foreach ($questions as $question) {
            $question_id = $question['id'];
            $correct_option = $question['correct_option'];
            $question_type = $question['question_type'];
    
            if (isset($answers[$question_id]) && $answers[$question_id] === $correct_option) {
                if ($question_type == 'listening') {
                    $listening_score += 2;
                } else if ($question_type == 'reading') {
                    $reading_score += 2.5;
                }
            }
        }
    
        $total_score = $listening_score + $reading_score;
    
        // Save the score or perform any other logic
    
        echo json_encode([
            'listening_score' => $listening_score,
            'reading_score' => $reading_score,
            'total_score' => $total_score,
        ]);
    }

    

    public function get_next_question($current_id = 0, $question_type = 'listening') {
        $question = $this->Question_model->get_next_question($current_id, $question_type);
        echo json_encode($question);
    }
    
    

    public function add_question() {
        $question_text = $this->input->post('question_text');
        $option_a = $this->input->post('option_a');
        $option_b = $this->input->post('option_b');
        $option_c = $this->input->post('option_c');
        $option_d = $this->input->post('option_d');
        $correct_option = $this->input->post('correct_option');
        $media_type = $this->input->post('media_type');
        $question_type = $this->input->post('question_type');
        
        $media_path = null;

        // Handle file upload
        if ($media_type && isset($_FILES['media_file']) && $_FILES['media_file']['size'] > 0) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = $media_type === 'audio' ? 'mp3|wav|ogg' : 'jpg|jpeg|png|gif';
            $config['max_size'] = 10000; // 10MB max
            $this->upload->initialize($config);

            if ($this->upload->do_upload('media_file')) {
                $upload_data = $this->upload->data();
                $media_path = 'uploads/' . $upload_data['file_name'];
            } else {
                // Handle upload errors
                echo $this->upload->display_errors();
                return;
            }
        }

        // Insert question into the database
        $this->Question_model->insert_question([
            'question_text' => $question_text,
            'option_a' => $option_a,
            'option_b' => $option_b,
            'option_c' => $option_c,
            'option_d' => $option_d,
            'correct_option' => $correct_option,
            'media_type' => $media_type,
            'media_path' => $media_path,
            'question_type' => $question_type
        ]);

        // Redirect or load view
        redirect('quiz/crud');
    }
}
