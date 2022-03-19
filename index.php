<?php

  require_once("globals.php");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Perhekalenteri</title>
    <link rel="stylesheet" href="styleform.css">
  </head>
  <body>
    <header>
      <h1>Perhekalenteri</h1>
    </header>
    <section>

      <form action="kalenteri.php" method="GET" target="_blank">

      <div class="flex-container">
        
        <div class="kentta">
        <div class="vali">Vuosi: </div>
         <input type="number" name="year" value="<?php echo date("Y"); ?>"><br></div>

        <div class="kentta"> 
        <div class="vali"> Kuukausi: </div>
        <select name="month">
        <?php
          foreach($months as $key => $value) {
            echo "<option value='$key'>$value</option>\n";
          }
        ?>
        </select><br></div>

        <div class="kentta">
          <div class="vali"> Otsikkofontti:</div>
        <select name="header">
        <?php
          foreach($headerfonts as $key => $value) {
            echo "<option value='$key'>$value[name]</option>\n";
          }
        ?>
        </select><br></div>

        <div class="kentta"> 
        <div class="vali">Kuva:</div>
        <select name="bgimage">
        <?php
          foreach ($bgimages as $key => $value) {
            echo "<option value='$key'>$value[name]</option>\n";
          }
        ?>
        </select><br></div>

        <div class="kentta">
        <div class="vali">Perheenjäsenet:</div>
        <textarea name="names" rows="5"><?= $defaultnames ?></textarea><br></div>
        


        <div class="vali"><input type="submit" value="Avaa kalenterisivu"></div>

        </div>
      </form>
    </section>
    <footer>
      <hr>
      <div>perhekalenteri by Minä</div>
      
    </footer>
  </body>
</html>
