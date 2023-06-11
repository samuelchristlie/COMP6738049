@extends('template')

@section('content')
    <div class="flex justify-center text-3xl font-semibold mb-5">My Profiles</div>
        <div class="user-profile">
            <div class="edit-account">
                <div class="card-body">
                    <div class="flex justify-center font-semibold container">
                        <div class="mb-3">
                          <label for="inputFullName" class="form-label">Full Name</label>
                          <input type="text"  placeholder="Type here" class="input input-bordered w-full max-w-xs" id="inputFullName">
                        </div>
                      </div>
                    <div class="flex justify-center font-semibold container">
                      <div class="mb-3">
                        <label for="inputUsername" class="form-label">Username</label>
                        <input type="text"  placeholder="Type here" class="input input-bordered w-full max-w-xs" id="inputUsername">
                      </div>
                    </div>
                    <div class="flex justify-center font-semibold container">
                        <div class="mb-3">
                          <label for="inputEmail" class="form-label">Email</label>
                          <input type="text"  placeholder="Type here" class="input input-bordered w-full max-w-xs" id="inputEmail">
                        </div>
                    </div>

                    <!-- Change Account button -->
                    <div class="flex justify-center container">
                        <button type="submit" class="btn-lg btn normal-case w-64 rounded bg-daisy text-black">Change Account</button>
                    </div>
                </div>
            </div>
        </div>
@endsection
