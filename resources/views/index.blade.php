<x-layout>
    <x-slot name="title">
        MyBBS
    </x-slot>
    <h1>MyBBS</h1>
        <ul>
            @forelse ($posts as $index => $post)
                <li>
                    <a href="{{ route('posts.show', ['id' => $index]) }}">
                        {{ $post }}
                    </a>
                </li>
            @empty
                <li>No Posts yet!</li>
            @endforelse
        </ul>
</x-layout>
