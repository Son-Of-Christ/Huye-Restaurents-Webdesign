function text(x)
{
    if (x == 0)document.getElementById('pnm') .style.display="block";
    else if (x == 0)document.getElementById('pnm1') .style.display="none";
  
   
else 
   document.getElementById('pnm') .style.display="none";
   document.getElementById('pnm1') .style.display="none";
   
return
}
function calc()
{
    var x=document.getElementById('p1').value;
    


           if(x>=50 && x<=100)
       document.getElementById('number').value='main-Salle';
    else if(x>=20 && x<=50)
    document.getElementById('number').value='mini-sale';
    else if(x>=10 && x<=20)
    document.getElementById('number').value= "3 Tables";
    else if(x>=5 && x<=10)
    document.getElementById('number').value= "2 Tables";
    else if(x>=1 && x<=5)
    document.getElementById('number').value= "1 Table";
    else if(x=="  ")
    document.getElementById('number').value="Why can't u Enter something "
    else
    {
        document.getElementById('number').value= "number not supported";
    }


}
function tx(y)
{
    if (y == 0)document.getElementById('pnm1') .style.display="block";
    else if (y == 0)
    document.getElementById('pnm').style.display="none";
  
   
else 
   document.getElementById('pnm1') .style.display="none";
   document.getElementById('pnm').style.display="none";

   
return
}




     
