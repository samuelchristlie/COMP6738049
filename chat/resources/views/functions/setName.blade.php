<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
    
    <title>Chat!</title>
    
    
    
    
  </head>
  <body>
    <div class="hero min-h-screen bg-base-200">
      <div class="hero-content text-center">
        <div class="tooltip" data-tip="Username and password are optional but helps to distinguish users!">
          <div class="card bg-base-100 shadow-xl">
            
            <div class="card-body">
              <h2 class="card-title">Chat!</h2>
              
              <form action="." method="post">
                <div class="form-control">
                  @csrf
                  
                  <label class="label">
                    <span class="label-text">User</span>
                  </label>
                  <div class="input-group">
                    <input type="text" placeholder="Anonymous" name="user" class="input input-bordered w-full" />
                  </div>
                  
                  <label class="label">
                    <span class="label-text">Password</span>
                  </label>
                  <div class="input-group">
                    <input type="password" placeholder="Password" name="pass" class="input input-bordered w-full" />
                  </div>
                  
                  <label class="label">
                    <span class="label-text">Theme</span>
                  </label>
                  <div class="form-control">
                    <select class="select select-bordered w-full" name="theme" data-choose-theme>
                      <option value="dark">Dark</option>
                      <option value="corporate">Corporate</option>
                      <option value="synthwave">Synthwave</option>
                      <option value="halloween">Halloween</option>
                      <option value="forest">Forest</option>
                      <option value="wireframe">Wireframe</option>
                      <option value="black">Black</option>
                      <option value="dracula">Dracula</option>
                      <option value="business">Business</option>
                      <option value="night">night</option>
                    </select>
                  </div>
                  
                  <button class="btn mt-5 bg-primary">Start</button>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    
  </body>
</html>