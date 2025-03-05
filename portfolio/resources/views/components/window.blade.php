{{-- TO DO fix margin between the component --}}
<div x-data="{ isOpen: false }">
    <!-- Button to open the modal -->
    <button @click="isOpen = true">
        <div style="background-color: green;"> {{-- TO DO add transparent png with project --}}
            <img src="{{ asset('/img/tower2.png')}}" alt="window" style="height: 7.313rem; width: 15.5rem;">
        </div>
    </button>
    {{-- TO DO finish modal --}}
    <!-- Modal backdrop and content -->
    <div
        x-show="isOpen"
        class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center"
        @click.away="isOpen = false"
    >
        <!-- Modal content with animation -->
        <div
            x-show="isOpen"
            x-transition:enter="motion-safe:ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            class="max-w-3xl p-6 bg-white rounded shadow-lg"
        >
            <!-- Modal content here -->
            <h3 class="text-lg font-medium leading-6 text-gray-900">Modal Title</h3>
            <div class="mt-2">
                <p class="text-sm leading-5 text-gray-500">Modal content goes here.</p>
            </div>
            <!-- Close button -->
            <button @click="isOpen = false" class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">Close Modal</button>
        </div>
    </div>
</div>

{{-- <button>
    <div style="background-color: green;">
        <img src="{{ asset('/img/tower2.png')}}" alt="window" style="height: 7.313rem; width: 15.5rem;">
    </div>
</button> --}}
