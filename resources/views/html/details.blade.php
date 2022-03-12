
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/detailstyle.css') }}">

    <title>step one</title>
</head>
<body>
    <nav id="logo-container">
  <a href=" {{ url('dashboard') }}"><img src="{{ asset('logo.png')}}" class="logo"></a>
    </nav>

    <div class=container1> 
   <div id="title"> {{$details->title}}</div>
 
   <div id="file">
   <img src="{{ asset($details->file)}}" class="image" /> </div>

<div id="description">{{ $details->description}}

</div>

<h1>COMMENTS</h1>
<div id="user">
  @foreach($donations as $donation)
    <h2>Name : {{ $donation->name }}</h2>
    <p>Amount: {{ $donation->amount }}</p>
  @endforeach
  <div>
</div>
<div class="container2">
    <div>
   <span> {{ $details->amount_received}} of {{ $details->number}}</span>
    </div>
    <div class="container3">
      <div>
        <form action="{{ route('payamount')}}" method="POST">
          @csrf
          <input type="hidden" name="projet_id" value="{{ $details->id }}" />
          <button type="submit">DONATE</button>
        </form>
</div>
<div>
  <form>
        <button>SHARE</button>
</form>
</div>
</div>

</div>