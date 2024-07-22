<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('application/views/css/navbar.css'); ?>">
</head>
<body>
    <div class="header container-fluid">
        <div class="logo">
            <a href="<?= base_url('chalaman/index'); ?>">
                <img id="main-logo" src="<?= base_url('images/logo_home.png'); ?>" data-alt-src="<?= base_url('images/logo.png'); ?>" class="d-inline-block align-top" alt="">
            </a>
        </div>
        <div class="contact-info">
            <div><i class="fa-solid fa-chalkboard-user custom1"></i> Work Hour: Mon-Fri, 7am-3pm</div>
            <div><i class="fa-solid fa-square-phone custom1"></i> Phone: +62 (0361)701981</div>
        </div>
    </div>
    <div class="header-under container-fluid">
        <div class="nav-links">
            <a href="<?= base_url('chalaman/index'); ?>">Home</a>
            <a href=<?= base_url('chalaman/test_info'); ?>>Test Info</a>
            <a href="page3.html">Institutions</a>
            <a href="<?= base_url('chalaman/contactus'); ?>">Contact us</a>
        </div>
        <a href="<?= base_url('chalaman/login'); ?>" class="login btn btn-primary">Login</a>
    </div>

    <!-- Scrolled Navbar -->
    <div class="header-scrolled container-fluid">
        <div class="logo">
            <a href="<?= base_url('chalaman/index'); ?>">
                <img id="main-logo" src="<?= base_url('images/logo_scroll.png'); ?>" data-alt-src="<?= base_url('images/logo.png'); ?>" class="d-inline-block align-top" alt="">
            </a>
        </div>
        <div class="nav-links">
            <a href="<?= base_url('chalaman/index'); ?>">Home</a>
            <a href="page2.html">Test Info</a>
            <a href="page3.html">Institutions</a>
            <a href="page4.html">Contact</a>
        </div>
        <a href="<?= base_url('chalaman/login'); ?>" class="login btn btn-primary">Login</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var mainLogo = document.getElementById('main-logo');
            var headerOriginal = document.querySelector('.header');
            var headerScrolled = document.querySelector('.header-scrolled');
            var originalSrc = mainLogo.src;
            var altSrc = mainLogo.getAttribute('data-alt-src');

            window.addEventListener('scroll', function () {
                if (window.scrollY > 44) { // Adjust the scroll threshold as needed
                    mainLogo.src = altSrc;
                    headerOriginal.style.opacity = '0'; /* Hide original header smoothly */
                    headerScrolled.classList.add('show'); /* Show scrolled header smoothly */
                } else {
                    mainLogo.src = originalSrc;
                    headerOriginal.style.opacity = '1'; /* Show original header smoothly */
                    headerScrolled.classList.remove('show'); /* Hide scrolled header smoothly */
                }
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
