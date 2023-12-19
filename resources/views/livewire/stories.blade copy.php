<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900">Success stories</h2>
        </div>


        {{-- <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-16 lg:mx-0 lg:max-w-none">
            <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
                <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                    <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                        <blockquote class="text-gray-900">
                            <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim
                                doloremque et ipsam.”</p>
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <img class="h-10 w-10 rounded-full bg-gray-50"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                            <div>
                                <div class="font-semibold text-gray-900">Leslie Alexander</div>
                                <div class="text-gray-600">@lesliealexander</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- More testimonials... -->
            </div>
        </div> --}}


        @forelse($stories as $story)

        <div class="mt-16 space-y-10 divide-y divide-gray-200 border-b border-t border-gray-200 pb-10">
            <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8">

                @if (!empty($story->photo_main))
                    <div class="flex">
                        {{-- <img class="rounded-full aspect-w-2 aspect-h-2" src="{{ asset('/storage/' . $story->photo_main) }}" alt="image description"> --}}
                        <img class="object-cover object-center w-32 h-32" src="{{ url('/images/front/dog_e.jpg') }}" alt="image description">
                    </div>
                @else
                    <div class="flex">
                        <img class="rounded-full w-16 h-16" src="{{ url('/images/dog_placeholder.png') }}" alt="image description">
                    </div>
                @endif


                <div class="lg:col-span-8 lg:col-start-5 xl:col-span-9 xl:col-start-4 xl:grid xl:grid-cols-3 xl:items-start xl:gap-x-8">



                    <div class="mt-1 flex items-center xl:col-span-1">
                        <p>{{ $story->adoption_country }}</p>

                    </div>

                    <div class="mt-4 lg:mt-6 xl:col-span-2 xl:mt-0">
                        <h3 class="text-sm font-bold text-lime-600">{{ $story->title }}</h3>
                        <div class="mt-3 space-y-6 text-sm text-gray-800">
                            <p>{{ $story->description_short }}</p>
                            <button wire:click="showStoryDetail({{ $story->id }})">Read more</button>

                        </div>
                    </div>
                </div>

               </div>

                @empty
                <div class="flex">
                    <p class="mt-4 text-lg text-gray-800 ">No stories found, please check back later!</p>
                </div>
            </div>
        </div>
         @endforelse
            <!-- Image section -->
            <div class="mt-6 sm:mt-16 xl:mx-auto xl:max-w-7xl xl:px-8">
                <img src="{{ url('images/whitebackground.jpg') }}" alt="" class="aspect-[5/2] w-full object-cover xl:rounded-3xl">
            </div>
        </div>
    </div>
