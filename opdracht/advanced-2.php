<!DOCTYPE html>
<html>
    <head>
    <style>
        body{
            <?php echo "background-color:{$_POST['colors1']}"?>
        }
        table, th, td {
            <?php echo "border:{$_POST['tabelranddikte']}px solid black;" ?>
        }
        th, td{
            <?php echo "padding:{$_POST['cel-pading']}em;";
             echo "color:{$_POST['colors2']}";
            ?>
        }
        p{
            <?php echo "color:{$_POST['colors2']}";?>
        }

    </style>
    </head>
<body "background-color:red">

<table>
    <thead>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
    </thead>
    <?php $gegevens = array("Naam"=>"Piet Pietersen","Leeftijd"=>"17","Klas"=>"9G","Muziek"=>"Hard Rock","Merk fiets"=>"Batavus","Woonplaats"=>"Amstelveen","Eten"=>"Bloemkool");
      
        
      
        echo "<tbody>";
        
        foreach($gegevens as $A => $AV)
        maakRij($A,$AV);

       echo "</tbody>";

       ?>

</table>

<?php echo "background-color:{$_POST['colors1']}"?>
</body>
</html>