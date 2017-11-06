<?php
include 'Student.php';
include 'data.php';

function AddData()
{
    $nl = $_POST["name"];
    $al = $_POST["adresse"];
    $tl = $_POST["tlf"];

    $newStud = new Student();
    $newStud->name = $nl;
    $newStud->adresse = $al;
    $newStud->tlf = $tl;

    Tilføj($newStud);

}







?>