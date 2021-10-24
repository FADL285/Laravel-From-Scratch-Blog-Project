<x-layout.app>
    <div class="flex flex-col mt-16 md:mt-24">
        <div class="container max-w-lg mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-gray-50 px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <x-form.input name="name" label="Full Name" placeholder="Mohamed Fadl" autocomplete="name"/>
                    <x-form.input name="username" placeholder="fadl285"/>
                    <x-form.input type="email" name="email" placeholder="fadl@admin.com" autocomplete="email"/>
                    <x-form.input type="password" name="password" placeholder="your password"
                                  autocomplete="new-password"/>
                    <x-form.submit-btn-lg>Create Account</x-form.submit-btn-lg>
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
