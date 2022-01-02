
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



    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a class="navbar-brand" href="index.php">TRANSPOSITION CIPHER</a>
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
        <h2><b>Apa itu Cipher Transposisi?</b></h2>
<p>Cipher transposisi dapat disebut juga sebagai cipher permutasi, karena sebenarnya metode cipher transposisi ini mempermutasikan karakter-karakter plainteks, yaitu dengan menyusun ulang urutan karakter dalam pesan.</p>

<h2><b>Contoh</b></h2>
<p>Contoh cipher transposisi columnar dengan kunci <tt>"KRIPTO"</tt>. Panjang baris yang digunakan adalah
sama dengan panjang kata kunci. Untuk mengenkripsi teks.</p>
 
<pre>aku suka mata  kuliah kriptografi</pre>
<p>Dengan kata kunci <tt>KRIPTO</tt>):</p>

<pre><span style="text-decoration: underline;">K R I P T O</span>
a k u s u k
a m a t a k
u l i a h k
r i p t o g
r a f i x x</pre>

<p>Pada contoh di atas, plaintext telah dipadatkan sehingga pas dengan rapi dalam persegi panjang. Ini dikenal sebagai transposisi kolumnar reguler.
Transposisi kolumnar yang tidak teratur membuat karakter ini kosong, meskipun ini membuat dekripsi sedikit lebih sulit. Kolom sekarang disusun ulang
sedemikian rupa sehingga huruf-huruf dalam kata kunci disusun menurut abjad.</p>

<pre><span style="text-decoration: underline;">I K O P R T</span>
u a k s k u
a a k t m a
i u k a l h
p r g t i o
f r x i a x</pre>

<p>Ciphertext dibacakan di sepanjang kolom:</p>

<pre>uaipfaaurrkkkgxstatikmliauahox</pre>



      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
