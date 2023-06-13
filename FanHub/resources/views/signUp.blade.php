@extends('template')

<<<<<<< HEAD
@section('content')    
    <div class="flex justify-center text-3xl font-semibold">
=======
@section('content')
    <div class="flex justify-center text-3xl font-semibold mb-5">
>>>>>>> origin/delvina
        Account Sign Up
    </div>

    <form class="form-control font-semibold text-2xl card">
      <div class="card-body">
        <div class="flex flex-col justify-center items-center">
          <div class="mb-2">
            <div class="mb-2">
              <label for="inputFirstName" class="form-label">First Name</label>
            </div>
            <div>
              <input type="text" placeholder="Type here" class="input input-bordered w-96 max-w-xs" id="inputFirstName">
            </div>
          </div>
          
          <div class="mb-2">
            <div class="mb-2">
              <label for="inputLastName" class="form-label">Last Name</label>
            </div>
            <div>
              <input type="text"  placeholder="Type here" class="input input-bordered w-96 max-w-xs" id="inputLastName">
            </div>
          </div>
<<<<<<< HEAD
      
      
          <div class="mb-2">
            <div class="mb-2">
              <label for="inputUserName" class="form-label">Username</label>
            </div>
            <div>
              <input type="text"  placeholder="Type here" class="input input-bordered w-96 max-w-xs" id="inputUsername">
            </div>
=======
      </div>
      <div class="flex justify-center container">
          <div class="mb-3">
            <label for="inputUserName" class="form-label">Username</label>
            <input type="text"  placeholder="Type here" class="input input-bordered w-full max-w-xs" id="inputUsername">
>>>>>>> origin/delvina
          </div>

          <div class="mb-2">
            <div class="mb-2">
              <label for="inputAddress" class="form-label">Address</label>
            </div>
            <div>
              <input type="text"  placeholder="Type here" class="input input-bordered w-96 max-w-xs" id="inputAddress">
            </div>
          </div>
      
      
          <div class="mb-2">
            <div class="mb-2">
              <label for="inputEmail" class="form-label">Email</label>
            </div>
            <div>
              <input type="email" placeholder="Type here" class="input input-bordered w-96 max-w-xs" id="inputEmail">
            </div>
          </div>
<<<<<<< HEAD
      
      
          <div class="mb-2">
            <div class="mb-2">
              <label for="inputPassword" class="form-label">Password</label>
            </div>
            <div>
              <input type="password"  placeholder="Type here" class="input input-bordered w-96 max-w-xs" id="inputPassword">
            </div>
          </div>
          
          <div class="mt-2">
            <button class="btn w-80 text-[#FFFFFF]" style="background-color: #AE466F"> Sign Up</button>
          </div>
          </div>
        </div>

=======
      </div>

      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="remember" name="remember" checked />
            <label class="form-check-label text-sm" for="remember-me"> Remember me </label>
          </div>
        </div>
>>>>>>> origin/delvina
      </div>

      <!-- Sign In button -->
      <div class="flex justify-center container">
        <button type="submit" class="btn-lg btn normal-case w-64 rounded bg-daisy text-black">Sign In</button>
      </div>
    </div>

    </form>
@endsection
