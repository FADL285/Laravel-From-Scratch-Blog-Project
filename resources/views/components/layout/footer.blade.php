<footer
    id="newsletter"
    class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16"
>
    <img
        src="/images/lary-newsletter-icon.svg"
        alt=""
        class="mx-auto -mb-6"
        style="width: 145px"
    />
    <h5 class="text-3xl">Stay in touch with the latest posts</h5>
    <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

    <div class="mt-10">
        <div
            class="inline-block"
        >
            <form method="POST" action="{{ route('newsletter') }}">
                @csrf

                <div class="lg:flex text-sm relative mx-auto lg:bg-gray-200 rounded-full">
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="/images/mailbox-icon.svg" alt="mailbox letter"/>
                        </label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            placeholder="Your email address"
                            required
                            class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none w-full rounded-xl"
                        />
                    </div>

                    <button
                        type="submit"
                        class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                    >
                        Subscribe
                    </button>
                </div>

                <x-error-message name="email"/>
            </form>
        </div>
    </div>
</footer>
