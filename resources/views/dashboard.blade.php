<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                {{ __('Hello Welcome ')  }} {{ auth()->user()->name }}
            </div>
        </div>
    </div>
    <div class="container1">
    @forelse(auth()->user()->funderaises as $funderaise)
        
                <div>
                        <img src="{{ asset('img/background1.jpg') }}" class="image1">
                        <h2> {{ $funderaise->title }}</h2>
                        <p> {{ $funderaise->description }}</p>
                        <p> {{ number_format($funderaise->number)  }} FCFA</p>
                </div>
        
    @empty
        <div>
            <p>Not Project Yet.  </p>
        </div>

    @endforelse
    </div>
</x-app-layout>


