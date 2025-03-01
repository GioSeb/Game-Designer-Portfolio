@include('layouts.header')
<body style="background: url('{{ asset('/img/volcano.jpg') }}') no-repeat center center fixed; background-size: cover; font-family: Arial, Helvetica, sans-serif; color: white">
    <script src="{{ asset('js/candy.js') }}"></script>

    <div class="flex justify-center mt-4">
    <img src="{{ asset("img/score.png")}}" alt="score" class="w-100 h-100"><span class="mr-2 text-lg font-bold" id="score">0</span> {{-- TO DO increase text size --}}
    </div>
    <div class="flex h-screen">
        <div class="w-300 p-4">
            <ul class="flex flex-col">
                <li class="flex items-center"> {{-- TO DO change font --}}
                    <img src="{{ asset('/img/candy/c1.png') }}" alt="c++" class="mr-4" style="width: 50px; height: 50px;">
                    <div>
                        <p>C++ programming.</p>
                        <p>Years of experience: 3</p>
                    </div>
                </li>
                <br>
                <li class="flex items-center">
                    <img src="{{ asset('/img/candy/c2.png') }}" alt="c#" class="mr-4" style="width: 50px; height: 50px;">
                    <div>
                        <p>C# programming.</p>
                        <p>Years of experience: 3</p>
                    </div>
                </li>
                <br>
                <li class="flex items-center">
                    <img src="{{ asset('/img/candy/unreal.png') }}" alt="unreal" class="mr-4" style="width: 50px; height: 50px;">
                    <div>
                        <p>Unreal game design.</p>
                        <p>Years of experience: 2</p>
                    </div>
                </li>
                <br>
                <li class="flex items-center">
                    <img src="{{ asset('/img/candy/unity.png') }}" alt="unity" class="mr-4" style="width: 50px; height: 50px;">
                    <div>
                        <p>Unity game design.</p>
                        <p>Years of experience: 1</p>
                    </div>
                </li>
                <br>
                <li class="flex items-center">
                    <img src="{{ asset('/img/candy/godot.png') }}" alt="godot" class="mr-4" style="width: 50px; height: 50px;">
                    <div>
                        <p>Godot game design.</p>
                        <p>Years of experience: 1</p>
                    </div>
                </li>
                <br>
                <li class="flex items-center">
                    <img src="{{ asset('/img/candy/blender.png') }}" alt="blender" class="mr-4" style="width: 50px; height: 50px;">
                    <div>
                        <p>Blender 3D modeling.</p>
                        <p>Years of experience: 1</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="flex-1 flex justify-center items-top"> {{-- TO DO align board under socre, or move score --}}
            <div id="board"></div>
        </div>
    </div>
@include('layouts.footer')
