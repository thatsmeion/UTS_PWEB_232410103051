<nav class="fixed top-0 left-0 z-50 w-full bg-[#d65d8e]/50 px-10 py-2 flex justify-between items-center rounded-l shadow-xl shadow-[#c13b68]/20 ">
    <a href="" class="flex flex-row text-white text-xl font-bold w-1/3">
        <img src={{asset('logo.png')}} class="w-12 h-auto">
        <h2 class="mt-2 text-white font-bold">YFlorist</h2>
    </a>
    <div class="w-1/3">
        <ul class="flex flex-row space-x-6">
            <li><a href="{{ route('Dashboard')}}" class="text-white hover:text-[#c13b68]">Dashboard</a></li>
            <li><a href="{{route('Pengelolaan')}}" class="text-white hover:text-[#c13b68] focus:bg-[#c13b68]">Pengelolaan</a></li>
            <li><a href="{{ route('Profile', ['username' => request()->query('username')]) }}" class="text-white hover:text-[#c13b68]">Profile</a></li>
        </ul>
    </div>
</nav>
