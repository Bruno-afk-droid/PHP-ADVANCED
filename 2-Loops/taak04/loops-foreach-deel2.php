<?php

$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

?>
<!DOCTYPE html>
<html>
<form action="/action_page.php">
  <label for="klassen">ik zit in klas:</label>
  <select name="klassen" id="klassen">
    <?php foreach($klassen as $Klas) 
        echo "<option value=$Klas>$Klas</option>";
    ?>
    

  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
