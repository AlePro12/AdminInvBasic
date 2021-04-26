<?php


class Layout
{

    public function headers(){
?>
        <!DOCTYPE html>
<html>
<head>

    <script type="text/javascript" src="js/accounting.min.js"></script>

    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="css/jquery-ui.js"></script>
    <link href="css/jquery-ui.css" rel="stylesheet">
</head>

<body>

  <?php
    }
    public function Foot(){
        ?>

        <script type="text/javascript" src="js/materialize.min.js"></script>

        </body>
        </html>

  <?php
    }

    public function ProdSearch($Accion){
?>





        <script>
            URLd = "API.php?Type=Search&Query=";
            // on window resize run function
            $(window).resize(function () {
                // fluidDialog();
                if ($(window).width() < 800) {


                    $('.ui-dialog').css({
                        'width': $(window).width(),
                        'height': $(window).height(),
                        'left': '0px',
                        'top':'0px'
                    });
                }
            });

            // catch dialog if opened within a viewport smaller than the dialog width
            $(document).on("dialogopen", ".ui-dialog", function (event, ui) {
                //fluidDialog();
                if ($(window).width() < 800) {


                    $('.ui-dialog').css({
                        'width': $(window).width(),
                        'height': $(window).height(),
                        'left': '0px',
                        'top':'0px'
                    });
                }

            });function fluidDialog() {
                var $visible = $(".ui-dialog:visible");
                // each open dialog
                $visible.each(function () {
                    var $this = $(this);
                    var dialog = $this.find(".ui-dialog-content").data("ui-dialog");
                    // if fluid option == true
                    if (dialog.options.fluid) {
                        var wWidth = $(window).width();
                        // check window width against dialog width
                        if (wWidth < (parseInt(dialog.options.maxWidth) + 50))  {
                            // keep dialog from filling entire screen
                            $this.css("max-width", "90%");
                        } else {
                            // fix maxWidth bug
                            $this.css("max-width", dialog.options.maxWidth + "px");
                        }
                        //reposition dialog
                        dialog.option("position", dialog.options.position);
                    }
                });

            }

            //showAndroidToast("Farmacia La H / lic. Activada")

            function myFunc(myObj) {
                var x, txt = "";
                document.getElementById('txtHint').innerHTML = ""

                var select = document.getElementById("txtHint");

                for(var i = 0; i < myObj.length; i++) {


                    DESCRIP = myObj[i].DESCRIP;
                    CODP = myObj[i].CODP;
                    //DolarPrice =(parseFloat( myObj[i].Preciof1 )/ ).toFixed(2) ;

                    PRECIOF1 = myObj[i].PRECIOF1;
                    EXIST = myObj[i].EXIST;
                    COSTO = myObj[i].COSTO;
                    UTIL = myObj[i].UTIL;

                //    var opt = myObj[i].Codp;
                    var el = document.createElement("a");
                    el.href = "#"+DESCRIP;
                    el.style = "color: black;";

                        SEP = "'";
                    el.innerHTML = '  <div class="card-panel grey lighten-5" onclick="MOD('+SEP+DESCRIP+SEP+','+SEP+CODP+SEP+','+SEP+PRECIOF1+SEP+','+SEP+UTIL+SEP+','+SEP+COSTO+SEP+','+SEP+EXIST+SEP+');"> <h6>'+ DESCRIP +' </h6><b><label>Codigo</label></b> <br> '+ CODP +'<br> <b><label>Precio 1:</label></b> <br>'+ PRECIOF1 +' Bs.S || <b>$</b><br> <b><label>Existencia: </label></b><br> '+ EXIST +'<br>  </div>';
//el.value = myObj[i].Codp;

                    select.appendChild(el);



                }

            }


            function showCustomer(str)
            {
                console.log(str);
                if (str=="")
                {
                    document.getElementById("txtHint").innerHTML="";
                    return;
                }



                var x = document.getElementById("BOD").checked;
                var s = document.getElementById("ss").checked;
                var bnc = document.getElementById("BNC").checked;
                if (x == true ) {
                    document.getElementById('txtHint').innerHTML = ' <div class="center-align" style="margin-top:100px"><div class="preloader-wrapper active"><div class="spinner-layer spinner-red-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>';
                    console.log('sfc');

                    // xmlhttp.open("GET",URLd+str,true);

                    var s = document.createElement("script");
                    s.src = URLd+str+"&SQ=2";
                    document.getElementById('txtHint').appendChild(s);

                }else{
                    if (bnc == true ) {
                        document.getElementById('txtHint').innerHTML = ' <div class="center-align" style="margin-top:100px"><div class="preloader-wrapper active"><div class="spinner-layer spinner-red-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>';
                        console.log('sd');

                        // xmlhttp.open("GET",URLd+str,true);

                        var s = document.createElement("script");
                        s.src = URLd+str+"&SQ=1";
                        document.getElementById('txtHint').appendChild(s);

//xmlhttp.send();
                    }else{
                        if (s == true ) {
                            document.getElementById('txtHint').innerHTML = ' <div class="center-align" style="margin-top:100px"><div class="preloader-wrapper active"><div class="spinner-layer spinner-red-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>';

                            // xmlhttp.open("GET",URLd+str,true);

                            var s = document.createElement("script");
                            s.src = URLd+str+"&SQ=3";
                            document.getElementById('txtHint').appendChild(s);

                        }
                    }
                }

            }
        </script>
        <style type="text/css">
            .body{
                font-family: 'Roboto';
            }
        </style>
        </head>
        <body>


        <script>



            $( "#<?php echo $Accion;?>").click(function() {
                $( "#dialog" ).dialog({
                    width: 900,
                    height: 700,
                    modal: true,
                    fluid: true, //new option
                    resizable: false
                });

            });

        </script>


        <div id="dialog" title="INVFORM" style="display: none;">










            <div class = "row">
                <!--    <div class = "col s12">
                      <ul class = "tabs">
                         <li class = "tab col s3"><a class = "active" href = "#unread">Buscar</a></li>
                         <li class = "tab col s3"><a  href = "#inbox">Sgr De Compras </a></li>
                         <li class = "tab col s3"><a href = "#inbox1">Ventas</a></li>
                         <li class = "tab col s3"><a href = "#AA">Ult. Operaciones</a></li>



                      </ul>
                   </div>-->

                <div id = "unread" class = "">




                    <div class="card-panel   indigo darken-4 ">

                        <h6 style="Color: #fff;">Buscar Productos</h6></div>

                    <div class="row">


                        <div class="col s12" >

                            <div class="row">
                                <div class="input-field col s10">
                                    <input id="cl" name="d" autocomplete="off" class="materialize-textarea "   autofocus>

                                    <text for="dds"></text>

                                    <p>
                                        <label>
                                            <input class="with-gap" name="T" id="BNC" type="radio" checked />
                                            <span>Descripcion</span>
                                        </label>

                                        <label>
                                            <input class="with-gap" name="T" id="BOD" type="radio"  />
                                            <span>Codigo</span>
                                        </label>

                                        <label>
                                            <input class="with-gap" name="T" id="ss" type="radio"  />
                                            <span>Des Avanzada</span>
                                        </label>
                                    </p>






                                    <button class="btn  red darken-4 " onclick="showCustomer(document.getElementById('cl').value)" name=""> Buscar</button>

                                    <script>
                                        var input = document.getElementById("cl");

                                        // Execute a function when the user releases a key on the keyboard
                                        input.addEventListener("keyup", function(event) {
                                            // Number 13 is the "Enter" key on the keyboard
                                            if (event.keyCode === 13) {
                                                // Cancel the default action, if needed
                                                event.preventDefault();
                                                // Trigger the button element with a click
                                                showCustomer(input.value);



                                            }
                                        });</script>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="txtHint">





                    </div>

                    <label>QUERIER Developed by AP(AlejandroS) <i>DiosEnTiConfioC.A</i> <b> DETCSOFT-INVBASIC </b> </label>


                </div>




            </div>


















        </div>



        <?php

    }


}