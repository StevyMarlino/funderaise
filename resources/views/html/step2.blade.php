<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{ asset('style.css') }}">
    <title>steptwo</title>
</head>
<body>
    <nav id="logo-container">
        <img src="{{ asset('logo.png')}}" class="logo1">
    </nav>
    <div id="bodyform">
    <div id="form_container ">
    <form>
        <p>STEP TWO</p>
        <form action="../html/step3.html">
            <div class="row clearfix">
                <div class="col_half">
                  <div class="input_field"> <label for="topic">TOPIC/TITLE:</label>
                    <input type="text" id="topic" name="name"/>
                  </div>
                </div>
                <div class="col_half">
                  <div> <span>DESCRIPTION: </span>
                    <textarea name="name" >
                    </textarea>
                  </div>
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