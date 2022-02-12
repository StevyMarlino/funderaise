@extends ('layouts.front')

@section('content')

<div class="container-flex">

@forelse($medical as $funderaise)
<a href="{{ route('details',$funderaise->id) }}" >
                <div>
             <img src="{{ asset($funderaise->file)}}" class="image1">
                        
                        <h2> {{ $funderaise->title }}</h2>
                        <p id="textlength"> {{ $funderaise->description }}</p>
                        <p> {{ number_format($funderaise->number)  }} FCFA</p>
                </div>
@empty
No data 
@endforelse
</div>

   @endsection