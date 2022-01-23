<x-layout>
    <x-slot name="title">
        MyBBS
    </x-slot>
    <h1>MyBBS</h1>
        <ul>
            @forelse ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post) }}">
                        {{ $post->title }}
                    </a>
                </li>
            @empty
                <li>No Posts yet!</li>
            @endforelse
        </ul>
</x-layout>
