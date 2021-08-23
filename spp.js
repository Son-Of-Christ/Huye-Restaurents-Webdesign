function text(y)
{
    if (y==0)
    {
        document.getElementById('li6').style.display="none";
        document.getElementById('li5').style.display="none";
        document.getElementById('li4').style.display="none";


        document.getElementById('mess').style.display="block";
        document.getElementById('delv').style.display="block";
      
    
        document.getElementById('obbs').style.display="block";
        document.getElementById('umh').style.display="block";
        document.getElementById('mh').style.display="none";
        
       
    }
    else
    {
        document.getElementById('li6').style.display="block";
        document.getElementById('li5').style.display="block";
        document.getElementById('li4').style.display="block";


        document.getElementById('mess').style.display="none";
        document.getElementById('delv').style.display="none";

        document.getElementById('obbs').style.display="none";
        document.getElementById('umh').style.display="none";
        document.getElementById('mh').style.display="block";
     

    }
    return
}
function tx(z)
{
    if (z==0)
    {
        document.getElementById('tbs1').style.display="block";
        document.getElementById('restt').style.display="block";
        document.getElementById('obbs').style.display="none";

  
    }
    else
    {
        document.getElementById('restt').style.display="none";
        document.getElementById('tbs1').style.display="none";
        document.getElementById('obbs').style.display="block";
       
    }
    return
}
function tex(p)
{
    if(p==0)
    {
        document.getElementById('mess').style.display="none";
        document.getElementById('cl2').style.display="block";
        document.getElementById('dels').style.display="block";
   
        document.getElementById('obbs').style.display="none";

    }
    else
    {
        document.getElementById('obbs').style.display="block";
        document.getElementById('mess').style.display="block";
        document.getElementById('cl2').style.display="none";
        document.getElementById('dels').style.display="none";
    }
}
function report(m)
{
    if(m==0)
    {
        document.getElementById('li6').style.display="none";
        document.getElementById('li5').style.display="none";
        document.getElementById('li4').style.display="none";
        document.getElementById('mh').style.display="none";
        document.getElementById('uc').style.display="block";
        document.getElementById('repss').style.display="block";
        document.getElementById('repohead').style.display="block";

        

    }
    else
    {

        document.getElementById('uc').style.display="none";
        document.getElementById('repss').style.display="none";
        
        document.getElementById('li6').style.display="block";
        document.getElementById('li5').style.display="block";
        document.getElementById('li4').style.display="block";
        document.getElementById('mh').style.display="block";
        document.getElementById('repohead').style.display="none";
 
    }
    return
}
function client(ptr)
{
    if(ptr==0 )
    {
        document.getElementById('li6').style.display="none";
        document.getElementById('li5').style.display="none";
        document.getElementById('li4').style.display="none";
        document.getElementById('mh').style.display="none";
        document.getElementById('clieh').style.display="block";
        document.getElementById('clied').style.display="block";
        document.getElementById('clients').style.display="block";
    }
    else
    {


        document.getElementById('li6').style.display="block";
        document.getElementById('li5').style.display="block";
        document.getElementById('li4').style.display="block";
        document.getElementById('mh').style.display="block";
        document.getElementById('clieh').style.display="none";
        document.getElementById('clied').style.display="none";
        document.getElementById('clients').style.display="none";
    }
    return
}





