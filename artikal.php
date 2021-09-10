<?php
class Artikal {
    
    
    private $mysqli, $sql, $id=1;
    
    function __construct(){
       $this->mysqli = new mysqli("127.0.0.1", "root","","projekat");
    if($this->mysqli->error)
    {
        die("Greska" . $mysqli->error);
    }
    }  
    
    public function korpa(){
        
        $upit = "SELECT ime, cena from artikal";
        $rez = $this->mysqli->query($upit);
        
        if ($rez->num_rows > 0) {
            echo "<ol>";
            while ($red = $rez->fetch_assoc()){
                if($red['cena']==25000){
                    echo "<li class='stavka'>".$red['ime'] . " " . $red['cena']."</li>"."<a href='index.php?id=0'onclick='brisi()'><i style='margin-left:105px;margin-top:-40px;size:20px;color:white;float:right;' class='fa fa-trash' aria-hidden='true'></i></a>";
                }
                if($red['cena']==30000){
                    echo "<li class='stavka'>".$red['ime'] . " " . $red['cena']."</li>"."<a href='index.php?id=1'onclick='brisi()'><i style='margin-left:105px;margin-top:-40px;size:20px;color:white;float:right;' class='fa fa-trash' aria-hidden='true'></i></a>";
                }
                if($red['cena']==35000){
                    echo "<li class='stavka'>".$red['ime'] . " " . $red['cena']."</li>"."<a href='index.php?id=2'onclick='brisi()'><i style='margin-left:105px;margin-top:-40px;size:20px;color:white;float:right;' class='fa fa-trash' aria-hidden='true'></i></a>";
                }
                if($red['cena']==40000){
                    echo "<li class='stavka'>".$red['ime'] . " " . $red['cena']."</li>"."<a href='index.php?id=3'onclick='brisi()'><i style='margin-left:105px;margin-top:-40px;size:20px;color:white;float:right;' class='fa fa-trash' aria-hidden='true'></i></a>";
                }
            }
           echo "</ol>";
        } else {
            echo "";
        }
        }
    
    
    public function dodaj(){
        
        if(isset($_POST['submit1'])){
            
            $upit = "insert into artikal(id,ime, cena)
                    "."values ('0','PC Aurora', '25000')";
            $this->mysqli->query($upit);
           echo "<meta http-equiv='refresh' content='0'>";
           
        }
           if(isset($_POST['submit2'])){
            
            $upit = "insert into artikal(id,ime, cena)
                    "."values ('1','PC Prime', '30000')";
            $this->mysqli->query($upit);
           echo "<meta http-equiv='refresh' content='0'>";
           
        }
           if(isset($_POST['submit3'])){
            
            $upit = "insert into artikal(id,ime, cena)
                    "."values ('2','PC Masterbox', '35000')";
            $this->mysqli->query($upit);
           echo "<meta http-equiv='refresh' content='0'>";
          
        }
           if(isset($_POST['submit4'])){
            
            $upit = "insert into artikal(id,ime, cena)
                    "."values ('3','PC Standar', '40000')";
            $this->mysqli->query($upit);
           echo "<meta http-equiv='refresh' content='0'>";
           
        }
      
     
        
        
        
    }
    
    public function brisi(){
        
         if(isset($_GET['id'])){
        
        $upit = "delete from artikal where id = '".$_GET['id']."'";
        $this->mysqli->query($upit);
      
    }
      
    }
    
}
//<ol><li class="stavka"></li><li class="stavka"></li><li class="stavka"></li><li class="stavka"></li><li class="stavka"></li><li class="stavka"></li></ol>
//"<input style='width: 35px;height: 20px;margin-left: 10px;float: right;margin-top:-20px;' type='button' class='brisi' value='Brisi'>";



?>
 
