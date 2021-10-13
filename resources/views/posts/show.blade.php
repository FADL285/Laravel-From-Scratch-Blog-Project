<x-layout>
    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <div class="sticky top-1">
                    {{--     TODO: Img       --}}
                    <img src="/images/illustration-1.png" alt="" class="rounded-xl"/>

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published
                        <time>{{ $post->created_at->diffForHumans() }}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar"/>
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                <a href="{{ route('home') }}?author={{ $post->author->username }}">
                                    {{ $post->author->name }}
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-6">
                    <a
                        href="{{ route('home') }}"
                        class="
                transition-colors
                duration-300
                relative
                inline-flex
                items-center
                text-lg
                hover:text-blue-500
              "
                    >
                        <x-icon name="left-arrow"/>
                        Back to Posts
                    </a>

                    <div class="space-x-2">
                        <x-category-label :category="$post->category"/>
                    </div>
                </div>

                <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                    {{ $post->title }}
                </h1>

                <div class="space-y-4 lg:text-lg leading-loose">
                    <p>
                        {!! $post->body !!}
                    </p>
                </div>
            </div>

            <section class="col-span-8 col-start-5 mt-10 space-y-6">
                <x-post-comment/>
                <x-post-comment/>
                <x-post-comment/>
                <x-post-comment/>
            </section>

        </article>
    </main>
</x-layout>
