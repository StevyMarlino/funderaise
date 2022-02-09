<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-7 lg:px-8" id="dashbutton">
            <div class="dashtext">
                {{ __('Hello Welcome ')  }} {{ auth()->user()->name }}
                <h1>Your Fundraiser</h1>
</div>
                <div>
    <form id="dashbutton1" action=" {{ url('step1') }}">
                <button type="submit">
                    <h5>Start a funding</h5>
                </button>
</form>
</div>
        </div>
    </div>
    <div class="container1">
    @forelse(auth()->user()->funderaises as $funderaise)
        <a href="{{ route('details',$funderaise->id) }}" >
                <div>
             <img src="{{ asset($funderaise->file)}}" class="image1">
                        
                        <h2> {{ $funderaise->title }}</h2>
                        <p> {{ $funderaise->description }}</p>
                        <p> {{ number_format($funderaise->number)  }} FCFA</p>
                </div>
</a>
    @empty
        <div>
            <p>Not Project Yet.  </p>
        </div>

    @endforelse
    </div>
</x-app-layout>


