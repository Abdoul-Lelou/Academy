function clkform2()
{      
 var nom=document.forms['connect'].elements['nomA'].value;
 var prenom=document.forms['connect'].elements['prenomA'].value;
 var password=document.forms['connect'].elements['passwordA'].value;
 
     
 if(nom==""|| nom==null || prenom==""|| prenom==null || password==""|| password==null)
     {
        alert('VEILLEZ REMPLIR TOUT LES CHAMPS');
         return false;
     }
     
 }