<x-layout>
    <x-header>Post Index page</x-header>
    @auth
        <section>
            <div class="flex justify-end ">
                <a href="{{ route('posts.create') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</a>
            </div>
        </section>
    @endauth

    <h1>Posts</h1>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach($posts as $post)
            <a href="/posts/{{ $post->id }}"
                class="block max-w-sm p-6 space-y-10 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">{{ $post->content }}</p>
            </a>


        @endforeach
    </div>
</x-layout>
