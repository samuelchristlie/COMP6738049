@extends('template')

@section('content')    
    <div class="d-flex justify-content-center fs-2 fw-semibold p-3">
        Account Sign Up
    </div>

    <form class="fw-semibold">
        <div class="d-flex flex-column justify-content-center container-fluid col-5">
            <div class="mb-3">
              <label for="inputFirstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="inputFirstName">
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center container-fluid col-5">
            <div class="mb-3">
              <label for="inputLastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="inputLastName">
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center container-fluid col-5">
            <div class="mb-3">
              <label for="inputUserName" class="form-label">Username</label>
              <input type="text" class="form-control" id="inputUserName">
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center container-fluid col-5">
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="Email" class="form-control" id="inputEmail">
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center container-fluid col-5">
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword">
            </div>
        </div>
    </form>

    <div class="d-flex justify-content-center">
        <button class="btn text-light" type="button"style="--bs-btn-color: black;">Sign Up</button>
    </div>
@endsection