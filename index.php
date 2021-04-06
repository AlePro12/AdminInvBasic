<?php
require_once "Layout.php";

$layout = new Layout();

$layout->headers();
?>


<nav class="nav-extended indigo">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">DetcSoft InvBasic</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="punto.php">Punto de Venta</a></li>
            <li><a href="index.php">Inventario</a></li>
            <li><a href="FCA.php">Factor De Cambio</a></li>
            <li><a href="repo.php">Reportes</a></li>

        </ul>
    </div>
    <div class="nav-content">
        <ul class="tabs tabs-transparent">
            <li class="tab"><a class="active" href="#test1">Inventario</a></li>
            <li class="tab"><a  href="#test2">Editor</a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="punto.php">Punto de Venta</a></li>
    <li><a href="index.php">Inventario</a></li>
    <li><a href="FCA.php">Factor De Cambio</a></li>
    <li><a href="repo.php">Reportes</a></li>

</ul>


<!-- editor -->
<div id="test2" class="col s12 container">


    <div class="card-panel ">
        <h4>Crear producto</h4>
        <div class="row">
            <form action="actions.php" id="Fo" method="POST">
                <div class="input-field col s6">
                    <input  id="first_name" type="text" name="CODP" class="validate">
                    <label for="first_name">Codigo</label>
                </div>
                <div class="input-field col s6">
                    <input  id="DESCRIP" type="text" name="DESCRIP" class="validate">
                    <label for="DESCRIP">Descripcion</label>
                </div>
                <div class="input-field col s5">
                    <input  id="COSTO" onblur="RefreshCampos_Costo(this)"  type="text" name="COSTO" class="validate">
                    <label for="COSTO">Costo</label>
                </div>
                <div class="input-field col s2">
                    <input  id="UTIL" type="text" onchange="RefreshCampos_Util(this)" name="UTIL" class="validate">
                    <label for="UTIL">%</label>
                </div>
                <div class="input-field col s5">
                    <input  id="PF1" type="text" name="PF1" class="validate">
                    <label for="PF1">Precio final</label>
                </div>
            </form>
            <script>
                function RefreshCampos_Costo(e){
                     UtilNew = 0;
                     CostoNew = 0;
                     PreciofNew = 0;
                      Preciof = $('#PF1').val();
                     Costo = e.value;
                    Util =  $('#UTIL').val();
                    console.log(Costo);
                    if (Costo == ""){
                        // Costo = 0;
                    }else{
                       // Costo = parseFloat(accounting.unformat(Costo));
                    }
                    if (Util == ""){
                        Util = 0 ;
                    }else{
                        Util = parseFloat(accounting.unformat( Util));
                    }if (Preciof == ""){
                         Preciof = 0;
                    }else{
                        Preciof = parseFloat(accounting.unformat( Preciof));
                    }
                    PreciofNew =parseFloat(Costo) + (parseFloat(Costo) * parseFloat(Util) / 100);
                    //UtilNew =


                    $('#COSTO').val(accounting.formatNumber(Costo));
                    $('#UTIL').val(accounting.formatNumber(UtilNew));
                    $('#PF1').val(accounting.formatNumber(PreciofNew));
                }
                function RefreshCampos_Util(e){
                    UtilNew = 0;
                    CostoNew = 0;
                    PreciofNew = 0;
                    Preciof = $('#PF1').val();
                    Costo = $('#COSTO').val();
                    Util =  e.value;
                    console.log(Costo);

                    if (Costo == ""){
                         Costo = 0;
                    }else{
                        Costo = parseFloat(accounting.unformat(Costo));
                    }
                    if (Util == ""){
                        //Util = 0 ;
                    }else{
                       // Util = parseFloat(accounting.unformat( Util));
                    }if (Preciof == ""){
                        Preciof = 0;
                    }else{
                        Preciof = parseFloat(accounting.unformat( Preciof));
                    }

                    PreciofNew =(parseFloat(Costo) * parseFloat(Util) / 100);



                    $('#COSTO').val(accounting.formatNumber(Costo));
                    $('#UTIL').val(accounting.formatNumber(Util));
                    $('#PF1').val(accounting.formatNumber(PreciofNew));
                }















                function RefreshCampos_Costo(){
                     UtilNew = 0;
                     CostoNew = 0;
                     PreciofNew = 0;
                      Preciof = $('#COSTO').val();
                      Costo = $('#UTIL').val();
                     Util =  $('#PF1').val();

                    PreciofNew = Costo + (Costo / Util * 100);


                    //$('#COSTO').val(CostoNew);
                    //$('#UTIL').val(UtilNew);
                    $('#PF1').val(PreciofNew);
                }
            </script>
            <a onclick="$('#Fo').submit()" class="waves-effect  btn light-blue darken-4">Guardar</a>

        </div>



    </div>


</div>




<!-- inv -->


<div id="test1" class="col s12">Test 2</div>




<!--JavaScript at end of body for optimized loading-->
<script
>  $(document).ready(function(){
        $('.sidenav').sidenav();
    });
    $(document).ready(function(){
        $('.tabs').tabs();
    });
</script>
<?php

$layout->Foot();


//    <div class="card-panel light-blue darken-4"><h3 style='color:white;'>Usuarios</h3></div>
