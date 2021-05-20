<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <link rel='preconnect' href='https://fonts.gstatic.com'>
  <link href='https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap' rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BUSCADOR</title>
</head>
<body style="font-family: 'Indie Flower', cursive;">
    <form method="POST" action="{{url("buscar")}}" class="form-horizontal" >
        @csrf
        <fieldset>

        <!-- Form Name -->
        <center>
           <H1  class=>
               Formulario besqueda en motores
           </H1><BR>
        </center>


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="termino">Termino a buscar</label>
          <div class="col-md-5">
          <input id="termino" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div><br><br>



        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motores">Motor de busqueda</label>
          <div class="col-md-4">
            <label class="radio-inline" for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked" >
              <img src="https://image.flaticon.com/icons/png/128/1000/1000777.png"  style="width: 60px" title="Google">
            </label>

            <label class="radio-inline" for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="2">
              <img src="https://news.thewindowsclub.com/wp-content/uploads/2020/10/Bing-Logo-1200x1196.png"  style="width: 60px" title="Bing">
            </label>

            <label class="radio-inline" for="motores-2">
              <input type="radio" name="motores" id="motores-2" value="3">
              <img src="https://image.flaticon.com/icons/png/512/179/179345.png"  style="width: 60px"  title="Yahoo!">
            </label>

            <label class="radio-inline" for="motores-3">
              <input type="radio" name="motores" id="motores-3" value="4">
              <img title="Naver" src="https://clova-phinf.pstatic.net/MjAxODAzMjlfOTIg/MDAxNTIyMjg3MzM3OTAy.WkiZikYhauL1hnpLWmCUBJvKjr6xnkmzP99rZPFXVwgg.mNH66A47eL0Mf8G34mPlwBFKP0nZBf2ZJn5D4Rvs8Vwg.PNG/image.png" alt="Naver" style="width: 60px">
            </label>

            <label class="radio-inline" for="motores-4">
              <input type="radio" name="motores" id="motores-4" value="5">
              <img title="Baidu" src="https://img.icons8.com/color/452/baidu.png"  style="width: 60px">
            </label><br><br>

            <label class="radio-inline" for="motores-5">
              <input type="radio" name="motores" id="motores-5" value="6">
              <img title="Youtube" src="https://cdn.icon-icons.com/icons2/70/PNG/512/youtube_14198.png"  style="width: 60px">
            </label>

            <label class="radio-inline" for="motores-6">
              <input type="radio" name="motores" id="motores-6" value="7">
              <img title="Tik tok" src="http://assets.stickpng.com/images/5cb78671a7c7755bf004c14b.png"  style="width: 60px">
            </label>

            <label class="radio-inline" for="motores-7">
              <input type="radio" name="motores" id="motores-7" value="8">
              <img title="Facebook" src="https://cdn.icon-icons.com/icons2/2429/PNG/512/facebook_logo_icon_147291.png"  style="width: 60px">
            </label>

            <label class="radio-inline" for="motores-8">
              <input type="radio" name="motores" id="motores-8" value="9">
              <img title="Pinterest" src="https://image.flaticon.com/icons/png/512/145/145808.png"  style="width: 60px">
            </label>

            <label class="radio-inline" for="motores-9">
              <input type="radio" name="motores" id="motores-9" value="10">
              <img title="Twitter" src="https://www.clave.com.ec/wp-content/uploads/2019/07/Twitter.png"  style="width: 60px">
            </label>
          </div>

        </div><br><br>
         <!-- Button -->
         <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button id="singlebutton" name="singlebutton" class="btn btn-success">Buscar</button>
            </div>
          </div>
        </fieldset>
        </form>


</body>
</html>
