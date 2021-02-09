<!DOCTYPE html>
<html>
<body>

<?php
function schrijfKleur($kleur){
    echo '<h2><span style="color: '.$kleur.' ;text-align:center;">Deze tekst is in de kleur '.$kleur.' </span></h2>';
}
schrijfKleur('red');
schrijfKleur('green');
schrijfKleur('blue');
schrijfKleur('yellow');
?>

</body>
</html>