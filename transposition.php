<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KRIPTOGRAFI MENU</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <script src="transposisi.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TRANSPOSITION CIPHER</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="transposition.php">Enkripsi</a></li>
            <li><a href="dekripsi.php">Dekripsi</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

   <div class="starter-template" style="text-align:left;">
	<table class="table table-hover" style="width:80%; padding:100px;">
		<tr>
			<td colspan="3">
				<h1 style="text-align:center;">TRANSPOSITION CIPHER</h1>
			</td>
		</tr>
		<tr>
			<td>PlainText</td>
			<td>:</td>
			<td>
				<textarea id="p" class="form-control" name="p" rows="4" cols="50" placeholder="Masukan PlainText"></textarea>
			</td>
		</tr>
		<tr>
			<td>Keyword</td>
			<td>:</td>
			<td>
				<input id="key" placeholder="Keyword" class="form-control" name="key" size="10" placeholder="kunci" type="text"> 
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input id="pc" name="pc"  size="1" value="x" type="hidden">
				<input name="btnEn"  class="btn btn-primary" value="Encrypt" onclick="Encrypt()" type="button"> 
			</td>
		</tr>
		<tr>
			<td>CipherText</td>
			<td>:</td>
			<td>
				<textarea id="c" class="form-control" name="c" rows="4" cols="50" placeholder="Hasil CipherText"></textarea>
			</td>
		</tr>
	</table>
</div>
</div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
