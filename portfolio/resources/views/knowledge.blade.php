@include('layouts.header')
<body style="background: url('{{ asset('/img/volcano.jpg') }}') no-repeat center center fixed; background-size: cover; font-family: Arial, Helvetica, sans-serif; color: white">
    <script src="{{ asset('js/candy.js') }}"></script>

    <div class="flex justify-center mt-4">
    <img src="{{ asset("img/score.png")}}" alt="score" class="w-10 h-10"><span class="mr-2 text-lg font-bold" id="score">0</span>
    </div>
    <div id="board"></div>

</body>
@include('layouts.footer')
