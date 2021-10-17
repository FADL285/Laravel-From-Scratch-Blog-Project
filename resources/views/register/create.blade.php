<x-layout.app>
    <div class="flex flex-col mt-16 md:mt-24">
        <div class="container max-w-lg mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-gray-50 px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4">
                        <input
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            placeholder="Full Name"/>
                        <x-error-message name="name"/>
                    </div>

                    <div class="mb-4">
                        <input
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded"
                            name="username"
                            value="{{ old('username') }}"
                            required
                            placeholder="Username"/>
                        <x-error-message name="username"/>
                    </div>

                    <div class="mb-4">
                        <input
                            type="email"
                            class="block border border-grey-light w-full p-3 rounded"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            placeholder="Email"/>
                        <x-error-message name="email"/>
                    </div>

                    <div class="mb-4">
                        <input
                            type="password"
                            class="block border border-grey-light w-full p-3 rounded"
                            name="password"
                            required
                            placeholder="Password"/>
                        <x-error-message name="password"/>
                    </div>

                    <button
                        type="submit"
                        class="w-full text-center py-3 rounded transition-colors bg-blue-500 text-white font-semibold hover:bg-blue-600 focus:outline-none my-1"
                    >
                        Create Account
                    </button>
                </form>

                <div class="text-center text-sm text-grey-dark mt-4">
                    By signing up, you agree to the
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="javascript:void(0)">
                        Terms of Service
                    </a> and
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="javascript:void(0)">
                        Privacy Policy
                    </a>
                </div>
            </div>

            <div class="text-grey-dark mt-6">
                Already have an account?
                <a class="no-underline border-b border-blue text-blue" href="{{ route('login') }}">
                    Log in
                </a>.
            </div>
        </div>
    </div>
</x-layout.app>
