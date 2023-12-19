<div>
    <main class="isolate">


        <!-- Values section -->
        <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-32 lg:px-8">
            <div class="mx-auto">
                <h2 class="mb-10 text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl">{{ $story->title }}</h2>
            </div>




            <!-- Image gallery -->
            <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                @if (!empty($story->photo_main))
                    <div class="aspect-h-4 aspect-w-3 overflow-hidden rounded-lg lg:block">
                    <img src="{{ url('/storage/' . $story->photo_main) }}" alt="" class="h-full w-full object-cover object-center">
                    </div>
                @else
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                    <img src="{{ url('/images/dog_placeholder.png' ) }}" alt="" class="h-full w-full object-cover object-center">
                    </div>
                @endif

                <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">


                    @if (!empty($story->photos_additional[0]))
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="{{ url('/storage/' . $story->photos_additional[0]) }}" alt="" class="h-full w-full object-cover object-center">
                    </div>

                    @endif


                    @if (!empty($story->photos_additional[1]))
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="{{ url('/storage/' . $story->photos_additional[1]) }}" alt="" class="h-full w-full object-cover object-center">
                    </div>
                   @endif


                </div>


                @if (!empty($story->photos_additional[2]))
                <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                    <img src="{{ url('/storage/' . $story->photos_additional[2]) }}" alt="" class="h-full w-full object-cover object-center">
                </div>

                @endif
            </div>

            <!-- Product info -->
            <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">My adoption story</h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <h1 class="text-2xl font-bold tracking-tight text-gray-800 sm:text-3xl">A bit about me</h1>
                    </div>

                    <div class="mt-5">
                        <div class="mt-1 ">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-lg">
                                <li class="text-gray-800"><span class="text-gray-800">My name:
                                        {{ $this->story->animal_name }}</span></li>
                                {{-- <li class="text-gray-800"><span class="text-gray-800">My age:
                                        {{ $this->animal->age }}</span></li> --}}
                                {{-- <li class="text-gray-800"><span class="text-gray-800">I'm a
                                        {{ strtolower($this->animal->gender) }} {{ $this->animal->type }} </span></li> --}}
                                <li class="text-gray-800"><span class="text-gray-800">I was adopted in
                                        {{ $story->adoption_country }}</span></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="py-2 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <!-- Description and details -->
                    <div>
                        <h3 class="sr-only">Description</h3>

                        <div class="prose space-y-6">
                            <x-markdown>
                                {{ $story->description_long }}
                            </x-markdown>
                        </div>
                    </div>


                </div>


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


</div>
