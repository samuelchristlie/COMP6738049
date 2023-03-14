<?php
$theme = session("theme")
?>

<!DOCTYPE html>
<html lang="en" data-theme="@if(session()->has('theme')){{$theme}}@else{{'dark'}}@endif">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    
    
    
  </head>
  <body>
    
    
    <div class="card-body h-screen w-screen">
      <div class="card-title ">
        <h1 class="flex-1">Chat!</h1>
        <form action="logout" method="post">
          @csrf
          <button class="btn flex-none btn-error">Log Out</button>
        </form>
      </div>
      
      
      
      <iframe src="history/" class="card-body w-full max-h-max rounded-3xl p-0">
      </iframe>
      
      
      
      <iframe src="send/" class="w-full h-12 rounded-3xl p-0">
      </iframe>
      
      
    </div>
    
    
  </body>
</html>