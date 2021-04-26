<?php


class Core
{

    public function Layout(){
        ?>




        <?php



}
public function Databasesd(){

$definicionTabla = "CREATE TABLE IF NOT EXISTS INV(
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	CODP TEXT NOT NULL,
	DESCRIP TEXT NOT NULL,
	PRECIOF1 TEXT NOT NULL,
	COSTO TEXT NOT NULL,
	UTIL TEXT NOT NULL,
	EXIST TEXT NOT NULL

);";
$resultado = $this->DB()->exec($definicionTabla);

    $definicionTabla = "CREATE TABLE IF NOT EXISTS VEN(
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	NOMBRE TEXT NOT NULL,
	MON TEXT NOT NULL,
	CI TEXT NOT NULL,
	GAN TEXT NOT NULL
);";
    $resultado = $this->DB()->exec($definicionTabla);

    $definicionTabla = "CREATE TABLE IF NOT EXISTS VENDET(
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	idtop INT NOT NULL,
	CODP TEXT NOT NULL,
	DESCRIP TEXT NOT NULL,
	COSTO TEXT NOT NULL,
	PRECIOF1 TEXT NOT NULL
);";
    $resultado = $this->DB()->exec($definicionTabla);
}
public function DB(){
    $baseDeDatos = new PDO("sqlite:" . __DIR__ . "/DETCBASIC.db");
    $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $baseDeDatos;
}


}
