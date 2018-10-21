<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=inscription', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
