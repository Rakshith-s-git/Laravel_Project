<x-front-layout>
  <x-slot name="header">
    <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </div>
  </x-slot>

    <div class="bg-image" style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20210403/pngtree-simple-white-flat-vectors-with-diagonal-cuts-decorative-backdrops-for-your-image_597614.jpg'); background-size: cover; height: 100vh; width: 100vw; background-position: center center;">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    You're logged in!<br>
                    Only authenticated users can access this section.

                </div>
            </div>
        </div>
    </div>
</x-front-layout>
