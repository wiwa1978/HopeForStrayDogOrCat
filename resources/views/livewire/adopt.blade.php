<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900">Our animals waiting for adoption</h2>
        </div>


        <div class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

            @forelse($animals as $animal)
            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ url('storage/' . $animal->photo_main) }}" alt="Picture of {{ $animal->name }} will be added soon" class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <p class="uppercase font-bold mt-4 text-lg text-center text-gray-800 ">{{ $animal->name }}</p>
                <div class="mt-6 flex flex-col items-center">
                    <button wire:click="showAnimalDetail({{ $animal->id }})" class="rounded-md bg-lime-600 px-3.5 py-2.5 text-sm font-semibold text-lime-100 shadow-sm hover:bg-lime-100">
                        More information
                    </button>

                </div>
            </div>
            @empty
            <div class="flex">
                <p class="mt-4 text-lg text-gray-800 ">No animals found, please check back later!</p>
            </div>
            @endforelse

        </div>
        <!-- Image section -->
        <div class="mt-6 sm:mt-16 xl:mx-auto xl:max-w-7xl xl:px-8">
            <img src="{{ url('images/whitebackground.jpg') }}" alt="" class="aspect-[5/2] w-full object-cover xl:rounded-3xl">
        </div>
    </div>