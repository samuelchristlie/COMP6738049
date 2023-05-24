<html data-theme="light">
    <head>
        <meta charset="UTF-8" />
        <title>FanHub!</title>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <!-- <meta name="description" content="" />
  <link rel="icon" href="favicon.png"> -->

        <link
            href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css"
            rel="stylesheet"
            type="text/css"
        />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="navbar bg-base-100 px-16">
            <div class="flex-1">
                <a href="" class="btn btn-ghost"
                    ><img
                        src="/images/icons/LogoFanHub 1.png"
                        class="h-12"
                        alt="Logo"
                /></a>
            </div>

            <div class="flex-none gap-2">
                <div class="form-control">
                    <input
                        type="text"
                        placeholder="Search"
                        class="input input-bordered"
                    />
                </div>
                <button class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                            />
                        </svg>
                        <span
                            class="badge badge-xs badge-primary indicator-item"
                        ></span>
                    </div>
                </button>
                <div class="dropdown dropdown-end">
                    <div class="avatar placeholder">
                        <div
                            class="bg-neutral-focus text-neutral-content rounded-full w-8"
                        >
                            <span>M</span>
                        </div>
                    </div>
                    <ul
                        tabindex="0"
                        class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52"
                    >
                        <li>
                            <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </body>
</html>
