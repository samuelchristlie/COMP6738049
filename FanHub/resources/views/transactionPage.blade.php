@extends('template')


@section('content')
<div class="mx-14">
    <div class="container text-2xl font-semibold mb-4">
        Detail Transaction
    </div>

    <!-- loop mulai dari sini -->
    
    <div class="flex border rounded py-5" style="background-color: rgba(175, 70, 112, 0.1)">
        <div class="w-1/3 flex justify-center">
            <img src="/images/image 13.png" class="w-auto h-auto" alt="merch" >
        </div>
    
        <div class="w-1/3">
            <div class="container px-0 flex-column items-start justify-start" style="height: 8rem">
                <div class="flex mb-auto items-center">
                    <div class="font-semibold text-slate-600">
                        21 April 2023 
                    </div>
    
                    <div class="px-3">
                        <button class="btn btn-xs btn-disabled text-white" style="background-color: #AF4670">done</button>
                    </div>
    
                    <div class="font-semibold text-slate-600">
                        INV/20230421/BTS/457391833                 
                    </div>
                </div>
                <div class="text-3xl py-2 font-bold text-light">
                    BTS Lightstick
                </div>
                
                <div class="text-lg">
                    3 piece x Rp 450.000
                </div>
            </div>
        </div>
    
        <div class="w-1/3 flex items-center justify-center">
            <div class="border-l-4 border-[#AE466F]">
                <div class="container flex-column items-start ">
                    <div class="ms-3">
                        Total Expenses
                    </div>
                    <div class="m-3">
                        Rp450.000
                    </div>
                    <div class="ms-3 mt-2">
                        <button class="btn btn-md text-white" style="background-color: #AF4670">Buy Again</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection