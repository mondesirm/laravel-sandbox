<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-wrap">
                        @foreach ($posts as $post)
                            <div class="flex flex-col justify-between p-4 text-justify">
                                <b>{{ $post->title }}</b>
                                <div>{{ Str::limit($post->content, 50, $end='...') }}</div>
                            </div>
                        @endforeach
                    </div>
                    <hr>{{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
