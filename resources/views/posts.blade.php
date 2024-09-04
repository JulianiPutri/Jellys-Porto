<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    @foreach ($posts as $post)
        <article class="py-8 w-100 border-orange-300">
            <div class="box-border shadow max-w-screen rounded-md p-5 bg-orange-300">
                <a href="/posts/{{ $post['id'] }}">
                    <h2 class="mb-1 text-3xl tracking-tight font-bold text-orange-800">{{ $post['postTitle'] }}</h2>
                </a>
                <div class="w-full md:w-2/5">
                    <img src="{{ $post['imgLink'] }}" alt="Post Image" class="shadow border-1 rounded-md box-border">
                </div>
                <p class="my-4 font-light">
                    {{ Str::limit($post['description'], 100) }}
                </p>
                <a href="/posts/{{ $post['id'] }}" class="font-medium text-orange-500 hover:underline">Read more &raquo;</a>
            </div>
        </article>
    @endforeach

</x-layout>
