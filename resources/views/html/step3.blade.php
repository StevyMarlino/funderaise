<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{ asset('style.css') }}">
    <title>steptree</title>
</head>
<body>
    <nav id="logo-container">
        <img src="{{ asset('logo.png')}}" class="logo1">
    </nav>
    <div id="bodyform">
    <div id="form_container ">
    <form>
        <p>STEP THREE</p>
        <form action="../html/medical.html">
            <div class="row clearfix">
                <div class="col_half">
                  <div class="input_field">
                    <input type="number" placeholder="ENTER THE AMOUNT " value="CFA">
                  </div>
                </div>
                <div class="col_half">
                    <input type="file"> 
                </div>
                <div id="buttonform">
                  <div>
            <button>
              BACK
            </button>
                  </div>
                 <div>
                    <button>
                      NEXT
                    </button>
                          </div>
                </div>
          </form>
      </form>
    </div>
    </div>
</body>
</html>