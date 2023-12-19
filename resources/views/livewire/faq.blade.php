<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900">Frequently Asked Questions</h2>
        </div>


        <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
            @forelse($faqs as $faq)
            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-800 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 id="accordion-flush-heading-{{ $loop->index + 1 }}">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-{{ $loop->index + 1 }}" aria-expanded="false" aria-controls="accordion-flush-body-{{ $loop->index + 1 }}">
                        <span>{{ $faq->question }}</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-{{ $loop->index + 1 }}" class="hidden" aria-labelledby="accordion-flush-heading-{{ $loop->index + 1 }}">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-800 dark:text-gray-400">{{ $faq->answer }}</p>

                    </div>
                </div>

            </div>
            @empty
            @endforelse


        </div>









        <!-- More reviews... -->
    </div>

    <!-- Image section -->
    <div class="mt-6 sm:mt-16 xl:mx-auto xl:max-w-7xl xl:px-8">
        <img src="{{ url('images/whitebackground.jpg') }}" alt="" class="aspect-[5/2] w-full object-cover xl:rounded-3xl">
    </div>
</div>
</div>