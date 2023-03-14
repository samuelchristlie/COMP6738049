<?php
  $theme = session("theme");

  use Illuminate\Support\Facades\DB;

  $rows = DB::select('select * from msgs order by id desc limit 20');

  $hash = session("hash");
?>

<!DOCTYPE html>
<html lang="en" data-theme="@if(session()->has('theme')){{$theme}}@else{{'dark'}}@endif">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <meta http-equiv="refresh" content="5" >
    
    
    
    
  </head>
  <body>
    
    <div class="bg-base-200 flex flex-col-reverse">
      @foreach ($rows as $row)
        @if($row->hash == $hash)
          <div class="chat chat-end">
        @else
          <div class="chat chat-start">
        @endif
        
        <div class="chat-header">{{$row->user}}
        @if(!empty($row->trip))
          <time class="text-xs opacity-50">{{$row->trip}}</time>
        @endif
          </div><div class="chat-bubble @if($row->hash == $hash) chat-bubble-info @endif">{{$row->msg}}</div></div>
      @endforeach

    
    
    
    
    
    <script>
    window.scrollTo(0, document.body.scrollHeight);
    </script>
  </body>
</html>