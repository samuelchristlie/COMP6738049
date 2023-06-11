@extends('template')

@section('content')
    <div class="flex justify-center text-3xl font-semibold mb-5">
        Account Login
    </div>

    <form class="form-control font-semibold text-2xl card">
        <div class="card-body">
            <div class="flex justify-center container">
                <div class="mb-3">
                    <label for="inputFirstName" class="form-label">Email/Username</label>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" id="inputPassword">
                </div>
            </div>
            <div class="flex justify-center container">
                <div class="mb-3">
                    <label for="inputFirstName" class="form-label">Password</label>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" id="inputPassword">
                </div>
            </div>

            <!-- Login button -->
            <div class="flex justify-center container">
                <button type="submit" class="btn-lg btn normal-case w-64 rounded bg-daisy text-black">Login</button>
            </div>
        </div>
    </form>
@endsection
