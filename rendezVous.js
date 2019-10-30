function verifJour()
{
    var jours=document.forms['rendezvous'].elements['day'].value;
    var jr=jours.toLowerCase()
    
    if(jr=="samedi" || jr=="dimanche")
    {
        alert('VOUS AVEZ CHOISI UN JOUR DE WEEK-END'); 
        return false;
    }
    else if(jr=="" || jr==null)
    {
        alert('REMPLIR TOUT LES CHAMPS');
        return false;
    }
 }

var btn=document.getElementById('btn');
btn.onclick=function validation_heure()
 {
     
     var heure=document.forms['rendezvous'].elements['heure'].value;   
 
     var reg = new RegExp("^(([0]?[8-9])|([1][0-2^5-7$])):([0-5]?[0-9])(:([0-5]?[0-9]))$");

     if(!heure.match(reg))
     {
         alert("l'heure est invalide");
         return false;
     }
     
 };
 
 $(document).ready(function(){
   var date_input=$('input[name="date"]'); //our date input has the name "date"
   var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
   var options={
     format: 'yyyy/mm/dd',
     container: container,
     todayHighlight: true,
     autoclose: true,
   };
   date_input.datepicker(options);
 });

 var heure=document.forms['rendezvous'].elements['heure'].value;   
 var jours=document.forms['rendezvous'].elements['date'].value;
 var str=jours;
 tabdays='lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche'.split(',')
// tabmonths='Janvier,Févirer,Mars,Avril,Mai,Juin,juillet,Août,Septembre,Octobre,Novembre,Décembre'.split(',')
 str=str.split(/[^0-9]/)
 mydate=new Date()
 mydate.setFullYear(str[0],str[0]+1,str[2])
 var jour=mydate.getDay();
 var mois=mydate.getMonth();
 //alert(tabdays[jour]+' '+str[2]+' '+tabmonths[mois]+' '+str[0])
 var reg = new RegExp("^(([0]?[8-9])|([1][0-2^5-7$])):([0-5]?[0-9])(:([0-5]?[0-9]))$");

 if(tabdays[jour]=="samedi" || tabdays[jour]=="dimanche")
 {
     alert('VOUS AVEZ CHOISI UN JOUR DE WEEK-END'); 
     return false;
 }