<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>silvio - underpost.net</title>
  <meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
  <meta name='viewport' content='width=device-width, user-scalable=no' />
  <!-- <link rel='icon' href='/cloud/e_learning/silvio/favicon.ico' type='image/x-icon' /> -->
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


  .imagen-slider {

    width: 100%;

  }

  .slider-content {

    width: 80%;
    height: 50%;
    margin: auto;
    background: gray;
    overflow: hidden;

  }

.black-content {

    width: 60%;
    color: white;
    text-align: center;
    padding: 10%;
    margin: auto;
    font-weight: bold;
    background: linear-gradient(blue, green);
    font-size: 460%;

}


.txt-slider {

  top: 10px;
  left: 10px;
  padding: 10px;
  font-size: 20px;
  color: white;
  font-weight: bold;

}

.video-youtube {

  margin: auto;
  width: 80%;
  height: 50%;
  border: none;

}


.audio-Bbng {

  margin: auto;
  width: 80%;
  /* display: none; */




}

  </style>

</head>
<body>
  <script type="text/javascript">

  ((()=>{

    // var path = '/cloud/e_learning/silvio';
    var path = '/app';

    console.log('home init');

    append('body', `

    <br>

    <div class='in black-content'>


      <i>APP SILVIO v1.0</i>

    </div>

    <br>

    <div class='in slider-content'>

            <img class='abs center imagen-slider slider-0' src='`+path+`/assets/0.jpg'>

            <img class='abs center imagen-slider slider-1' style='display: none;' src='`+path+`/assets/1.jpg'>

            <img class='abs center imagen-slider slider-2' style='display: none;' src='`+path+`/assets/2.PNG'>

            <img class='abs center imagen-slider slider-3' style='display: none;' src='`+path+`/assets/3.PNG'>



            <div  class='abs txt-slider'>

              APP SILVIO

            </div>

    </div>


    <br>



    <audio controls autoplay class='in audio-Bbng'>


  <source src="`+path+`/assets/Audio/Bbng.mp3" type="audio/mpeg">
Your browser does not support the audio element.

</audio>

    <br>

    <iframe class='in video-youtube'
    src="https://www.youtube.com/embed/l0vrsO3_HpU"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen>
    </iframe>

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

      /* comentario de mas de una
      linea */

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
    let array_background = ['rgba(50, 86, 148, 0.62)','rgba(125, 166, 58, 0.62)','rgba(99, 7, 99, 0.62)', 'rgba(205, 230, 6, 0.56)'];
    setInterval(function(){

      fadeOut(s('.slider-'+in_slider));

      in_slider++;

      if(in_slider==4){

        in_slider = 0;

      }

      s('.txt-slider').style.background = array_background[in_slider];

      fadeIn(s('.slider-'+in_slider));

    }, 1000);



  })());

  </script>

</body>

</html>
