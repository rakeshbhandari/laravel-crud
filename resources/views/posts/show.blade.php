<x-layout>
    <section class="mt-4">
        <div class="flex justify-end ">
            <div class="flex justify-between">
                <a href="{{ route('posts.edit', $post->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:bg-red-800 focus:outline-none dark:focus:ring-blue-800">Delete
                    </button>
                </form>
            </div>
        </div>
    </section>
    <div class="max-w-6xl mx-auto mt-8 rounded-lg sm:px-6 lg:px-8 bg-slate-50 dark:bg-slate-700">
        <h1 class="text-3xl font-bold text-center text-indigo-800 dark:text-indigo-400">
            {{ $post->title }}
        </h1>
        <main class="max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20">
            <p class="p-4 mb-4 text-center text-gray-700 dark:text-white"> {{ $post->content }}</p>
        </main>
    </div>
</x-layout>