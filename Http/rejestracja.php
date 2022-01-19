<head>
<title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
body {
  background-color: coral;
}
</style>
</head>
<body>
<div id="container">
<br>
<center>
<form role="form" method="post" action="rejestr.php">
      <div class="form-group row">
        <label for="inputUser" class="col-sm-2 col-form-label">Login</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputUser" name="login" placeholder="Login">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Hasło</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputUser" name="password" placeholder="Hasło">
        </div>
      </div>
	 <div class="form-group row">
        <label for="inputUser" class="col-sm-2 col-form-label">imie</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputUser" name="imie" placeholder="imie">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">nazwisko</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputUser" name="nazwisko" placeholder="nazwisko">
        </div>
      </div>
	  <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">e-mail</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputUser" name="email" placeholder="e-mail">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <input type="submit" value="Zarejestruj się" name="submit" class="btn btn-primary"/>
        </div>
      </div>
    </form>

</center>
</div>
</body>