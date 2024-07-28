<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Duolingo English Test</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Helvetica Neue", Arial, sans-serif;
        background-color: #f8f9fa;
      }
      .hero-section {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 3rem;
        margin-top: 2rem;
      }
      .hero-section h1 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #343a40;
        margin-bottom: 1rem;
      }
      .hero-section p {
        font-size: 1.1rem;
        color: #6c757d;
      }
      .btn-primary {
        padding: 0.75rem 2rem;
        font-size: 1rem;
        border-radius: 50px;
      }
      .learn-more-box {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        margin-top: 2rem;
        text-align: center;
      }
      .learn-more-box h3 {
        font-size: 1.5rem;
        color: #343a40;
        margin-bottom: 1rem;
      }
      .btn-outline-secondary {
        padding: 0.5rem 1.5rem;
        font-size: 1rem;
        border-radius: 50px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="hero-section">
            <div class="row align-items-center">
              <div class="col-md-6">
                <h1>Start your testing journey today!</h1>
                <p>
                  Join millions of students who have taken the Duolingo English
                  Test.
                </p>
                <a href="#" class="btn btn-primary">Take a Test</a>
                <div class="mt-4">
                  <h2>Not quite ready?</h2>
                  <p>
                    No problem! Prepare with our collection of reference
                    materials and practice exercises.
                  </p>
                </div>
              </div>
              <div class="col-md-6 text-center">
                <img
                  src="<?php echo base_url('images/malereading.jpg'); ?>"
                  alt="Illustration"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
          <div class="learn-more-box">
            <h3>Learn about the test</h3>
            <a href="#" class="btn btn-outline-secondary">Learn More ></a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
