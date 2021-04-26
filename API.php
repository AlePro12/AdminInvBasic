<?php
require_once "Core.php";
require_once "Layout.php";
$Core = new Core();




switch ($_GET['Type']){
    case "Search":
        //ServiceQuery Lite [SQLITE]
        $Query = $_GET['Query'];

        switch ($_GET['SQ']){
            case "1":
                $SQL= "SELECT * FROM inv where DESCRIP LIKE '$Query%';";
                break;
            case "2":
                $SQL= "SELECT * FROM inv where CODP LIKE '$Query%';";
                break;
            case "3":
                $SQL= "SELECT * FROM inv where DESCRIP LIKE '%$Query%';";
                break;
        }

        $resultado = $Core->DB()->query($SQL);
        $Result = $resultado->fetchAll(PDO::FETCH_OBJ);
        echo "myFunc(".json_encode($Result).");";
    Break;
    Case "QRY":
        $layout = New Layout();
        $layout->ProdSearch("AP");
        Break;
}


