{{-- TO DO fix space to CHOOSE YOUR FIGHTER --}}
<div x-data="{ isOpen: false, towerCount: 5 }">
    <div x-show="isOpen" class="absolute w-1/2 bg-red-500" style="top: 20rem; left: 50px; margin-left: 5rem; width: 36.25rem; height: 38rem;">
      <img src="{{ asset('/img/text/projectTitle.png')}}" alt="" class="mx-auto mt-4">
    </div>

    <div class="relative flex flex-col items-center justify-end h-screen mx-auto my-0 p-0" style="width: 28.938rem;">
      <div class="flex flex-col items-center justify-center">
        <template x-for="(tower, index) in Array(towerCount).fill(0)" :key="index">
          <button v-if="index === towerCount - 1" @click="isOpen = !isOpen">
            <div class="mx-auto" style="background-color: green;">
              <img src="{{ asset('/img/tower2.png')}}" alt="window" style="height: 7.313rem; width: 15.5rem;">
            </div>
          </button>
          <div v-else class="mx-auto" style="background-color: green;">
            <img src="{{ asset('/img/tower2.png')}}" alt="window" style="height: 7.313rem; width: 15.5rem;">
          </div>
        </template>
      </div>
    </div>
  </div>

{{-- <button>
    <div style="background-color: green;">
        <img src="{{ asset('/img/tower2.png')}}" alt="window" style="height: 7.313rem; width: 15.5rem;">
    </div>
</button> --}}
