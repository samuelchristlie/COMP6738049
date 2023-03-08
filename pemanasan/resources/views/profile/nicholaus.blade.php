<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Lato&family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <title>Nicholaus</title>
</head>

<body>
    <style>
        .custom-body-color {
            background-color: #00203FFF !important;
        }

        .custom-navbar-color {
            background-color: #cedef0 !important;
        }

        .custom-navbar-item-color {
            margin: 1%;
            padding: 1%;
            padding-left: 2%;
            padding-right: 2%;
        }

        .custom-navbar-item-color:hover {
            background-color: #e7dcdd !important;
        }

        .custom-navbar-item-color.active {
            background-color: #ADEFD1FF !important;
        }

        .custom-card-color {
            background-color: #ADEFD1FF!important;
        }

        /* img{
            border-radius: 50% !important;
        } */

        .custom-card-pop-color {
            background-color: #ADEFD1FF !important;
        }
    </style>




    </head>

    <body class="custom-body-color" style="box-sizing: border-box; font-family: 'Lato', sans-serif;">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-light custom-navbar-color fixed-top shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand  " href="..">Pemanasan Kelompok 9</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link rounded-5 custom-navbar-item-color<?php
                                                                                if ($name == 'samuel') {
                                                                                    echo ' active" aria-current="page';
                                                                                }

                                                                                ?>" href="samuel">Samuel</a>

                        <a class="nav-link rounded-5 custom-navbar-item-color<?php
                                                                                if ($name == 'delvina') {
                                                                                    echo ' active" aria-current="page';
                                                                                }

                                                                                ?>" href="delvina">Delvina</a>

                        <a class="nav-link rounded-5 custom-navbar-item-color<?php
                                                                                if ($name == 'mary') {
                                                                                    echo ' active" aria-current="page';
                                                                                }

                                                                                ?>" href="mary">Mary</a>

                        <a class="nav-link rounded-5 custom-navbar-item-color<?php
                                                                                if ($name == 'nicholaus') {
                                                                                    echo ' active" aria-current="page';
                                                                                }

                                                                                ?>" href="nicholaus">Nicholaus</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Profile -->
        <div class="container-fluid" style="margin-top: 45px">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4 shadow rounded-4 custom-card-pop-color" style="margin: 30px; padding: 20px">
                        <div class="card-body text-center">
                            <img src="../img/Nicholaus.png" class="shadow" alt="Nicholaus" style="max-width: 70%; border-radius: 50%;">
                            <h1 class="my-3" style="font-family: 'Caveat', cursive; font-weight:bold;">Nicholaus</h1>
                            <p class="text-muted mb-1">Computer Science and Statistics</p>
                            <p class="text-muted mb-1">Binus University, Jakarta</p>


                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="card mb-4 shadow rounded-4  custom-card-color" style="margin: 30px; padding: 20px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Name</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">Nicholaus</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">E-mail</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">nicholaus@binus.ac.id</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Birthday</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">March 24</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Favorite Course</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">Human Computer and Interaction</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Skills or Hobbies</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">Willingness to learn</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Description</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">Hi, I am Nicholaus. I am a 20-year-old student currently studying computer science and statistics at Bina Nusantara University. I am passionate about technology and enjoys learning about programming languages and software development. In my free time, I like to play video games, listen to music, and watch movies. I also enjoys staying active by going for runs and playing basketball with my friends. With My dedication and hard work, I hope to one day become a successful data scientist.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>