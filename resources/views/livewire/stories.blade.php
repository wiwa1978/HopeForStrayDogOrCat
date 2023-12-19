<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900">Success stories</h2>
        </div>


        <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-16 lg:mx-0 lg:max-w-none">
            <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">


                @forelse($stories as $story)
                <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                    <button wire:click="showStoryDetail({{ $story->id }})">
                    <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                        <blockquote class="text-gray-900">
                            <p>{{ $story->description_short }}</p>
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <img class="h-24 w-24 rounded-full bg-gray-50"
                                src="{{ asset('/storage/' . $story->photo_main) }}"
                                alt="">
                            <div>
                                <div class="font-semibold text-gray-900">{{ $story->animal_name }}</div>
                                <div class="text-gray-900">Adopted by {{ $story->adopter_name }}</div>
                                <div class="text-gray-900">{{ $story->adoption_country }}</div>

                            </div>
                        </figcaption>
                    </figure>
                    </button>

                </div>
                @empty
                <div class="flex">
                    <p class="mt-4 text-lg text-gray-800 ">No stories found, please check back later!</p>
                </div>
                @endforelse


            </div>
        </div>



            <!-- Image section -->
            <div class="mt-6 sm:mt-16 xl:mx-auto xl:max-w-7xl xl:px-8">
                <img src="{{ url('images/whitebackground.jpg') }}" alt="" class="aspect-[5/2] w-full object-cover xl:rounded-3xl">
            </div>
        </div>
    </div>
