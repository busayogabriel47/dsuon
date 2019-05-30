$(document).ready(function(){
    
//get required dom elements
var f1= document.getElementById('fund1-cont');
var f2= document.getElementById('fund2-cont');
var f3= document.getElementById('fund3-cont'); 
var f4 = document.getElementById('fund4-cont');
 
    
     $('.fund1').click(function(){
        
     $('#fund2-cont, #fund3-cont, #fund4-cont').fadeOut(1000, function(){
        
          $(f1).fadeIn(3000)
         
     })
    })
    
    $('.fund2').click(function(){
        
     $('#fund3-cont, #fund1-cont, #fund4-cont').fadeOut(1000, function(){
           
          $(f2).fadeIn(3000)

         
     })
    })
    
      $('.fund3').click(function(){
        
     $('#fund1-cont, #fund2-cont, #fund4-cont').fadeOut(1000, function(){
           
          $(f3).fadeIn(3000)

         
     })
    })
    
     $('.fund4').click(function(){
        
     $('#fund1-cont, #fund2-cont, #fund3-cont').fadeOut(1000, function(){
           
          $(f4).fadeIn(3000)

         
     })
    })
 
})