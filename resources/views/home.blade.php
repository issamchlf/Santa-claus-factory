@extends('layouts.app')
@section('content')
<div class="">
    <p class="text-center text-4xl font-holiday font-sans italic text-gray-100 pt-4">Welcome to our Factory...</p>
    <div class="flex flex-wrap items-center justify-center gap-24 pt-7 pb-8 h-full">
        <a href="">
            <div>
                <button class="bg-white p-4 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500">
                 <div class="font-bold text-3xl">
                    Elves
                    <a href="{{route('elve')}}">
                        <img class="pl-8 pt-2 h-[12.8rem] w-[15rem]" src="image/Gitanillo.png" alt=""/>
                    </a>
                 </div>
                </button>
                <div>
                 <table class="table-fixed border-collapse border border-slate-500">
                    <thead>
                      <tr>
                        <caption class="caption-top">Toys</caption>
                      </tr>
                      <tr>
                        <th class="border border-slate-600">Age</th>
                        <th class="border border-slate-600">Nº</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border border-slate-700">0-3 Y</td>
                        <td class="border border-slate-700">-</td>
                      </tr>
                      <tr>
                        <td class="border border-slate-700">3-7 Y</td>
                        <td class="border border-slate-700">-</td>
                      </tr>
                      <tr>
                        <td class="border border-slate-700">7-12 Y</td>
                        <td class="border border-slate-700">-</td>
                      </tr>
                      <tr>
                        <td class="border border-slate-700">12-16 Y</td>
                        <td class="border border-slate-700">-</td>
                      </tr>
                      <tr>
                        <td class="border border-slate-700">16-18 Y</td>
                        <td class="border border-slate-700">-</td>
                      </tr>
                      <tr>
                        <td class="border border-slate-700">+18 Y</td>
                        <td class="border border-slate-700">-</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </a>
        <div class="border-r-2 h-[14rem]">
            ‎
        </div>
        <a href="">
            <div>
                <button class="flex justify-center bg-white p-6 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500 h-[17rem] w-[18rem]">
                 <div class="font-bold text-3xl">
                    Santa Claus
                    <a href="{{route('santa')}}">
                     <img class="pl-3 h-[13rem] w-[13rem]" src="image/GitanoSupremo.png" alt="" />    
                    </a>  
                 </div>
                </button>
                <div>
                 <table class="table-fixed border-collapse border border-slate-500">
                    <thead>
                      <tr>
                        <caption class="caption-top">Kids</caption>
                      </tr>
                      <tr>
                        <th class="border border-slate-600">Kids</th>
                        <th class="border border-slate-600">Nº</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border border-slate-700">Girls</td>
                        <td class="border border-slate-700">-</td>
                      </tr>
                      <tr>
                        <td class="border border-slate-700">Boys</td>
                        <td class="border border-slate-700">-</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>     
        </a>
    </div>
</div>
@endsection
