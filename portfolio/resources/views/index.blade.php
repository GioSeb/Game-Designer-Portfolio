@include('layouts.header') {{-- TO DO press any key to continue, with js --}}
<body style="background-image: url('{{ asset('/img/background.jpg') }}'); background-size: cover;">


    <x-tittle></x-tittle>

    <x-interactive></x-interactive>

    <x-start></x-start>


@include('layouts.footer')
