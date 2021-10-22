<x-layout.app>
    <div class="flex flex-col mt-16 md:mt-24">
        <div class="container max-w-lg mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-gray-50 px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Log In!</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <x-errors-bag/>

                    <div class="mb-4">
                        <input
                            type="email"
                            class="block border border-grey-light w-full p-3 rounded"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            placeholder="Email"/>
                    </div>

                    <div class="mb-4">
                        <input
                            type="password"
                            class="block border border-grey-light w-full p-3 rounded"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="Password"/>
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>

                    <button
                        type="submit"
                        class="w-full text-center py-3 rounded transition-colors bg-blue-500 text-white font-semibold hover:bg-blue-600 focus:outline-none my-1"
                    >
                        Log In
                    </button>
                </form>
            </div>

            <div class="text-grey-dark mt-6">
                Don't have an account?
                <a class="no-underline border-b border-blue text-blue" href="{{ route('register') }}">
                    Create one
                </a>.
            </div>
        </div>
    </div>
</x-layout.app>
