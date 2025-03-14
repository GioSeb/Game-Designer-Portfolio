@include('layouts.header')

{{-- TO DO fix alignment between tower2 and tower1 --}}

<body style="background-image: url('{{ asset('/img/spiral.png') }}'); background-size: cover; background-position: center center;">

  <a href="/select"><img src="{{ asset("img/back.png")}}" class="ml-2" alt="back"></a>
  <img src="{{ asset('/img/text/choose.png')}}" alt="https://www.textstudio.com/ Font generator" class="mx-auto">

  <div class="flex flex-col items-center justify-end h-auto mx-auto">
    <div class="flex flex-col items-center justify-center h-screen">
        @php
            $projects = App\Models\Project::all();
        @endphp
    <x-window :projects="$projects" :tower-count="$projects->count()" />
      <img src="{{ asset('/img/tower1.png')}}" alt="tower1" style="height: 7.313rem; width: 28.938rem;">
    </div>
  </div>

@include('layouts.footer')
