<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">{{ $animal->name }}</h2>

        <div class="mt-16 lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
            <!-- Image gallery -->
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

                    @foreach ($photos as $photo)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ url('/storage/' . $photo) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    @endforeach

                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">

                    @foreach ($photos as $photo)
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide {{ $loop->index }}" data-carousel-slide-to="{{ $loop->index }}"></button>
                    @endforeach

                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>



                {{-- <div class="flex items-center justify-between w-full pt-5">
                    <p class="mb-6 tracking-tight text-gray-900">Please consider a small donation for {{ $animal->name }} so we can buy food and continue to search for adoption parents</p>
                </div>
                <div class="mt-6">
                    <button wire:click=gotoDonate type="button" class="rounded-md bg-lime-600 px-3.5 py-2.5 text-lg font-semibold text-lime-100 shadow-sm hover:bg-lime-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-600">Donate</button>

                </div> --}}
                {{-- <div>
                    @include('livewire.donatebutton')
                </div> --}}
            </div>


            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-800 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                        <span>General Information</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-800 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">
                        <div>
                            <ul class="pl-5 text-gray-800 list-disc dark:text-gray-400">
                                <li>Size: {{ $animal->size }}</li>
                                <li>Gender: {{ $animal->gender }}</li>
                                <li> Current location:{{ $animal->location }}</li>
                                <li>Age: {{ $animal->age }}</li>
                                <li>Chipped: @if ($animal->chipped)
                                    Yes
                                    @else
                                    Not yet
                                    @endif
                                </li>
                                <li>Vaccinated: @if ($animal->vaccinated)
                                    Yes
                                    @else
                                    Not yet
                                    @endif
                                </li>
                                <li>Rabies vaccination: @if ($animal->rabies)
                                    Yes
                                    @else
                                    Not yet
                                    @endif
                                </li>
                                <li>
                                    Kids friendly:
                                    @if ($animal->kids_friendly)
                                    Yes, I can live perfectly with kids
                                    @else
                                    No, I prefer no kids in my new home
                                    @endif
                                </li>
                                <li>
                                    Cats friendly:
                                    @if ($animal->cats_friendly)
                                    Yes, I would love cats in my new home
                                    @else
                                    No, I'm looking for a home without cats
                                    @endif
                                </li>
                                <li>
                                    Dogs friendly:
                                    @if ($animal->dogs_friendly)
                                    Yes, I can live perfectly with dogs
                                    @else
                                    No, I prefer no dogs in my new home
                                    @endif <br>
                                <li>
                                    Sterilized:
                                    @if ($animal->sterilized)
                                    Yes, I'm already sterilized
                                    @else
                                    No, I'm not sterilized yet
                                    @endif <br>
                                </li>
                            </ul>
                        </div>


                        </p>
                    </div>
                </div>


                <h2 id="accordion-collapse-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-800 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>What is {{ $animal->name }} looking for?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">

                        <div class="prose mb-2 text-gray-800 dark:text-gray-400"">
                            <x-markdown>
                                {{ $animal->environment }}
                            </x-markdown>
                        </div>
                    </div>
                </div>



                <h2 id=" accordion-collapse-heading-3">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-800 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                <span>Social Media</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                            </h2>
                            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-800 dark:text-gray-400">
                                    <div class="flex justify-center px-5">
                                        <a class="px-5" href="{{ $facebook_link }}" target="_blank"><img src="{{ asset('images/logo/facebook_logo.png') }}" style="width:30px;height:30px;"></a>
                                        <a class="px-5" href="{{ $twitter_link }}" target="_blank"><img src="{{ asset('images/logo/twitter_logo.png') }}" style="width:30px;height:30px;"></a>
                                        <a class="px-5" href="{{ $messenger_link }}" target="_blank"><img src="{{ asset('images/logo/messenger_logo.png') }}" style="width:30px;height:30px;"></a>
                                        <a class="px-5" href="{{ $whatsapp_link }}" target="_blank"><img src="{{ asset('images/logo/whatsapp_logo.png') }}" style="width:30px;height:30px;"></a>
                                        <a class="px-5" href="{{ $pinterest_link }}" target="_blank"><img src="{{ asset('images/logo/pinterest_logo.png') }}" style="width:30px;height:30px;"></a>



                                    </div>

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mt-16 lg:grid lg:grid-cols-1 lg:items-start lg:gap-x-8">
                        <h2 class="mb-6 text-2xl font-bold tracking-tight text-gray-900">My story</h2>

                        <div class="prose">
                            <x-markdown>
                                {{ $animal->description }}
                            </x-markdown>
                        </div>
                    </div>

                    <div class="mt-6 lg:grid lg:grid-cols-1 lg:items-start lg:gap-x-8">
                        @if(!empty($videos))
                        <h2 class="mb-6 text-2xl font-bold tracking-tight text-gray-900">Videos</h2>
                        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-2">

                            @foreach ($videos as $video)
                            <div class="group relative">
                                <video width="426" height="240" controls>
                                    <source src="{{ asset('/storage/' . $video) }}" type="video/mp4" />
                                </video>
                            </div>
                            @endforeach

                        </div>
                        @endif
                    </div>

                    <div class="mt-6 lg:grid lg:grid-cols-1 lg:items-start lg:gap-x-8">
                        @if(!empty($youtube_links))
                        <h2 class="mb-6 text-2xl font-bold tracking-tight text-gray-900">Youtube videos</h2>
                        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-2">


                            @foreach ($youtube_links as $link)
                            <div class="group relative">
                                <div class="media-body">
                                    <iframe width="560" height="315" src="{{ $link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif

                    </div>
                </div>

                <!-- Image section -->
                <div class="mt-6 sm:mt-16 xl:mx-auto xl:max-w-7xl xl:px-8">
                    <img src="{{ url('images/whitebackground.jpg') }}" alt="" class="aspect-[5/2] w-full object-cover xl:rounded-3xl">
                </div>
            </div>
