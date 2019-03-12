<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/madlips.css">
    <meta charset="utf-8">
    <title>mad lips</title>
  </head>
  <body>

  <div class="center">


    <h1>Mad Lips</h1>


    <div class="menu">
      <a href="er heerst paniek.php">er heerst paniek...</a>
      <a href="onkunde.php">onkunde</a>
    </div>
    <div class="form">
      <h3>Er heerst paniek...</h3>

      <?php
      if (isset($_POST['submit'])) {

       ?>
       <p>Er heerst paniek in het koninkrijk <?php echo $_POST['land']; ?>. Koning <?php echo $_POST['spijbel']; ?> is ten einde raad en als koning <?php echo $_POST['spijbel']; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST['person']; ?>.</p>
       <p>"<?php echo $_POST['person']; ?>! Het is een ramp! Het is een schande!"</p>
       <p>"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"</p>
       <p>"Mijn <?php echo $_POST['dier']; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST['toy']; ?> voor hem gekocht!"</p>
       <p>"Majesteit, uw <?php echo $_POST['dier']; ?> komt vast vanzelf week terug?"</p>
       <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['bezig']; ?> leren?"</p>
       <p>"Maar Sire, daar kunt u toch uw <?php echo $_POST['kopen']; ?> voor gebruiken."</p>
       <p>"<?php echo $_POST['person']; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
       <p>"<?php echo $_POST['verveel']; ?>, Sire."</p>

     <?php } else { ?>
      <form class="" action="er heerst paniek.php" method="post">
        <p>welke dier zou je nooit als huisdier willen hebben?<input type="text" name="dier" value="" size="25"></p>
        <p>Wie is de belangrijkste persoon in je leven?<input type="text" name="person" value="" size="25"></p>
        <p>In welk land zou je graag willen wonen?<input type="text" name="land" value="" size="25"></p>
        <p>Wat doe je als je je verveelt?<input type="text" name="verveel" value="" size="25"></p>
        <p>Met welk speelgoed speelde je als kind het meest?<input type="text" name="toy" value="" size="25"></p>
        <p>Bij welke docent spijbel je het liefst?<input type="text" name="spijbel" value="" size="25"></p>
        <p>Als je € 100.00,- had, wat zou je dan kopen?<input type="text" name="kopen" value="" size="25"></p>
        <p>Wat is je favoriete bezigheid?<input type="text" name="bezig" value="" size="25"></p>
        <input class="submit" type="submit" name="submit" value="versturen">
      </form>
    <?php } ?>
    </div>
    <footer>
      <p>Deze website is gemaakt door Marco Spaans.</p>
    </footer>
  </div>

  </body>
</html>
