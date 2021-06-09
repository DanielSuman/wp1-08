<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Gaming Genres</title>
</head>
<body>
<?php 
$submit = filter_input(INPUT_POST, 'submit');
if(isset($_POST['genres']))
{
$genres = $_POST['genres'];
}
?>
<?php
    if(isset($submit)) {
    echo "formulář byl odeslán... vyplnili jste následující žánry:"; 
    //var_dump($genres);
    foreach ($genres as $genre) 
    {
        echo "</br> $genre";
    }
} 
     else {?>
    <h1>Vyber tvé oblíbené herní žánry</h1>
    <form method="post">
     <input type="checkbox" id="genre1" name="genres[]" value="fps"> <label for="genre1">First Person Shooter</label> </br> 
     <input type="checkbox" id="genre2" name="genres[]" value="horror"> <label for="genre2">Horror</label> </br> 
     <input type="checkbox" id="genre3" name="genres[]" value="sandbox"> <label for="genre3">Sandbox Hry</label> </br> 
     <input type="checkbox" id="genre4" name="genres[]" value="strategy"> <label for="genre4">Strategie</label> </br> 
     <input type="checkbox" id="genre5" name="genres[]" value="RPG"> <label for="genre5">Roleplay Hry</label> </br> 
     <input type="checkbox" id="genre6" name="genres[]" value="racing"> <label for="genre6">Zavodní</label> </br> 
     <input type="checkbox" id="genre7" name="genres[]" value="army"> <label for="genre7">Vojenská tématika</label> </br> 
     <input type="checkbox" id="genre8" name="genres[]" value="occult"> <label for="genre8">Occult tématika</label> </br> 
     <input type="checkbox" id="genre9" name="genres[]" value="2d"> <label for="genre9">2D Skákačky</label> </br> 
     <input type="checkbox" id="genre10" name="genres[]" value="zombie survival"> <label for="genre10">Zombie Survival</label> </br> 
     <input type="checkbox" id="genre11" name="genres[]" value="anime"> <label for="genre11">Anime / Visual Novely</label> </br> 
     <input type="submit" id="submit" name="submit">
    </form>
</body>
</html>
