<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>silvio - underpost.net</title>
  <meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
  <meta name='viewport' content='width=device-width, user-scalable=no' />
  <!--<link rel='icon' href='/cloud/e_learning/silvio/favicon.ico' type='image/x-icon' />-->
  <link rel='icon' href='/app/favicon.ico' type='image/x-icon' />
  <script>
  <?php

  // $path = 'c:/dd/deploy_area/client';
  $path = 'c:/xampp/htdocs/client';

  echo file_get_contents($path.'/vanilla.js');
  echo file_get_contents($path.'/util.js');

  ?>
  </script>

  <style>
  <?php

  echo file_get_contents($path.'/style/underpost.css');

  ?>


  .imagen-ghost {

    width: 95%;
    height: auto;
    margin: auto;

  }

  .slider-content {

    width: 80%;
    height: 600px;
    margin: auto;
    background: gray;
    overflow: hidden;

  }


  </style>

</head>
<body>
  <script type="text/javascript">

  ((()=>{

    var path = '/app';

    console.log('home init');

    append('body', `

    <br>

    <div class='in' style='

    width: 85%;
    background: yellow;
    color: black;
    text-align: center;
    padding: 5%;
    margin: auto;
    font-weight: bold;
    background-image: linear-gradient(red, yellow);

    '>

      <i>APP SILVIO v1.0</i>

    </div>

    <br>

    <div class='in slider-content'>

            <img class='abs center slider-0' src='`+path+`/assets/0.jpg'>

            <img class='abs center slider-1' style='display: none;' src='`+path+`/assets/1.jpg'>

            <img class='abs center slider-2' style='display: none;' src='`+path+`/assets/2.PNG'>

            <img class='abs center slider-3' style='display: none;' src='`+path+`/assets/3.PNG'>

    </div>

    <br>

    <br>

    <div class='in' style='text-align: center;'>

      <a style='color: white; text-decoration: none;' href='https://underpost.net'>Powered By <b>UNDER</b>post.net</a>

    </div>

    <br>

    <br>

    `);

    function rr(){

      if( (data.lastW!=s('body').clientWidth) || (data.lastH!=s('body').clientHeight) ){

        data.lastW=s('body').clientWidth;
        data.lastH=s('body').clientHeight;

        if(data.lastW>500){

          data.movil = false;

        }else{

          data.movil = true;

        }

        console.log('movil -> '+data.movil);

        //--------------------------------------------------------------------------
        //--------------------------------------------------------------------------



        //--------------------------------------------------------------------------
        //--------------------------------------------------------------------------

      }

    }

    var data = {

      movil: false,
      lastH: null,
      lastW: null

    };
    rr();
    setInterval(function(e){
      rr();
    }, 100);

    let in_slider = 0;

    setInterval(function(){

      fadeOut(s('.slider-'+in_slider));

      in_slider++;

      if(in_slider==4){

        in_slider = 0;

      }

      fadeIn(s('.slider-'+in_slider));

    }, 1000);



  })());

  </script>

</body>

</html>
