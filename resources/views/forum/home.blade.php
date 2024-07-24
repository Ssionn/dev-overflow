<x-app-layout>
    <div class="px-4 text-white grid grid-cols-1 lg:grid-cols-12 gap-5 md:px-0">
        <!-- Left Column -->
        <div class="lg:col-span-3 space-y-4 lg:space-y-8">
            <div class="bg-[#2E3234] rounded-lg p-4">
                <div>
                    <span class="text-sm font-semibold lg:text-md">
                        DevOverflow is a project I randomly thought of, It's heavily inspired by
                    </span>
                    <a href="https://dev.to" target="_blank" class="text-transparent bg-gradient-to-r from-purple-500 via-indigo-500 to-pink-600 bg-clip-text bg-300% animate-gradient">
                        dev.to
                    </a>
                </div>
                <div class="mt-2 text-xs text-gray-400 lg:mt-4 lg:text-sm">
                    <span>For more information, visit this project on github</span>
                </div>
                <div class="w-full mt-2">
                    <a href="https://github.com/ssionn/dev-overflow" target="_blank" class="block w-full">
                        <button class="w-full px-4 py-2 text-sm bg-orange-500 rounded hover:bg-orange-600 transition duration-300 ease-in-out lg:text-base">
                            Visit Project
                        </button>
                    </a>
                </div>
            </div>

            <nav class="bg-[#2E3234] rounded-lg p-1">
                <ul class="text-white space-y-1 lg:space-y-2">
                    <li>
                        <a href="#" class="flex items-center px-4 py-2 text-sm rounded-md hover:bg-gray-500 transition duration-300 ease-in-out lg:text-base">
                            <span class="mr-2">🏠</span> Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-2 text-sm rounded-md hover:bg-gray-500 transition duration-300 ease-in-out lg:text-base">
                            <span class="mr-2">🧵</span> Threads
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-2 text-sm rounded-md hover:bg-gray-500 transition duration-300 ease-in-out lg:text-base">
                            <span class="mr-2">👤</span> Users
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-2 text-sm rounded-md hover:bg-gray-500 transition duration-300 ease-in-out lg:text-base">
                            <span class="mr-2">🏷️</span> Tags
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="bg-[#2E3234] rounded-lg p-4">
                <h2 class="mb-2 text-lg text-white lg:mb-4 lg:text-xl">Tags</h2>
                <ul class="space-y-2">
                    @foreach(['PHP', 'Laravel', 'Vue.js', 'Tailwind', 'MySQL'] as $tag)
                        <li>
                            <a href="#" class="flex items-center text-sm text-gray-300 lg:text-base hover:text-white transition duration-300 ease-in-out">
                                <span class="mr-2">#</span>
                                {{ $tag }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Middle Column -->
        <div class="lg:col-span-6">
            <div class="mb-4 rounded-lg bg-gradient-to-r from-purple-600 to-pink-600 lg:mb-5">
                <div class="flex p-2 lg:p-4 space-x-4">
                    <button class="text-sm font-bold text-white lg:text-base">
                        <span>
                            Latest
                        </span>
                    </button>

                    <button class="text-sm text-gray-300 hover:text-white transition duration-300 ease-in-out lg:text-base">
                        <span>
                            Top
                        </span>
                    </button>
                </div>
            </div>

            <div class="bg-[#2E3234] rounded-lg p-4 lg:p-6">
                <div class="space-y-4">
                    <div class="pb-4 border-b border-gray-700">
                        <h3 class="mb-1 text-lg text-white lg:mb-2 lg:text-xl">Sample Post Title</h3>
                        <p class="text-sm text-gray-300 lg:text-base">This is a sample post content. Replace this with your actual post data.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="lg:col-span-3 space-y-4 lg:space-y-8">
            <div class="bg-[#2E3234] rounded-lg p-4">
                <h2 class="mb-2 text-lg text-white lg:mb-4 lg:text-xl">Latest Post</h2>
                <div class="text-gray-300">
                    <h3 class="mb-1 text-base text-white lg:mb-2 lg:text-lg">Latest Post Title</h3>
                    <p class="text-sm lg:text-base">A brief excerpt of the latest post goes here...</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
