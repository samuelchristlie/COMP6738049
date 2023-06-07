@extends('template')

@section('content')    
    <div class="flex justify-center text-3xl font-semibold mb-5">
        Account Sign Up
    </div>

    <form class="form-control font-semibold text-2xl card">
      <div class="card-body">
        <div class="flex justify-center container">
          <div class="mb-3">
            <label for="inputFirstName" class="form-label">First Name</label>
            <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" id="inputFirstName">
          </div>
      </div>
      <div class="flex justify-center container">
          <div class="mb-3">
            <label for="inputLastName" class="form-label">Last Name</label>
            <input type="text"  placeholder="Type here" class="input input-bordered w-full max-w-xs" id="inputLastName">
          </div>
      </div>
      <div class="flex justify-center container">
          <div class="mb-3">
            <label for="inputUserName" class="form-label">Username</label>
            <input type="text"  placeholder="Type here" class="input input-bordered w-full max-w-xs" id="inputUserame">
          </div>
      </div>
      <div class="flex justify-center container">
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" placeholder="Type here" class="input input-bordered w-full max-w-xs" id="inputEmail">
          </div>
      </div>
      <div class="flex justify-center container">
          <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password"  placeholder="Type here" class="input input-bordered w-full max-w-xs" id="inputPassword">
          </div>
      </div>
      </div>
        
    </form>
@endsection