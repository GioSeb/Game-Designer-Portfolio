@include('layouts.header')

<div style="position: absolute; left: 40rem; top: 5rem;" class="justify-content-center">
    <x-paths first-image="img/imp.gif" second-image="img/titles.png" />
</div>

<div style="position: absolute; right: 40rem; top: 5rem;" class="justify-content-center">
    <x-paths first-image="img/cyber.gif" second-image="img/projects.png" />
</div>

<div style="position: absolute; left: 16rem; top: 25rem;" class="justify-content-center">
    <x-paths first-image="img/chain.gif" second-image="img/knowledge.png" />
</div>

<div style="position: absolute; right: 16rem; top: 25rem;" class="justify-content-center">
    <x-paths first-image="img/demon.gif" second-image="img/contact.png" />
</div>

<x-status />

@include('layouts.footer')
