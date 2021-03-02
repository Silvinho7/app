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


.mapa {

  margin: auto;
  width: 500px;
  height: 500px;
  background: green;

}


  </style>

</head>
<body>

  <!--   --->

  <script type="text/javascript">

  ((()=>{

    // var path = '/cloud/e_learning/silvio';
    var path = '/app';

    var data = {

      movil: false,
      lastH: null,
      lastW: null,
      dimMapa: 20,
      users: [],
      render: {

        setMultiBall: function(cant){


            /*{

            }*/

            let colorArr = ['blue', 'yellow', 'red', '#df24d8','gray', 'black', 'white','purple'];

            for(let i =0;i<cant;i++){

              data.users.push({

                name: 'pelota',
                x: null,
                y: null,
                background: colorArr[random(0, (l(colorArr)-1) )]

              });

            }



        },
        setPostRandom: function(){

          for(let user_index of data.users){

            user_index.x = random(1,data.dimMapa);
            user_index.y = random(1,data.dimMapa);

          }

        },
        appendBall: function(){


          for(let user_index of data.users){

            append('.mapa',`



                    <div class='abs ball' style='

                        width: `+(s('.mapa').clientHeight/data.dimMapa)+`px;
                        height: `+(s('.mapa').clientHeight/data.dimMapa)+`px;
                        top: `+((s('.mapa').clientHeight/data.dimMapa)*(user_index.y-1))+`px;
                        left: `+((s('.mapa').clientHeight/data.dimMapa)*(user_index.x-1))+`px;
                        background: `+user_index.background+`;
                        border-radius: 50%;

                    '>


                    </div>

            `);

          }

        }

      }

    };

    //----------------------------------------------------------------
    //----------------------------------------------------------------

    console.log('home init');

    append('body', `

    <br>
    <br>

      <div class='in mapa'>



      </div>

    `);

    data.render.setMultiBall(15);
    data.render.setPostRandom();
    data.render.appendBall();

    //----------------------------------------------------------------
    //----------------------------------------------------------------

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


    rr();
    setInterval(function(e){
      rr();
    }, 100);


  })());

  </script>

</body>

</html>
