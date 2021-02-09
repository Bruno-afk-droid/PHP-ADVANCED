<!DOCTYPE html>
<html>
<body>

<?php
function rekenUit($n1,$n2,$n3){
    $R=$n1+$n2+$n3;
    return ("als ik de getallen $n1,$n2 en $n3 optel krijg ik $R ");
}
rekenUit(1,2,3);
rekenUit(23,1234,3421);
rekenUit(0,89,23);
?>
<h2><?php echo rekenUit(1,2,3);?></h2>
<h2><?php echo rekenUit(2,23,3);?></h2>
<h2><?php echo rekenUit(4,12,6);?></h2>
</body>
</html>