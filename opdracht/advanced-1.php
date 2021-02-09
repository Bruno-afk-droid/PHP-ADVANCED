<!DOCTYPE html>
<html>
<body>
    <?php $kleuren = array("red", "blue", "green", "black", "brown");
            function maakRij($A,$AV){
              echo "<tr>";
             
              echo "<th>$A</th>";
              echo "<th>$AV</th>";
              echo "</tr>";
          }
          ?>
    <form action="advanced-2.php" method="POST">

         <h4>tabelranddikte (px): <input type="text" name="tabelranddikte"></h4>
         <h4>cel-pading (px): <input type="text" name="cel-pading"></h4>

        <label for="colors1">Achtergrondkleur:</label>
        <select name="colors1" id="colors1">
          
          <?php foreach($kleuren as $value)
          echo '<option value='.$value.'>'.$value.'</option>';
          ?>

        </select>
        </label>
        <br><br>

        <label for="colors2">Textkleur:</label>
        <select name="colors2" id="colors2">
          
          <?php foreach($kleuren as $value)
          echo '<option value='.$value.'>'.$value.'</option>';
          ?>

        </select>
        <br><br>
        </label>

        <input type="submit" value="Submit">
      </form>
</body>
</html>