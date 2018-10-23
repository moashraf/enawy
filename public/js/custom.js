$(function(){
    $("#respMenu").aceResponsiveMenu();

    //navbar
    // $("#respMenu").aceResponsiveMenu({
    //     resizeWidth: '768', // Set the same in Media query       
    //     animationSpeed: 'medium', //slow, medium, fast
    //     accoridonExpAll: false //Expands all the accordion menu on click
    // });

    

    // $('.carousel').carousel({
    //     interval: 2222000
    //   });


     
            //testimonials
            $("#testimonials").owlCarousel({
                rtl:true,
                margin:5,
                items:3,
                loop:true,
                autoplay:true,
                smartSpeed:1000,
                dots:true,
                nav:false,
                responsive:{
                    0:{
                        items:1,
                    },
                    600:{
                        items:1, 
                    },
                    
                    1000:{
                        items:1,
                    }
                }
            });









});//end

