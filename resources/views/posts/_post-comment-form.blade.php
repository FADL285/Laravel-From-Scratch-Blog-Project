@auth()
    <x-layout.panel>
        <form method="POST" action="{{ route('comments', $post->slug) }}">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}"
                     alt=""
                     width="40"
                     height="40"
                     class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea
                    name="body"
                    class="w-full text-sm focus:outline-none focus:ring p-3"
                    rows="4"
                    placeholder="Quick, thing of something to say!"
                    required minlength="4"></textarea>

                <x-error-message name="body"/>
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-layout.panel>
@else
    <p class="font-semibold text-center">
        <a href="{{ route('register') }}" class="hover:underline">Register</a>
        or
        <a href="{{ route('login') }}" class="hover:underline">Log In</a>
        to leave a comment
    </p>
@endauth
