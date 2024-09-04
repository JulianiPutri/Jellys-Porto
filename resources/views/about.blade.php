<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    @foreach($jellies as $jelly)
    <div class="flex flex-col items-center pb-10">
        <div class="w-80 h-80 md:w-64 md:h-64 lg:w-96 lg:h-96">
    
            <img src="{{ $jelly->profile }}" alt="Profile Image" class="w-full h-full object-cover rounded-full">
        </div>
        <h3 class="text-3xl font-bold py-4">{{ $jelly->name }}</h3>
        <p class="text-lg font-semibold py-2">{{ \Carbon\Carbon::parse($jelly->date_of_birth)->format('F j, Y') }}</p>
        <p class="text-lg font-semibold py-2"> {{ \Carbon\Carbon::parse($jelly->date_of_birth)->age }} years old</p>
        <a href="https://drive.google.com/file/d/1oVRXYjzfmJd0dKQskHQYTKZ32PkRg2Fm/view?usp=sharing" class=" text-orange-500 hover:underlin text-lg font-semibold py-2">Curriculum Vitae &raquo</a>
        <a href="https://github.com/JulianiPutri" class=" text-orange-500 hover:underline text-lg font-semibold py-2">Git Hub &raquo</a>
        <a href="https://www.linkedin.com/in/juliani-putri-0734431a2/" class=" text-orange-500 hover:underline text-lg font-semibold py-2">LinkedIn &raquo</a>
        <a href="https://www.instagram.com/jjulianiputri/" class=" text-orange-500 hover:underline text-lg font-semibold py-2">Instagram &raquo</a>
    </div>
    @endforeach
</x-layout>
