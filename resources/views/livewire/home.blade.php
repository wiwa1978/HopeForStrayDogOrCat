<div class="w-full">
    <main class="isolate">
        <!-- Hero section -->
        <div class="w-full relative isolate -z-10">
            <svg class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-gray-200 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]" aria-hidden="true">
                <defs>
                    <pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                        <path d="M.5 200V.5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                    <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)" />
            </svg>
            <div class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48" aria-hidden="true">
                <div class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)">
                </div>
            </div>
            <div class="overflow-hidden">
                <div class="mx-auto max-w-7xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32">
                    <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">

                        <div class="w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                            {{-- <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                {{ __('home.title') }}</h1> --}}
                            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Help Albanian stray animals!</h1>
                            <p class="relative mt-6 text-lg leading-8 text-gray-800 sm:max-w-md lg:max-w-none">There are an incredible amount of stray dogs and cats in Albania!
                                Nobody cares for them.
                            </p>
                            <p class="relative mt-6 text-lg leading-8 text-gray-800 sm:max-w-md lg:max-w-none">The Albanian agencies I have talked to simply do not care... unless there is a way to profit of these poor stray animals.
                            </p>
                            <p class="relative mt-6 text-lg leading-8 text-gray-800 sm:max-w-md lg:max-w-none">I am not about making a profit of these animals. I care about their lives and well being and I refuse to abandon them.
                                I do this on my own but I'm desperate for some help !!
                            </p>
                            <p class="relative mt-6 text-lg leading-8 text-gray-800 sm:max-w-md lg:max-w-none">And if you would like to adopt one of these beautiful souls, please have a look on the Adopt page and contact me through the contact form!
                            </p>

                            <p class="relative mt-6 text-lg leading-8 text-gray-800 sm:max-w-md lg:max-w-none">Please consider donating some money so I can buy food, I can pay for the vaccinations, I can ensure these animals continue to be rescued.
                            </p>
                            <div class="mt-6">
                                <button wire:click=gotoDonate type="button" class="rounded-md bg-lime-600 px-3.5 py-2.5 text-lg font-semibold text-lime-100 shadow-sm hover:bg-lime-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-600">Donate</button>

                                <button wire:click=gotoAdopt type="button" class="ml-6 rounded-md bg-lime-600 px-3.5 py-2.5 text-lg font-semibold text-lime-100 shadow-sm hover:bg-lime-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-600">Adopt</button>
                            </div>
                        </div>


                        <div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
                            <div class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80">
                                <div class="relative">
                                    <img src="{{ asset('images/front/dog_d.jpg') }}" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                            </div>
                            <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
                                <div class="relative">
                                    <img src="{{ asset('images/front/dog_a.jpg') }}" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                                <div class="relative">
                                    <img src="{{ asset('images/front/dog_e.jpg') }}" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                            </div>
                            <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
                                <div class="relative">
                                    <img src="{{ asset('images/front/dog_f.jpg') }}" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                                <div class="relative">
                                    <img src="{{ asset('images/front/dog_g.jpg') }}" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content section -->
        {{-- <div class="mx-auto -mt-12 max-w-7xl px-6 sm:mt-0 lg:px-8 xl:-mt-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-3xl">Our mission</h2>
                <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                    <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
                        <p class="text-lg leading-8 text-gray-800">We need to move to a bigger house with a piece of land around to better accommodate the dogs and cats. In this way, they have their own specific yards to play and relax in and untill adoption is found into a caring, loving home. I still have 9 dogs and 5 cats so the house is also a sanctuary for those that are never adopted</p>
                        <p class="mt-6 text-lg leading-8 text-gray-800">Recovery room and recovery yard area and also a swimming paddling pool for hot summer days.
                            Desperately need full time "volunteers" for daily cleaning and with assisting with feedings.
                            Donations from companies and private persons to pay for it all. Potential or fixed adopters can visit our shelter. A flight round trip to and hotel in Albania are not expensive, and I can help with that.

                            Foster parents in Belgium The Netherlands Germany Austria Switzerland untill adoption is found are very welcome.
                            Companies who donate will be mentioned on a specific advertisement page.

                        </p>
                        <p class="mt-6 text-lg leading-8 text-gray-800">Companies who donate will be mentioned on a specific advertise page
                        </p>
                    </div>
                    <div class="lg:flex lg:flex-auto lg:justify-center">
                        <dl class="w-64 space-y-8 xl:w-80">
                            <div class="flex flex-col-reverse gap-y-4">
                                <dt class="text-base leading-7 text-gray-600">to Belgium, Netherlands, Germany last year
                                    alone</dt>
                                <dd class="text-4xl font-semibold tracking-tight text-gray-900">23 Adoptions</dd>
                            </div>
                            <div class="flex flex-col-reverse gap-y-4">
                                <dt class="text-base leading-7 text-gray-600">ready for adoption</dt>
                                <dd class="text-4xl font-semibold tracking-tight text-gray-900">9 dogs</dd>
                            </div>
                            <div class="flex flex-col-reverse gap-y-4">
                                <dt class="text-base leading-7 text-gray-600">ready for adoption</dt>
                                <dd class="text-4xl font-semibold tracking-tight text-gray-900">5 cats</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="mx-auto -mt-12 max-w-7xl px-6 sm:mt-0 lg:px-8 xl:-mt-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-3xl">Our mission</h2>
                <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                    <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
                        <p class="text-lg leading-8 text-gray-800">I emplore... No. I beg you to help me save these animals because they are beautiful souls who are worthy of life. </p>
                        <p class="mt-6 text-lg leading-8 text-gray-800">Currently I have 9 dogs and 6 cats and 2 kittens plus my own dog in my home and garden.
                            Eight dogs need adoption.
                        </p>
                        <p class="mt-6 text-lg leading-8 text-gray-800">I also am feeding 4 male and 2 female cats outside plus a mother cat and 1 kitten. They desperately need my help. They need deworming anti parasite treatment and sterilisation. Medication.
                        </p>

                         <p class="mt-6 text-lg leading-8 text-gray-800">I also place dryfood for the dogs that are roaming the streets in my surroundings.
                        </p>
                        <p class="mt-6 text-lg leading-8 text-gray-800">Through your donations and support I can keep on providing food and veterinary treatment to the many neglected and abused street dogs and cats as well as provide vaccination, spay and neutering.

                        </p>
                        <p class="mt-6 text-lg leading-8 text-gray-800">I rely solely on donations, 100% of which goes directly to care for the stray dogs and cats in need that I find.
                        </p>

                        <p class="mt-6 text-lg leading-8 text-gray-800">You can support by donating, or sponsoring one of my dogs or cats through a monthly contribution or one time donation. Every Euro helps to save and change a life but I cannot do this without you
                        </p>
                    </div>
                    <div class="lg:flex lg:flex-auto lg:justify-center">
                        <dl class="w-64 space-y-8 xl:w-80">
                            <div class="flex flex-col-reverse gap-y-4">
                                <dt class="text-base leading-7 text-gray-600">to Belgium, Netherlands, Germany last year
                                    alone</dt>
                                <dd class="text-4xl font-semibold tracking-tight text-gray-900">23 Adoptions</dd>
                            </div>
                            <div class="flex flex-col-reverse gap-y-4">
                                <dt class="text-base leading-7 text-gray-600">ready for adoption</dt>
                                <dd class="text-4xl font-semibold tracking-tight text-gray-900">9 dogs</dd>
                            </div>
                            <div class="flex flex-col-reverse gap-y-4">
                                <dt class="text-base leading-7 text-gray-600">ready for adoption</dt>
                                <dd class="text-4xl font-semibold tracking-tight text-gray-900">5 cats</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image section -->
        <div class="mt-6 mb-16 sm:mt-40 xl:mx-auto xl:max-w-7xl xl:px-8">
            <img src="{{ asset('images/front/dog8.jpg') }}" alt="" class="aspect-[5/2] w-full object-cover xl:rounded-3xl">
        </div>

    </main>


</div>
