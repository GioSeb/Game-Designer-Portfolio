{{-- TO DO FIX EVERYTHING -}}
{{-- TO DO fix space to CHOOSE YOUR FIGHTER --}}
<input type="hidden" id="projects-data" value="{{ $projects->toJson() }}">
<div x-data="{ isOpen: false, activeProject: null, projects: JSON.parse(document.getElementById('projects-data').value) }">
    <!-- Modal for selected project -->
    <div x-show="isOpen" class="absolute w-1/2 bg-red-500" style="top: 20rem; left: 50px; margin-left: 5rem; width: 36.25rem; height: 38rem;">
        <template x-if="activeProject !== null">
            <div x-data="{ baseUrl: '{{ asset('') }}', activeProject: null }">
                <img :src="baseUrl + (activeProject ? activeProject.img1 : '')" alt="">
            </div>
                 :alt="activeProject.projectName"
                 class="mx-auto mt-4">
        </template>
    </div>

    <!-- Generate towers based on project count -->
    <div class="relative flex flex-col items-center justify-end h-screen mx-auto my-0 p-0" style="width: 28.938rem;">
        <div class="flex flex-col items-center justify-center">
            <template x-for="(project, index) in {{ json_encode($projects) }}" :key="index">
                <button @click="isOpen = true; activeProject = project">
                    <div class="mx-auto" style="background-color: green;">
                        <img src="{{ asset('/img/tower2.png')}}"
                             alt="window"
                             style="height: 7.313rem; width: 15.5rem;">
                    </div>
                </button>
            </template>
        </div>
    </div>
</div>

{{-- <button>
    <div style="background-color: green;">
        <img src="{{ asset('/img/tower2.png')}}" alt="window" style="height: 7.313rem; width: 15.5rem;">
    </div>
</button> --}}
