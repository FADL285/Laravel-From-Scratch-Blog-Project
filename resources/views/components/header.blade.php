@props(['categories'])

<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <h2 class="inline-flex mt-2">
        By Lary Laracore
        <img src="/images/lary-head.svg" alt="Head of Lary the mascot"/>
    </h2>

    <p class="text-sm mt-14">
        Another year. Another update. We're refreshing the popular Laravel series
        with new content. I'm going to keep you guys up to speed with what's going
        on!
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
        <div x-data="{ open: false }" class="relative inline-block text-left">
            <div>
                <button @click="open = !open" @click.outside="open = false" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-semibold text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500" id="category-button" aria-expanded="true" aria-haspopup="true">
                    Category

                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <div x-show="open" style="display: none;" class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="category-button" tabindex="-1">
                <div class="py-1" role="none">
                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                    <a href="#" class="text-gray-700 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                    <a href="#" class="text-gray-700 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                    <a href="#" class="text-gray-700 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                </div>
            </div>
        </div>

        <!-- Other Filters -->
        <div x-data="{ open: false }" class="relative inline-block text-left">
            <div>
                <button @click="open = !open" @click.outside="open = false" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-semibold text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500" id="category-button" aria-expanded="true" aria-haspopup="true">
                    Other Filters

                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <div x-show="open" style="display: none;" class="origin-center absolute inset-x-auto mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="category-button" tabindex="-1">
                <div class="py-1" role="none">
                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                    <a href="#" class="text-gray-700 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                    <a href="#" class="text-gray-700 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                    <a href="#" class="text-gray-700 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                </div>
            </div>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center">
            <form method="GET" action="#">
                <input type="search" name="search" placeholder="Find something..." class="rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-semibold text-gray-700 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm outline-none">
            </form>
        </div>
    </div>
</header>
