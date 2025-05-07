@extends('layouts.app')
@section('tittle','Login')
@section('content')
<div class='flex items-center min-h-screen justify-center gap-10'>
    <div class=" bg-[#c13b68]/50 p-10 rounded-lg shadow-4xl">
        <h2 class="text-center font-bold text-2xl text-[#c13b68] mb-5">Login</h2>
        <form class="flex flex-col" method="POST" action="{{route('cekLogin')}}">
            @csrf
            <label class="text-[#c13b68]  ">Username</label>
            <input type="text" name="username" class="bg-[#c13b68]/50 mb-5 rounded-xl hover:bg-[#c13b68] focus:outline-none focus:bg-[#c13b68] p-1 text-white">
            <label class="text-[#c13b68]  ">Password</label>
            <input type="text" name="password" class="bg-[#c13b68]/50 mb-8 rounded-xl hover:bg-[#c13b68] focus:outline-none focus:bg-[#c13b68] p-1 text-white">
            <button type="submit" class="mx-auto w-1/2 bg-white text-[#c13b68] rounded-2xl hover:bg-[#c13b68]/40 transition hover:text-white">Masuk</button>
        </form>
    </div>
</div>
@endsection
