<x-layout>
    
    <x-slot:title>{{ $title }}</x-slot>

        <article class="py-8 w-100 border-orange-300 ">
            <h2 class="mb-1 text-3xl tracking-tight font-bold  ">{{ $post->postTitle }}</h2>
            <div class="w-full md:w-2/3">
                <img src="{{ $post->imgLink }}" alt="" class=" border-1 shadow rounded-md box-border">
                <a href="{{ $post->projectLink }}"  target="_blank" class="font-medium text-orange-500 hover:underline"> See Project &raquo; </a>
            </div>
            <p class="my-4 font-light">
                {{ $post->description }}
            </p>
            <a href="/posts" class="font-medium text-orange-500 hover:underline">&laquo; Back to portofolio </a>
        </article>

</x-layout>