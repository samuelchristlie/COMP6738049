<div class="navbar bg-base-100">
	
	<div class="navbar-start ">
		<a href="/" class="btn btn-ghost normal-case text-xl">
			<img class="h-full" src="images/logo.png"/>
		</a>
	</div>
	<div class="navbar-end">
		<div class="form-control hidden md:flex mx-2">
			<input type="text" placeholder="Search" class="input input-bordered" />
		</div>
		
		<button class="btn btn-ghost btn-circle">
		<div class="indicator text-primary">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
				<path fill-rule="evenodd" d="M4.804 21.644A6.707 6.707 0 006 21.75a6.721 6.721 0 003.583-1.029c.774.182 1.584.279 2.417.279 5.322 0 9.75-3.97 9.75-9 0-5.03-4.428-9-9.75-9s-9.75 3.97-9.75 9c0 2.409 1.025 4.587 2.674 6.192.232.226.277.428.254.543a3.73 3.73 0 01-.814 1.686.75.75 0 00.44 1.223zM8.25 10.875a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25zM10.875 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875-1.125a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25z" clip-rule="evenodd" />
			</svg>
			
			
		</div>
		</button>
		
		<button class="btn btn-ghost btn-circle">
		<div class="indicator text-primary">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
				<path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd" />
			</svg>
			
			
		</div>
		</button>
		
		<div class="dropdown dropdown-end">
			<label tabindex="0" class="btn btn-ghost btn-circle avatar">
				<div class="w-10 rounded-full">
					<img src="{{ $user->profilePicture }}" />
				</div>
			</label>
			<ul tabindex="0" class="mt-3 p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
				<li>
					<a href = "{{ url("@".$user->username) }}">
						Profile
					</a>
				</li>
				<li>
					<a href="logout">
						Logout
					</a>
				</li>
			</ul>
		</div>
		
	</div>
</div>
<div class="" style="border: solid #AE466F 2px;">
	
</div>