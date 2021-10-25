<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href="{{ route('home') }}">
            <img
                src="/images/logo.svg"
                alt="Laracasts Logo"
                width="165"
                height="16"
            />
        </a>
    </div>

    <div class="mt-8 md:mt-0 flex items-center">
        @guest
            <a href="{{ route('register') }}" class="text-xs font-bold uppercase">Register</a>
            <a href="{{ route('login') }}" class="ml-3 text-xs font-bold uppercase">Login</a>
        @else
            <x-dropdown class="text-xs font-bold uppercase py-0.5">
                <x-slot name="triggerName">
                    Welcome, {{ auth()->user()->name }}
                </x-slot>

                @can('admin')
                    <x-dropdown-item
                        href="{{ route('posts.index') }}"
                        :active="request()->routeIs('posts.index')">
                        Dashboard
                    </x-dropdown-item>
                    <x-dropdown-item
                        href="{{ route('posts.create') }}"
                        :active="request()->routeIs('posts.create')">
                        New Post
                    </x-dropdown-item>
                @endcan

                <x-dropdown-item
                    href="#logout" x-data="{}" @click.prevent="document.getElementById('logout-form').submit()"
                >
                    logout
                </x-dropdown-item>
            </x-dropdown>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" class="hidden">
                @csrf
            </form>
        @endguest

        <a
            href="#newsletter"
            class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5"
        >
            Subscribe for Updates
        </a>
    </div>
</nav>
