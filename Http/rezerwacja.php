
<head>
<title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="row">
<div class="col" style="background-color:yellow;"><h1>
<center>
KINO BOLZGA<h1>
</center>
</div>
 <div class="w-100"></div>
  <div class="col" style="background-color:red;">
  <center>
 <br>
 <h6> Rezerwacja <h6>
 <br>
 <form role="form" method="post" action="rezerwa.php">
  <div class="form-group row">
        <label for="inputUser" class="col-sm-2 col-form-label">Film</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputUser" name="film" placeholder="Tytuł">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Data</label>
        <div class="col-sm-10">
          <input type="tekst" class="form-control" id="inputUser" name="data" placeholder="Termin">
        </div>
      </div>
	 <div class="form-group row">
        <label for="inputUser" class="col-sm-2 col-form-label">Miejsce</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputUser" name="miejsce" placeholder="miejsce">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <input type="submit" value="Zarezerwuj" name="submit" class="btn btn-primary"/>
        </div>
      </div>
    </form>
   </div>
  <div class="col" style="background-color:blue;">.col-sm-8</div>
   <div class="w-100"></div>
<div class="col" style="background-color:green;"><h1>
<center>
<h1>TEST PHP<h1>
<?php 	
session_start();
 echo $_SESSION["nazwisko"];
 echo "            ";
 echo $_SESSION["imie"];
  echo "            ";
 echo $_SESSION['emial'];
?><h1>
</center>
</div>
<div class="w-100"></div>
<div class="col" style="background-color:magenta;"><h1>
<center>
KINO 1BOLZGA<h1>
</center>
</div>

</div>
</body>
</html>