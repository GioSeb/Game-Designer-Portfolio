@include('layouts.header')
<body style="background-image: url('{{ asset('/img/spiral.png') }}'); background-size: cover; background-position: center center;">

    <a href="/select"><img src="{{ asset("img/back.png")}}" class="ml-2" alt="back"></a>
    {{-- TO DO fix scroll issue --}}
    <div class="flex flex-col items-center justify-end h-screen" style="align-items: center;">
        <button><x-window></x-window></button>
        <button><x-window></x-window></button>
        <button><x-window></x-window></button>
        <button><x-window></x-window></button>
        <button><x-window></x-window></button>
        <button><x-window></x-window></button>
        <img src="{{ asset('img/tower1.png') }}" alt="base" style="height: 7.313rem; width: 28.938rem;">
        {{-- TO DO fix alignment to bottom img--}}
    </div>


@include('layouts.footer')
