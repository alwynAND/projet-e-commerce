<php
$config = mysqli_connect(" localhost "," root ","  ","  ");

if (!$config)
    {
        die(" Erreur de connection : " .mysqli_connect_error());
    }
?>