<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Question</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body>
    <div id="add-question-container">
        <h1>Add New Question</h1>
        <form action="<?php echo site_url('quiz/add_question'); ?>" method="post" enctype="multipart/form-data">
            <div>
                <label for="question_text">Question Text:</label>
                <input type="text" id="question_text" name="question_text" required>
            </div>
            <div>
                <label for="option_a">Option A:</label>
                <input type="text" id="option_a" name="option_a" required>
            </div>
            <div>
                <label for="option_b">Option B:</label>
                <input type="text" id="option_b" name="option_b" required>
            </div>
            <div>
                <label for="option_c">Option C:</label>
                <input type="text" id="option_c" name="option_c" required>
            </div>
            <div>
                <label for="option_d">Option D:</label>
                <input type="text" id="option_d" name="option_d" required>
            </div>
            <div>
                <label for="correct_option">Correct Option:</label>
                <select id="correct_option" name="correct_option" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
            <div>
                <label for="media_type">Media Type:</label>
                <select id="media_type" name="media_type">
                    <option value="">None</option>
                    <option value="audio">Audio</option>
                    <option value="image">Image</option>
                </select>
            </div>
            <div>
                <label for="media_file">Media File:</label>
                <input type="file" id="media_file" name="media_file" accept="audio/*,image/*">
            </div>
            <div>
                <label for="question_type">Question Type:</label>
                <select id="question_type" name="question_type" required>
                    <option value="listening">Listening</option>
                    <option value="reading">Reading</option>
                </select>
            </div>
            <div>
                <button type="submit">Add Question</button>
            </div>
        </form>
    </div>
</body>
</html>
