
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/paystyle.css') }}">

    <title>step one</title>
</head>
<body>
<div class="container2">
      <form action="{{ route('pay')}}" method="POST">
          @csrf
          <div>
              <labe for="amount"><p>Enter the amount in XAF</p>
              <input name="amount" id="amount" type="number" value="amount">
              </label>
          </div>
        <button type="submit">DONATE</button>
</form>
</div>