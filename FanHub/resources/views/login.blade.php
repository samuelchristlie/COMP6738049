@extends('template')

<<<<<<< HEAD
@section('content')    
    <div class="flex justify-center text-3xl font-semibold">
        Account Login
    </div>

    <div class="card-body">
        <form class="form-control font-semibold text-2xl card">
            <div class="flex flex-col justify-center items-center">
                <div class="mb-2">
                <div class="mb-2">
                    <label for="inputEmail/Username" class="form-label">Email/Username</label>
                </div>
                <div>
                    <input type="text" placeholder="Type here" class="input input-bordered w-96 max-w-xs" id="inputFirstName">
                </div>
                </div>
                
                <div class="mb-2">
                <div class="mb-2">
                    <label for="inputPassword" class="form-label">Password</label>
                </div>
                <div>
                    <input type="password]"  placeholder="Type here" class="input input-bordered w-96 max-w-xs" id="inputPassword">
                </div>
            </div>
        </form>
        <div class="mt-2">
            <button class="btn w-80 text-[#FFFFFF]" style="background-color: #AE466F"> Login</button>
        </div>
        <div class="my-4">
            Or Login With
        </div>
        <div class="card">
            <div class="flex justify-between">
                <div class="container">
                    <button class="btn btn-lg btn-outline px-4"> <img src="/images/login/google.png" alt="google" class="w-10 h-10"></button>
                </div>

                <div class="container mx-12">
                    <button class="btn btn-lg btn-outline px-4"> <img src="/images/login/facebook.png" alt="fb" class="w-10 h-10"></button>
                </div>

                <div class="container">
                    <button class="btn btn-lg btn-outline px-4"> <img src="/images/login/twitter.png" alt="twitter" class="w-10 h-10"></button>
                </div>
            </div>
        </div>
    </div>
@endsection
=======
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
>>>>>>> origin/delvina
