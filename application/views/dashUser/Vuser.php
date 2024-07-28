<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    
    <style>
        body,html {
            background-color: #9EB384;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .navbar {
            z-index: 1000;
            height: 10vh;
        }

        .container-fluid {
            display: flex;
            height: 90vh;
            overflow: hidden;
        }

        .col-sm-2 {
            background-color: #ffffff;
            padding: 15px;
            min-height: 100%;
            position: sticky;
            top: 0;
            overflow-y: auto;
            height: 100%;
        }

        .list-group {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .list-group-item {
            border: none;
            width: 100%;
        }

        .col-sm-10 {
            flex: 1;
            overflow-y: auto;
        }
        
        .custom-btn {
        background-color: #004789;
        color: #fff;
        }

        .custom-btn:hover,
        .custom-btn:active {
            background-color: #0066a2;
            color: #fff;
        }
    </style>
    <title>User Dashboard</title>
</head>

<body>
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand font-weight-bold" href="<?php echo base_url('cindex/dashboardUser'); ?>">
            <img src="<?= base_url('images/logo_home.png');?>" width="270px" height="50px" alt=""> 
        </a>
        <ul class="navbar-nav font-weight-bold ml-auto">
            <li class="nav-item">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle custom-btn" style="background-color: #355E3B; border-radius:8px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?= base_url('img_profile/'.$this->session->userdata('foto')); ?>" alt="User Image" width="25px" height="25px" class="rounded-circle">
                        <span class="ml-1"><?= $this->session->userdata('nama'); ?></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo base_url('cprofile/tampilakun'); ?>">Profile</a>
                        <a class="dropdown-item text-danger" href="<?= base_url('cindex/logout');?>">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>

    <!-- GRID -->
    <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
        <!-- Sidebar -->
        <div class="col-sm-2 bg-light" id="sidebar">
            <ul class="list-group">
                <a href="<?php echo base_url('cindex/mytest')?>" class="list-group-item list-group-item-action bg-light"><i class="fa-regular fa-newspaper"></i></> My Test</a>
                <a href="<?php echo base_url('cindex/aboutTest')?>" class="list-group-item list-group-item-action bg-light"><i class="fa-solid fa-user"></i> About Test</a>
                <a href="<?php echo base_url('cindex/institution')?>" class="list-group-item list-group-item-action bg-light"><i class="fa-solid fa-calendar-plus"></i> Institutions</a>
                <a href="<?php echo base_url('cindex/score')?>" class="list-group-item list-group-item-action bg-light"><i class="fa-solid fa-calendar-plus"></i> Scores</a>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="col-sm-10">
            <div class="container mt-3">
                <?php
                if (empty($kontenuser)) {
                    echo "";
                } else {
                    echo $kontenuser;
                }
                ?>

            </div>
        </div>
    </div>
        
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
