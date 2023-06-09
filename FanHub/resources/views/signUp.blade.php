@extends('template')

@section('content')    
    <div class="flex justify-center text-3xl font-semibold">
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
      
      
          <div class="mb-2">
            <div class="mb-2">
              <label for="inputUserName" class="form-label">Username</label>
            </div>
            <div>
              <input type="text"  placeholder="Type here" class="input input-bordered w-96 max-w-xs" id="inputUsername">
            </div>
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

      </div>
        
    </form>
@endsection