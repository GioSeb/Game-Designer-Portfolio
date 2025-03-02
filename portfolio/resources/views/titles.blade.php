@include('layouts.header')

<body>
    <script src="{{ asset('js/platform.js') }}"></script>
    <script src="{{ asset('js/sprite.js')}}"></script>
    <div class="relative w-full h-screen bg-gray-200 overflow-hidden">
        <!-- Sprite -->
        <div x-data="sprite()" x-init="init()" @keydown.window="move($event)" tabindex="0" class="absolute">
          <img src="{{ asset('img/platform/sprite.png') }}":style="{ top: '${y}px', left: '${x}px' }">
        </div>

        <!-- Platforms -->
        <div x-data="{ platforms: [] }" class="relative w-full h-full">
            <template x-for="platform in platforms" :key="platform.id">
                <div x-data="platform(platform.x, platform.y, platform.width, platform.height)"
                     :style="{ top: `${y}px`, left: `${x}px`, width: `${width}px`, height: `${height}px` }"
                     class="absolute bg-green-500">
                </div>
            </template>
        </div>
      </div>
</body>

@include('layouts.footer')
