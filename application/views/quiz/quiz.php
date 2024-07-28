<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <title>Institutions</title>   <link rel="stylesheet" type="text/css" href="<?= base_url('application/views/css/quiz.css'); ?>">
</head>
<body>
    <div id="quiz-container">
        <h1>Quiz</h1>
        <div id="question-container">
            <p id="question-text"></p>
            <div id="media-container"></div>
            <div id="options-container">
                <label><input type="radio" name="option" value="A"> <span id="option-a"></span></label><br>
                <label><input type="radio" name="option" value="B"> <span id="option-b"></span></label><br>
                <label><input type="radio" name="option" value="C"> <span id="option-c"></span></label><br>
                <label><input type="radio" name="option" value="D"> <span id="option-d"></span></label>
            </div>
            <button id="next-button">Next</button>
        </div>
        <div id="user-info-container" style="display: none;">
            <input type="text" id="user_name" placeholder="Enter your name" required>
            <button id="submit-quiz">Submit Quiz</button>
        </div>
    </div>
    <div id="score-container" style="display: none;">
        <h1>Your Score</h1>
        <p id="listening-score"></p>
        <p id="reading-score"></p>
        <p id="total-score"></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let currentQuestionId = 0;
            let currentType = 'listening';
            let userAnswers = {};

            function loadNextQuestion() {
                $.ajax({
                    url: '<?php echo site_url('quiz/get_next_question/'); ?>' + currentQuestionId + '/' + currentType,
                    method: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data) {
                            $('#question-text').text(data.question_text);
                            $('#option-a').text(data.option_a);
                            $('#option-b').text(data.option_b);
                            $('#option-c').text(data.option_c);
                            $('#option-d').text(data.option_d);
                            $('input[name="option"]').prop('checked', false);

                            if (data.media_type === 'audio') {
                                $('#media-container').html('<audio controls><source src="<?php echo base_url(); ?>' + data.media_path + '" type="audio/mpeg">Your browser does not support the audio element.</audio>');
                            } else if (data.media_type === 'image') {
                                $('#media-container').html('<img src="<?php echo base_url(); ?>' + data.media_path + '" alt="Question Image">');
                            } else {
                                $('#media-container').html('');
                            }

                            currentQuestionId = data.id;
                        } else {
                            if (currentType === 'listening') {
                                currentType = 'reading';
                                currentQuestionId = 0;
                                loadNextQuestion();
                            } else {
                                $('#question-container').hide();
                                $('#user-info-container').show();
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error loading next question:", error);
                    }
                });
            }

            function submitQuiz() {
                const userName = $('#user_name').val();
                if (userName) {
                    $.ajax({
                        url: '<?php echo site_url('quiz/submit_final_answers'); ?>',
                        method: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({ user_name: userName, answers: userAnswers }),
                        dataType: 'json',
                        success: function(data) {
                            $('#user-info-container').hide();
                            $('#score-container').show();
                            $('#listening-score').text(`Listening Score: ${data.listening_score}`);
                            $('#reading-score').text(`Reading Score: ${data.reading_score}`);
                            $('#total-score').text(`Total Score: ${data.total_score}`);
                        },
                        error: function(xhr, status, error) {
                            console.error("Error submitting quiz:", error);
                        }
                    });
                } else {
                    alert('Please enter your name!');
                }
            }

            $('#next-button').on('click', function() {
                const selectedOption = $('input[name="option"]:checked').val();
                if (selectedOption) {
                    userAnswers[currentQuestionId] = selectedOption;
                    loadNextQuestion();
                } else {
                    alert('Please select an option!');
                }
            });

            $('#submit-quiz').on('click', submitQuiz);

            loadNextQuestion();
        });
    </script>
</body>
</html>
