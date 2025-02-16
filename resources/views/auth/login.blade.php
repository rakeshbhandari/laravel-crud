<x-layout>
    <x-header>Login </x-header>
    <div class="max-w-2xl p-4 mx-auto rounded-2xl bg-cyan-300 dark:bg-stone-600">


        <form action="{{ route('login.store') }}" method="POST">
            @csrf

            <div class="mb-6">
                <label for="default-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="text" id="default-input" name="email"
                    class=" @error('title') border-red-800 @enderror bg-gray-50 border border-zinc-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('email')

                    <span class="text-sm text-red-900">{{ $message }}</span>

                @enderror
            </div>
            <div class="mb-6">
                <label for="default-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" id="default-input" name="password"
                    class=" @error('title') border-red-800 @enderror bg-gray-50 border border-zinc-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('password')

                    <span class="text-sm text-red-900">{{ $message }}</span>

                @enderror
            </div>

            <div class="mb-6">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Log In</button>

            </div>
        </form>

    </div>
</x-layout>
