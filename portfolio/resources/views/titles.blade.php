@include('layouts.header')

<body style="height: 3400px">
    <div class="relative w-full h-screen bg-gray-200 overflow-hidden" style="height: 3400px">
        <!-- Sprite -->
            <img src="{{ asset('img/platform/sprite.png') }}" alt="sprite" class="absolute" id="sprite" style="width: 50px; height: 150px;"> {{-- TO DO add sprite --}}

        <!-- Platforms -->
        <div class="">
            <x-platform :right="40" :bottom="190" :width="35" />
            <x-platform :right="0" :bottom="155" :width="35" />
            <x-platform :left="0" :bottom="155" :width="35" />
            <x-platform :right="20" :bottom="120" :width="35" />
            <x-platform :right="0" :bottom="90" :width="35" />
            <x-platform :left="25" :bottom="60" :width="35" />
            <x-platform :left="40" :bottom="30" :width="35" />
        </div>
    </div>

    <script src="{{ asset('js/platform.js') }}"></script>
    <script src="{{ asset('js/sprite.js')}}"></script>
</body>

@include('layouts.footer')
