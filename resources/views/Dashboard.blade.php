@extends('layouts.app')
@section('title','Dashboard')
@section('content')
@include('components.navbar')
<div class="p-8 ml-5 pt-20 mt-10">
    <h2 class="text-[#c13b68]/40 font-bold text-4xl text-shadow-2xl">Hello, {{$username}} !</h2>
</div>
<div class="flex flex-row justify-center gap-10 p-10 transition">
    <div>
        <video autoplay muted loop playsinline class="w-64 rounded-lg shadow-lg">
            <source src="video1.mp4" type="video/mp4">
        </video>
    </div>
    <div class="w-[1px] bg-[#c13b68] h-192"></div>
    <div class="flex flex-col justify-center w-1/3">
        <h3 class="font-bold text-2xl text-[#c13b68] mb-4">YFlorist</h3>
        <p class="text-gray-800">YFlorist Admin adalah pusat kendali untuk mengelola semua aspek operasional toko bunga kami.
        Melalui halaman admin ini, tim dapat memantau pesanan pelanggan, mengelola produk bunga yang dijual, serta melihat laporan penjualan untuk memastikan kelancaran bisnis. Fitur manajemen pesanan memungkinkan admin untuk melakukan pencatatan,
        sementara manajemen produk memberi kontrol penuh atas daftar bunga yang tersedia. Selain itu, laporan penjualan memberikan wawasan mengenai performa bisnis, dan pengaturan toko memungkinkan pembaruan informasi penting. Dengan YFlorist Admin, kami dapat memberikan
        pelayanan yang lebih efisien dan memuaskan bagi setiap pelanggan.</p>

    </div>
</div>
<div class="flex flex-row justify-center">
    <a href="{{route('Pengelolaan')}}">
        <h2 class="text-[#c13b68] font-bold text-2xl text-shadow-2xl hover:text-[#c13b68]/40">Stok Bunga</h2>
    </a>
</div>
<div class="flex flex-row justify-center p-5">
    <div class="w-1/3 bg-white rounded-xl shadow-2xl overflow-hidden m-4 hover:scale-105 transition ">
        <div class="p-4">
            <h2 class="text-xl font-semibold text-[#c13b68]">Mawar Merah</h2>
        </div>
        <img src="{{ asset('bunga1.jpg') }}" alt="Mawar Merah" class="w-full h-48 object-contain">
        <div class="p-4 text-gray-700">
            <p><span class="font-semibold">Stok:</span> 25</p>
            <p><span class="font-semibold">Jumlah Pembeli:</span> 123</p>
        </div>
    </div>
    <div class="w-1/3 bg-white rounded-xl shadow-2xl overflow-hidden m-4 hover:scale-105 transition">
        <div class="p-4">
            <h2 class="text-xl font-semibold text-[#c13b68]">Mawar Merah</h2>
        </div>
        <img src="{{ asset('bunga2.jpg') }}" alt="Mawar Merah" class="w-full h-48 object-contain">
        <div class="p-4 text-gray-700">
            <p><span class="font-semibold">Stok:</span> 25</p>
            <p><span class="font-semibold">Jumlah Pembeli:</span> 123</p>
        </div>
    </div>
    <div class="w-1/3 bg-white rounded-xl shadow-2xl overflow-hidden m-4  hover:scale-105 transition">
        <div class="p-4">
            <h2 class="text-xl font-semibold text-[#c13b68]">Mawar Merah</h2>
        </div>
        <img src="{{ asset('bunga3.jpg') }}" alt="Mawar Merah" class="w-full h-48 object-contain">
        <div class="p-4 text-gray-700">
            <p><span class="font-semibold">Stok:</span> 25</p>
            <p><span class="font-semibold">Jumlah Pembeli:</span> 123</p>
        </div>
    </div>
</div>
<div class="flex flex-row justify-center">
    <a href="{{route('Pengelolaan')}}">
        <h2 class="text-[#c13b68] font-bold text-xl text-shadow-2xl hover:text-[#c13b68]/40">Selengkapnya -></h2>
    </a>
</div>
@include('components.footer')
@endsection
