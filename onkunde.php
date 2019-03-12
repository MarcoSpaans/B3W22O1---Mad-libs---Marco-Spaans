<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/madlips2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>mad lips</title>
  </head>
  <body id="background">

  <div class="center">


    <h1 id="head">Mad Lips</h1>


    <div class="menu">
      <a href="er heerst paniek.php">er heerst paniek...</a>
      <a href="onkunde.php">onkunde</a>
    </div>
    <div id="form" class="container">
      <h3>Onkunde</h3>

      <?php
      if (isset($_POST['submit'])) {

       ?>
       <p>Er zijn veel mensen die niet kunnen <?php echo $_POST['willen'] ?>. Neem nou <?php echo $_POST['person'] ?>. Zelfs met de hulp
         van een <?php echo $_POST['vakantie'] ?> of zelfs <?php echo $_POST['getal'] ?> kan <?php echo $_POST['person'] ?> niet <?php echo $_POST['willen'] ?>. Dat heeft niet te maken met
          een gebrek aan <?php echo $_POST['best'] ?>, maar met een te veel aan <?php echo $_POST['worst'] ?>. Te veel <?php echo $_POST['worst'] ?>
          leidt tot <?php echo $_POST['erg'] ?> en dat is niet goed als je wilt <?php echo $_POST['willen'] ?>. Helaas voor <?php echo $_POST['person'] ?>.</p>

     <?php } else { ?>
      <form action="onkunde.php" method="post">
        <div class="form-group">
          <label for="willen">Wat zou je graag willen kunnen?</label>
          <input type="text" name="willen" id="willen" class="form-control" value="">
        </div>
        <div class=" form-group">
          <label for="person">Met welke persoon kun je goed opschieten?</label>
          <input type="text" class="form-control" id="person" name="person" value="">
        </div>
        <div class="form-group">
          <label for="getal">Wat is je favoriete getal?</label>
          <input type="text" name="getal" id="getal" class="form-control" value="">
        </div>
        <div class="form-group">
          <label for="vakantie">Wat heb je altijd bij je op vakantie gaat?</label>
          <input type="text" class="form-control" id="vakantie" name="vakantie" value="">
        </div>
        <div class="form-group">
          <label for="best">Wat is je beste persoonlijke eigenschap?</label>
          <input type="text" class="form-control" id="best" name="best" value="">
        </div>
        <div class="form-group">
          <label for="worst">Wat is je slechtste persoonlijke eigenschap?</label>
          <input type="text" class="form-control" id="worst" name="worst" value="">
        </div>
        <div class="form-group">
        <label for="erg">Wat is het ergste dat je kan overkomen?</label>
        <input type="text" class="form-control" id="erg" name="erg" value="">
        </div>
        <input class="btn btn-primary" id="submit" type="submit" name="submit" value="versturen">
      </form>
    <?php } ?>
    </div>
    <footer>
      <p>Deze website is gemaakt door Marco Spaans.</p>
    </footer>
  </div>

  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</html>
