<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('application/views/css/navbar.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('application/views/css/test_info.css'); ?>">
    <link rel="icon" href="<?= base_url('images/logo.png'); ?>" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <title>PNB TOEIC Center - Test Information</title>
</head>
<body>
    <!-- Header -->
    <?php include 'navbar.php'; ?>

    <!-- Test Information Section -->
    <div class="test-info-section" data-aos="fade-up" data-aos-duration="1200">
        <div class="accordion-container">
            <h1>Test Information</h1>
            <div class="accordion" id="testInfoAccordion">
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Why choose the TOEIC Listening and Reading test?
                            <i class="fa-solid fa-chevron-down icon-toggle"></i>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-parent="#testInfoAccordion">
                        <div class="accordion-body">
                            Information about why choosing the TOEIC Listening and Reading test is beneficial.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Content and Test Format
                            <i class="fa-solid fa-chevron-down icon-toggle"></i>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-parent="#testInfoAccordion">
                        <div class="accordion-body">
                            Information about the content and test format of the TOEIC Listening and Reading test.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How Can I Register and/or Take the Test?
                            <i class="fa-solid fa-chevron-down icon-toggle"></i>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-parent="#testInfoAccordion">
                        <div class="accordion-body">
                            Instructions on how to register and/or take the TOEIC test.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="800">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Test Day
                            <i class="fa-solid fa-chevron-down icon-toggle"></i>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-parent="#testInfoAccordion">
                        <div class="accordion-body">
                            Information about what to expect on the test day.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="1000">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Score Report and Delivery Date
                            <i class="fa-solid fa-chevron-down icon-toggle"></i>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-parent="#testInfoAccordion">
                        <div class="accordion-body">
                            Details about the score report and delivery date.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="1200">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            How Do I Prepare for the TOEIC Listening and Reading Test?
                            <i class="fa-solid fa-chevron-down icon-toggle"></i>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-parent="#testInfoAccordion">
                        <div class="accordion-body">
                            Tips and resources for preparing for the TOEIC Listening and Reading test.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="1400">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Remote Proctored Test
                            <i class="fa-solid fa-chevron-down icon-toggle"></i>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-parent="#testInfoAccordion">
                        <div class="accordion-body">
                            Information about the remote proctored test option.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <h2>Test information</h2>
            <ul>
                <li>Total Test Length: 2 hours or 1 hour (only available for professional organizations)</li>
                <li>Score Validity: 2 years</li>
                <li>Format: pencil and paper or online (on a computer or tablet)</li>
                <li>Levels assessed: beginner to advanced (A1 to C1 according to CECRL)</li>
                <li>Skills assessed: reading and listening comprehension via multiple choice questions</li>
                <li>Test Discounts are available for: students, members of the armed forces, and job seekers</li>
            </ul>
            <a href="#" class="download-link">TOEIC Examinee Handbook (version 2h and 1h)</a>
            <a href="#" class="download-link">Consent form for test takers under 18 years of age</a>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        });
    </script>
</body>
</html>
