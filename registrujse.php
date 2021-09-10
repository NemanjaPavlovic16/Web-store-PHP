<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style2.css">
    <script type="text/javascript" src="javascript.js"></script>
	
	<title>Forma</title>
</head>
<body>

	<div class="background"></div>
	<div class="container">
		<div class="sadrzaj">
                    <form method="post" action="index.php" class="forma" onsubmit="return upisiIme() && upisiSifru() && upisiTelefon() && upisiEmail()">
				
				<div class="unos">
					<label for="username" class="labela">Username</label>
                                        <input type="username" name="username" class="polje" id="username" placeholder="Username">
                   
                </div>
               
                <div class="unos">
                	<label for="password" class="labela">Password</label>
                	<input type="password" name="password" class="polje" id="password" placeholder="Password">
                
                </div>
              
                	<div class="unos">
                			<label for="email" class="labela">Telephone</label>
				<input type="text" name="telefon" class="polje" id="telefon" placeholder="Tel.">
					
				</div>
			
					<div class="unos">
						<label for="email" class="labela">Email</label>
                                                <input type="email" name="email" class="polje" id="email" placeholder="Email">
					
				</div>
				<div class="robot">
					<label for="zbir" id="brojevi"></label><input type="text" name="zbir" value="" id="zbir">
		</div>
                        <input type="submit" name="dugme" id="dugme" value="Potvrdi" disabled="">                     
			</form>
			<script>sabiranje();</script>


</body>
</html>