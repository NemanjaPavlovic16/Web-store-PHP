<?php
session_start();
?>
<?php
require_once 'artikal.php';

$art = new Artikal();
?>
<!doctype html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="javascript.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <title>MyPC</title>
   
  </head>
  
  <body> <?php $_SESSION['username']="<a href='ulogujse.php'>Uloguj se</a>"; $re="" ?>
            <?php
    $mysqli = new mysqli("127.0.0.1", "root","","projekat");
    if($mysqli->error)
    {
        die("Greska" . $mysqli->error);
    }
    if(isset($_POST["dugme"])){
    $upit = "select username from klijent where username = '".$_POST["username"]."'";     
    $rez = $mysqli->query($upit);
    if($rez->num_rows > 0){
        echo "<script>registracija2();</script>";
           
    }
    else{
        $upit2 = "insert into klijent(username, password, telefon, emial)
               values('".$_POST["username"]."','".$_POST["password"]."','".$_POST["telefon"]."','".$_POST["email"]."')";          
        $r = $mysqli->query($upit2);
        if($r){
        echo "<script>registracija();</script>";
      }  }  } 
    ?>
      <?php $mysqli = new mysqli("127.0.0.1", "root","","projekat");
    if($mysqli->error)
    {
        die("Greska" . $mysqli->error);
    }
    if(isset($_POST["dugme1"])){
    $upit = "select username from klijent where username = '".$_POST["username"]."'";     
    $rez = $mysqli->query($upit);
    if($rez->num_rows > 0){
        $_SESSION['username']=$_POST['username'];         
    }
 else {
    echo "<script>nemakorsina()</script>"; 
    }}?>
      
      <form method="post" action="#" onsubmit="<?php $art->dodaj(); $art->brisi();?>">
      <div class="container">
          <div class="content">
    <div class="header">
        <a href="#"><img src="img/MyPC.png" id="slika" oncl></a>
        <div class="header-content">
           
   <ul class="nav nav-pills">
       <li class="nav-item">
    <a class="nav-link active" href="#" id="pocetna">Pocetna</a>
  </li>
         <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="proizvodi">Proizvodi</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Desktop računari</a>
    </div>
  <li class="nav-item">
     
  </li>
</ul>
            <div class="reg">
                <label id="labelae"><a id="re" href="registrujse.php">Registruj se</a><?php echo "<a href='#'>".$_SESSION["username"]."</a>"?></label>
            </div>
        </div>
    </div>
              <form method="get" action="#"> <div class="korpa"><div class="mojakorpa"><img src="img/Korpa.jpg" id="korpa"><label id="korpatekst">Moja korpa</label><?php echo $art->korpa() ?><input type="submit" id="dugme" value="Naruči"></div></form>
              </div>
              <h3 id="Naslov">Desktop računari</h3>
              <div class="proizvodi">
                  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="img/PC1.jpg" alt="..." class="proizvod">
      <div class="caption">
          <h4>PC Aurora</h4>
          <p class="opis"> RYZEN 3 AMD Ryzen 3, 8GB DDR4 2400 MHz, 1TB HDD, GeForce GTX 1050 Ti</p>
          <div class="cena"<label class="cenatekst">Cena:</label><label class="cenatekst">25000</label></div>
          <p><input type="submit" value="Dodaj u korpu" class="dugmedodaj" name="submit1" onclick=""></p>
      </div>
    </div>
  </div>
</div>
                          <div class="row2">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail2">
        <img src="img/PC2.jpg" alt="..." class="proizvod2">
      <div class="caption">
          <h4>PC Prime</h4>
          <p class="opis"> i299 Intel® Pentium® Processor, 8GB DDR4 2400 MHz, 1TB HDD, Integrisana HD 610</p>
          <div class="cena"<label class="cenatekst">Cena:</label><label class="cenatekst">30000</label></div>
        <p><input type="submit" value="Dodaj u korpu" class="dugmedodaj" name="submit2"></p>
      </div>
    </div>
  </div>
</div>
                          <div class="row3">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail3">
        <img src="img/PC3.jpg" alt="..." class="proizvod3">
      <div class="caption">
          <h4>PC Masterbox</h4>
          <p class="opis"> Intel® Pentium® Processor, 8GB DDR4 2400 MHz, 1TB HDD, GeForce GTX 1050 Ti</p>
          <div class="cena"<label class="cenatekst">Cena:</label><label class="cenatekst">35000</label></div>
        <p><input type="submit" value="Dodaj u korpu" class="dugmedodaj" name="submit3"></p>
      </div>
    </div>
  </div>
</div>
                                       <div class="row4">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail4">
        <img src="img/PC4.jpg" alt="..." class="proizvod4">
      <div class="caption">
          <h4>PC Standard</h4>
          <p class="opis"> AMD APU E2 serija, 4GB DDR3 1600 MHz, 1TB HDD, Integrisana AMD Radeon HD 8280</p>
          <div class="cena"<label class="cenatekst">Cena:</label><label class="cenatekst">40000</label></div>
        <p><input type="submit" value="Dodaj u korpu" class="dugmedodaj" name="submit4"></p>
      </div>
    </div>
  </div>
</div>
        
      </form>
               <div class="footer">
    <footer class="page-footer font-small blue pt-4 mt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">O nama</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Donec fermentum diam sollicitudin felis rutrum, sit amet imperdiet nisl luctus.
              Sed pretium efficitur augue vel aliquam. Vivamus sed lectus commodo, aliquet elit quis, elementum massa.
              Fusce consectetur urna et quam eleifend consequat. Quisque eget quam auctor, lacinia risus vel, imperdiet libero.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Kontak</h5>

            <ul class="list-unstyled">
              <li>
                  <p>011/123456</p>
              </li>
              <li>
                <a href="#!">office@MyPC.com</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Pratite nas!</h5>

            <ul class="list-unstyled">
              <li>
              <a href="#" class="fa fa-facebook"></a>
              </li>
            </ul>
          </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MyPC.com</a>
    </div>
  </footer>
    </div>
    </div>
      </div>
     <?php {
     $mysqli = new mysqli("127.0.0.1", "root","","projekat");
    if($mysqli->error)
    {
        die("Greska" . $mysqli->error);
    }
   
    $upit = "select ime, cena from proizvod order by ime ASC";     
    $rez = $mysqli->query($upit);
    if($rez->num_rows > 0){
       while($row = $rez->fetch_assoc()){
          
           echo $row['ime']."".$row['cena'];
                    
       }         
    }
     }    
?>
          <div class="col-md-4">
              <form method="post" action="index.php?action=add&ime=<?php echo $row['ime'];?>"></form>
          </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
