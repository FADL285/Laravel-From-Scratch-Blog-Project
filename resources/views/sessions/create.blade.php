<x-layout.app>
    <div class="flex flex-col mt-16 md:mt-24">
        <div class="container max-w-lg mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-gray-50 px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Log In!</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <x-form.errors/>
                    <x-form.input type="email" name="email" autocomplete="username"/>
                    <x-form.input type="password" name="password" autocomplete="current-password" />
                    <x-form.checkbox name="remember">Remember Me</x-form.checkbox>
                    <x-form.submit-btn-lg>Log In</x-form.submit-btn-lg>
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
