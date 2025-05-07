@extends('layouts.app')
@section('title','Profile')
@section('content')
@include('components.navbar')
<div class="flex flex-col justify-center items-center mt-10 p-8 ml-5 pt-20">
    <h2 class="text-[#c13b68] font-bold text-4xl text-shadow-2xl mb-5">Profile</h2>
    <div class="w-40 bg-[#c13b68] h-[1px]"></div>
    <img src="{{asset('profilepict.jpg')}}" class="w-32 h-32 mt-5 rounded-full">
</div>
<div class="flex flex-row justify-center rounded-lg mb-10">
    <div class="flex flex-col items-center bg-[#c13b68]/20 text-white p-6 rounded-lg shadow-2xl">
        <h2 class="text-2xl font-bold">{{$username}}</h2>
        <h2 class="text-l font-semibold">Admin</h2>
        <div class="flex flex-col md:flex-row items-center justify-center gap-4 text-sm md:text-base">
          <h2>Jl. Kalimantan 16, Kabupaten Jember</h2>
          <span class="hidden md:inline">|</span>
          <h2>0812-3456-7890</h2>
        </div>
        <h2 class="text-sm italic">{{$username}}1357@gmail.com</h2>
    </div>
</div>
<div class="flex flex-row justify-center item-center">
    <a href="{{route("login")}}" class="bg-red-900 p-4 text-bold text-white rounded-3xl hover:bg-red-500 transition">Logout</a>
</div>
@include('components.footer')
@endsection
