var temp=0;
function sabiranje(){
	

	var a = Math.floor(Math.random() * 9) + 1;
	var b = Math.floor(Math.random() * 9) + 1;
	temp = a + b;
	document.getElementById("brojevi").innerHTML = a + " + " + b + " = ";

		setInterval(function(){
proveri();
    }, 5);

	setInterval(function(){
sabiranje();
    }, 10000);
}
function proveri(){
	var zbir = parseInt(document.getElementById("zbir").value);
	

if(!isNaN(zbir))
{
    if(zbir === temp)
   {
		
	document.getElementById("dugme").removeAttribute("disabled");
	
}
	else{	
		document.getElementById("dugme").setAttribute("disabled", "disabled");	
	
}
}
else{

	document.getElementById("dugme").setAttribute("disabled", "disabled");
	
}
}


function upisiIme()
{
	var ime=document.getElementById("username").value;
if(ime === '' || ime === null || isNaN(ime) === false)
{
	alert("Morate uneti username");
return false;
}
else{
 var test = /^[a-zA-Z]+$/;
  var rez = ime.match(test);
  if(rez!=null)
  {
      
  	return true;
  }
  else{
alert("Morate uneti ispravan username samo od slova");
return false;}

}
}
function upisiSifru()
{
var sifra=document.getElementById("password").value;
if(sifra === '' || sifra === null)
{
alert("Morate uneti sifru");
return false;	
}
else
return true;
}
function upisiEmail(){
	var test = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	var email = document.getElementById("email").value;
	var rez = email.match(test);
	if(rez!=null){	
	return true;}
	else{
		alert("Nije u redu");
	
	return false;
}
}
function upisiTelefon()
{
	var tel = document.getElementById("telefon").value;


    var test = /^\d{3}[/]\d{7}$/;

    var rez = tel.match(test);

    if(rez!=null)
    {
    	return true;

    }
    else
    	alert("Broj telefona mora biti u formatu '011/1234567'");
    return false;
}
function registracija(){
    alert("Uspesno ste se registrovali");
}
function registracija2(){
    alert("Korisnik vec postoji");
}
function nemakorsina(){
    alert("Nije pronadjen korisnik");
}
function refresh(){
    location.reload();
}