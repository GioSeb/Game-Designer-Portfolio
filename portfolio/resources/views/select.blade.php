@include('layouts.header') {{-- TO DO add sprite of weapon that follows cursor, maybe add kill animation when pressing link, with setInterval() in js --}}
<body style="background-image: url('{{ asset('/img/background.jpg') }}'); background-size: cover;">
{{-- TO DO align gif to center --}}
<div style="position: absolute; left: 35rem; top: 5rem;" class="justify-content-center">
    <x-paths first-image="img/imp.gif" second-image="img/titles.png" path="/titles" />
</div>

<div style="position: absolute; right: 35rem; top: 5rem;" class="justify-content-center">
    <x-paths first-image="img/cyber.gif" second-image="img/projects.png" path="/projects" />
</div>

<div style="position: absolute; left: 16rem; top: 25rem;" class="justify-content-center">
    <x-paths first-image="img/chain.gif" second-image="img/knowledge.png" path="/knowledge"/>
</div>

<div style="position: absolute; right: 16rem; top: 25rem;" class="justify-content-center">
    <x-paths first-image="img/demon.gif" second-image="img/contact.png" path="/contact"/>
</div>

<x-status />

@include('layouts.footer')
