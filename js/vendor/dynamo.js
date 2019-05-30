//Desktop nav bar dynamism 
$(document).ready(function() {

//community icon
   $('.menu-icon-a').mouseenter(function(){

      $('.menu-text-a').fadeIn(1500, function(){

        $('.menu-icon-a').mouseleave(function(){

          $('.menu-text-a').fadeOut(500, function(){

            $('.menu-container-a, .menu-container-b, .menu-container-c, .menu-container-d, .menu-container-e, .menu-figure-a, .menu-figure-b, .menu-figure-c, .menu-figure-d, .inner-row-style').mouseenter(function(){

            $('.menu-text-a').fadeOut(500)

            });
          });    
        });
   
                  
      });

   });





//products icons
   $('.menu-icon-b').mouseenter(function(){

      $('.menu-text-b').fadeIn(1500, function(){

        $('.menu-icon-b').mouseleave(function(){

          $('.menu-text-b').fadeOut(500, function(){

            $('.menu-container-a, .menu-container-b, .menu-container-c, .menu-container-d, .menu-container-e, .menu-figure-a, .menu-figure-b, .menu-figure-c, .menu-figure-d, .inner-row-style').mouseenter(function(){

            $('.menu-text-b').fadeOut(500)

            });
          });    
        });
                     
      });

   });



//services icon 
   $('.menu-icon-c').mouseenter(function(){

      $('.menu-text-c').fadeIn(1500, function(){

        $('.menu-icon-c').mouseleave(function(){

          $('.menu-text-c').fadeOut(500, function(){

            $('.menu-container-a, .menu-container-b, .menu-container-c, .menu-container-d, .menu-container-e, .menu-figure-a, .menu-figure-b, .menu-figure-c, .menu-figure-d, .inner-row-style').mouseenter(function(){

            $('.menu-text-c').fadeOut(500)

            });
          });    
        });
   
                  
      });

   });




//portfolio icon
   $('.menu-icon-d').mouseenter(function(){

      $('.menu-text-d').fadeIn(1500, function(){

        $('.menu-icon-d').mouseleave(function(){

          $('.menu-text-d').fadeOut(500, function(){

            $('.menu-container-a, .menu-container-b, .menu-container-c, .menu-container-d, .menu-container-e, .menu-figure-a, .menu-figure-b, .menu-figure-c, .menu-figure-d, .inner-row-style').mouseenter(function(){

            $('.menu-text-d').fadeOut(500)

            });
          });    
        });
   
                  
      });


   });

   //animate in menu icons

document.getElementById('menu-icon-a-hide').style.opacity='1'

document.getElementById('menu-icon-b-hide').style.opacity='1'

document.getElementById('menu-icon-c-hide').style.opacity='1'

document.getElementById('menu-icon-d-hide').style.opacity='1'

//animate green brand element on scroll

$(window).scroll(function() {
    var height = $(window).scrollTop();

    if(height  > 20) {

      $('#brand-line').fadeOut(1000);
        // do something
    }else {

      $('#brand-line').fadeIn(1000);
    }
});


//mobile navigation controllers 
// retrieving elements & storing in variable 
var topBar = document.getElementById('topBar').style
var midBar = document.getElementById('midBar').style
var lowBar = document.getElementById('lowBar').style
var topBar1 = document.getElementById('topBar')
var midBar1 = document.getElementById('midBar')
var mobileMenuContainer = document.getElementById('menu-options-container').style.display
var counter = 0




$('#topBar, #midBar, #lowBar').click (function(){

  if (counter === 0) {

$('#lowBar').fadeOut(500);
    topBar.transform = 'rotate(-132deg)';
    topBar.position= 'relative';
    topBar.top ='10px';
    midBar.transform = 'rotate(493deg)';
    $('#menu-options-container').fadeIn(3000, function(){
              $('#community-li').fadeIn(500, function(){
              $('#products-li').fadeIn(500, function(){
              $('#services-li').fadeIn(500, function(){
              $('#portfolio-li').fadeIn(500)
                
              });
              });

              });

    });

    counter = 1

  }else if(counter === 1) {

     $('#menu-options-container').fadeOut(3000, function(){
             $('#community-li').fadeOut(500, function(){
             $('#products-li').fadeOut(500, function(){
             $('#services-li').fadeOut(500, function(){
             $('#portfolio-li').fadeOut(500)
                
              });
              });

             });

    });
        $('#lowBar').fadeIn(500);
     topBar1.style.transform = 'rotate(0deg)';
     topBar1.style.position= 'relative';
     topBar1.style.top ='0px';
     midBar1.style.transform = 'rotate(0deg)';
   
  

  
   
     counter = 0
   }else{
    return null
   }

   // topBar1.id = 'topBar1';
   // midBar1.id = 'midBar1';
  
});
    
 });


  