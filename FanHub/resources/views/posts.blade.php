@extends('template')

@section('content')

    <div class="mx-14">
        <div class="row">
            <div class="container-md rounded font-bold" style="background-color: rgba(175, 70, 112, 0.25) ;color: rgba(0, 0, 0, 0.35)">
                <div class="card-body">
                    <div class="flex justify-between items-center mx-20">
                        <div class="text-xl" style="">
                            <a href="#">FanWall</a> 
                        </div>
                        <div class="text-xl">
                            <a href="#">FanArtist</a>
                        </div>
                        <div class="text-xl">
                            <a href="#">Exclusive</a>
                        </div>
                        <div class="text-xl">
                        <a href="#">Merch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="flex">
                <div class="w-1/2 flex justify-center text-xl font-semibold">
                    <div class="container-sm">
                        <div class="text-3xl p-3 flex justify-center mb-5">
                            Artist Post
                        </div>
                        {{-- loop sini --}}
                        <div class="card">
                            <div class="flex">
                                <div>
                                    <img src="/images/image 10.png" class="pe-3" alt="pp">
                                </div>
                                <div class="mt-3">
                                    <div>
                                        V
                                    </div>
                                    <div>
                                        24.5.2023 18:05
                                    </div>
                                </div>
                            </div>
                            <div class="my-5">
                                Hi, Army! Saranghae yo~
                            </div>
                        </div>
                        <div>
                            <div class="flex">
                                <div class="me-3">
                                    <img src="/images/like.png" alt="like">
                                </div>

                                <div>
                                    <img src="/images/Vector.png" class="w-auto h-auto" alt="vector">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="1-1/2 flex justify-center">
                    <div class="container-sm rounded p-10" style="background-color: rgba(175, 70, 112, 0.1)">
                        <div class="font-bold text-3xl text-center">
                            BTS
                        </div>
                        <div class="py-3">
                            <img src="/images/image 12.png" alt="tes">
                        </div>
                        <div class="font-bold text-3xl text-center">
                            3.448.445 Members
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection