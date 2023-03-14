<?php
  $theme = session("theme")
?>

<!DOCTYPE html>
<html lang="en" data-theme="@if(session()->has('theme')){{$theme}}@else{{'dark'}}@endif">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    
    
    
  </head>
  <body>
    <form class="form-control w-full" action="send" method="post">
      @csrf
      <div class="input-group w-full bg-base-200">
        <input type="text" placeholder="Send a Message..." name="msg" class="input input-ghost w-full" />
        <button class="btn btn-primary">
        Send
        </button>
        <!-- <input type="submit" value="Send" class="btn btn-primary"/> -->
      </div>
    </form>
    
    
    
    
    
  </body>
</html>