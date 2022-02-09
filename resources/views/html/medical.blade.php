@extends ('layouts.front')

@section('content')

<div class="container-flex">

@forelse($medical as $fund)
    <div>
         <img src="{{ asset($fund->file)}}" class="image1">
         <h2>Freedom Convoy 2022</h2>
         <p>To our Fellow Canadians,  
         the time for political over reach is over.  </p>
    </div>
@empty
No data 
@endforelse
</div>

   @endsection