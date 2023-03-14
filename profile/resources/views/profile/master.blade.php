<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile - @yield("name")</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Lato&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    
  
    
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top shadow-sm">
      <div class="container-fluid">
        <a class="navbar-brand  " href="..">Profile</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link rounded-5 <?php
              if($name=='samuel'){
              echo ' active" aria-current="page';
              }
              
            ?>"  href="samuel">Samuel</a>
            
            <a class="nav-link rounded-5 <?php
              if($name=='delvina'){
              echo ' active" aria-current="page';
              }
              
            ?>"  href="delvina">Delvina</a>
            
            <a class="nav-link rounded-5 <?php
              if($name=='mary'){
              echo ' active" aria-current="page';
              }
              
            ?>"  href="mary">Mary</a>
            
            <a class="nav-link rounded-5 <?php
              if($name=='nicholaus'){
              echo ' active" aria-current="page';
              }
              
            ?>"  href="nicholaus">Nicholaus</a>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- Profile -->
    <div class="container-fluid" style="margin-top: 45px">
      <div class="row">
        <div class="col-lg-4" >
          <div class="card mb-4 shadow rounded-4 " style="margin: 30px; padding: 20px">
            <div class="card-body text-center">
              <h1 class="my-3" style="font-family: 'Caveat', cursive; font-weight:bold;">@yield("fullName")</h1>
              <p class="text-muted mb-1">@yield("major")</p>
              <p class="text-muted mb-1">@yield("univ")</p>
              
              
            </div>
          </div>
        </div>
        
        <div class="col-lg-7">
          <div class="card mb-4 shadow rounded-4  " style="margin: 30px; padding: 20px">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Name</p>
                </div>
                <div class="col-sm-8">
                  <p class="text-muted mb-0">@yield("fullName")</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">E-mail</p>
                </div>
                <div class="col-sm-8">
                  <p class="text-muted mb-0">@yield("email")</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Birthday</p>
                </div>
                <div class="col-sm-8">
                  <p class="text-muted mb-0">@yield("bday")</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Favorite Course</p>
                </div>
                <div class="col-sm-8">
                  <p class="text-muted mb-0">@yield("course")</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Skills or Hobbies</p>
                </div>
                <div class="col-sm-8">
                  <p class="text-muted mb-0">@yield("skill")</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Description</p>
                </div>
                <div class="col-sm-8">
                  <p class="text-muted mb-0">@yield("description").</p>
                </div>
              </div>

              @yield("extraContent")
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>