<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>step one</title>
</head>
<body>
    <nav id="logo-container">
  <img src="{{ asset('logo.png')}}" class="logo1">
    </nav>
    <div id="bodyform">
    <div id="form_container ">
   
        <p>STEP ONE</p>
        <form action=" {{ route('step-1') }}" method="POST">
          @csrf
                <div class="input_field select_option">
                  <select name="region">
                    <option>Select a Region</option>
                    <option value="Ngaoundéré">Ngaoundéré</option>
                    <option value="Yaoundé" >Yaoundé</option>
                    <option value="Bertoua" >Bertoua</option>
                    <option value="Maroua" >Maroua</option>
                    <option value="Douala">Douala</option>
                    <option value="Garoua">Garoua</option>
                    <option value="	Bamenda">	Bamenda </option>
                    <option value="Ebolowa">Ebolowa</option>
                    <option value="	Buea">	Buea</option>
                    <option value="Bafoussam" >Bafoussam</option>
                  </select>
                  <div class="select_arrow"></div>
                </div>
                <div class="input_field select_option">
                    <select name="category">
                      <option>Select your category</option>
                      <option value="Education">Education</option>
                      <option value="Medical">Medical</option>
                    </select>
                    <div class="select_arrow"></div>
                  </div>
            <button type="submit">
              NEXT
            </button>
          
      </form>
    </div>
    </div>
</body>
</html>