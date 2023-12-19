<div>
    <main class="isolate">


        <!-- Values section -->
        <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact Us</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Write a small intro text on adoption</p>
            </div>


            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" wire:model="name">
                    @error('name') <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter name" wire:model="email">
                    @error('email') <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" placeholder="Enter Body" wire:model="body"></textarea>
                    @error('body') <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save Contact</button>
            </form>

        </div>

        <!-- Content section -->
        <!-- Image section -->
        <div class="mt-6 sm:mt-16 xl:mx-auto xl:max-w-7xl xl:px-8">
            <img src="{{ url('images/whitebackground.jpg') }}" alt="" class="aspect-[5/2] w-full object-cover xl:rounded-3xl">
        </div>
    </main>
</div>