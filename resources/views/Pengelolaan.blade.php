@extends('layouts.app')
@section('title','Pengelolaan')
@section('content')
@include('components.navbar')
<div class="flex flex-row justify-center">
    <h2 class="text-[#c13b68]/40 font-bold text-4xl text-shadow-2xl mt-20 p-6">Stok Bunga</h2>
</div>
<div class="flex flex-wrap justify-center gap-6 p-6 ">
    @foreach($bungas as $bunga)
        <div class="w-72 bg-white rounded-xl shadow-lg overflow-hidden p-5 hover:scale-105">
            <img src="{{ asset($bunga['gambar']) }}" alt="{{ $bunga['nama'] }}" class="w-full h-48 object-contain">
            <div class="p-4 text-gray-800">
                <h2 class="text-xl font-bold text-[#c13b68]">{{ $bunga['nama'] }}</h2>
                <p><span class="font-semibold">Stok:</span> {{ $bunga['stok'] }}<p>
                <p><span class="font-semibold">Jumlah Pembeli:</span> {{ $bunga['jumlah_pembeli'] }}</p>

            </div>
        </div>
    @endforeach
</div>
@include('components.footer')
@endsection
