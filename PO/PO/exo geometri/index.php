<?php
require_once "rectangle.php";
require_once "cercle.php";
require_once "triangle.php";
require_once "parallélépipède.php";
require_once "pyramide.php";
require_once "sphère.php";
$rectangle1 = new Rectangle(6.5,4);

echo "******************";
echo "<br>";
echo "LE CARRE ";
echo "<br>";
echo "******************";
echo "<br>";

$rectangle1->affichage();

$rectangle1->perimetre();
echo "<br>";

$rectangle1->airecarre();
echo "<br>";

$rectangle1->etrecarre();
echo "<br>";

$cercle1 = new Diametre(2.8);
echo "******************";
echo "<br>";
echo "LE CERCLE ";
echo "<br>";
echo "******************";
echo "<br>";
$cercle1->diametre();
echo "<br>";

$cercle1->perimetrecercle();
echo "<br>";

$cercle1->aireceercle();
echo "<br>";

$triangle1 = new Triangle(3,4);
echo "******************";
echo "<br>";
echo "LE TRIANGLE ";
echo "<br>";
echo "******************";
echo "<br>";

$triangle1->affitriangle();

$triangle1-> perimetretriangle();
echo "<br>";
$triangle1->airetriangle();
echo "<br>";

$para1 = new Para(6.5,4,5);
echo "******************";
echo "<br>";
echo "LE PARALLELEPIPEDE ";
echo "<br>";
echo "******************";
echo "<br>";
$para1->airepara();
echo "<br>";
$para1->volumepara();
echo "<br>";
$pyra = new Pyramide(3,4);
echo "******************";
echo "<br>";
echo "LA PYRAMIDE ";
echo "<br>";
echo "******************";
echo "<br>";
$pyra->airp();
echo "<br>";
$pyra->volumep();
echo "<br>";
$sphere = new Sphere(2.8);
echo "******************";
echo "<br>";
echo "LA SPHERE ";
echo "<br>";
echo "******************";
echo "<br>";
$sphere->airesp();
echo "<br>";
$sphere->volumesp();
echo "<br>";


