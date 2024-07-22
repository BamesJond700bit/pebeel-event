<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Info</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap">
    <link rel="stylesheet" type="text/css" href="<?= base_url('application/views/css/aboutTest.css'); ?>">
</head>
<body>
    <div class="container">
        <div class="main-content">
            <div class="test-info">
                <!-- <h1>About the Test</h1> -->
                <div class="test-question-types">
                    <h2>About Test</h2>
                    <p>The TOEIC tests assess your English-language communication skills for the workplace. Learn about each test, how they benefit you and access official test prep materials.</p>
                    <button>Learn More</button>
                </div>
            </div>
            <div class="explore-videos">
                <h2>Explore Our Videos</h2>
                <div class="video">
                    <iframe width="200" height="113" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
                    <p>Test Overview</p>
                    <span>1:00</span>
                </div>
                <div class="video">
                    <iframe width="200" height="113" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
                    <p>Test Walkthrough</p>
                    <span>3:42</span>
                </div>
                <div class="video">
                    <iframe width="200" height="113" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
                    <p>Understanding Test Scores</p>
                    <span>4:05</span>
                </div>
            </div>
        </div>
        <div class="preparation-materials">
            <h2>Preparation Materials</h2>
            <ul>
                <li>
                    <h3>How the Test Works</h3>
                    <a href="#">Read More</a>
                </li>
                <li>
                    <h3>How Scores Work</h3>
                    <a href="#">Read More</a>
                </li>
                <li>
                    <h3>Test Rules</h3>
                    <a href="#">Read More</a>
                </li>
                <li>
                    <h3>Official Test Guide</h3>
                    <a href="#">Download PDF</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
