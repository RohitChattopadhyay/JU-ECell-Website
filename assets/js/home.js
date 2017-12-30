  
		 
		 
         
         $(document).ready(function(){
         
           var a = 0;
         $(window).scroll(function() {
           var oTop = $('#counter').offset().top - window.innerHeight;
           if (a == 0 && $(window).scrollTop() > oTop) {
             $('.counter-value').each(function() {
               var $this = $(this),
                 countTo = $this.attr('data-count');
               $({
                 countNum: $this.text()
               }).animate({
                   countNum: countTo
                 },
         
                 {
         
                   duration: 2000,
                   easing: 'swing',
                   step: function() {
                     $this.text(Math.floor(this.countNum));
                   },
                   complete: function() {
                     $this.text(this.countNum);
                     
                   }
         
                 });
             });
             a = 1;
               $( ".plus-for-numbers" ).delay(1700).fadeIn( 1000 );
           }
         
         });
         });
           

     $(document).ready(function($) { // Begin jQuery
           $(function() { // DOM ready
             // If a link has a dropdown, add sub menu toggle.
             $('nav ul li a:not(:only-child)').mouseenter(function(e) {
               $(this).siblings('.nav-dropdown').slideToggle('medium');
               // Close one dropdown when selecting another
               $('.nav-dropdown').not($(this).siblings()).hide();
               e.stopPropagation();
             });
            
             $('nav ul li ul , nav ul ').mouseleave(function(e) {
               $(this).siblings('.nav-dropdown').slideToggle('medium');
               // Close one dropdown when selecting another
               $('.nav-dropdown').not($(this).siblings()).hide();
               e.stopPropagation();
             });
         
             
             // Clicking away from dropdown will remove the dropdown class
             $('html').hover(function() {
               $('.nav-dropdown').hide();
             });
             // Toggle open and close nav styles on click
             $('#nav-toggle').click(function() {
               $('nav ul').slideToggle();
             });
             // Hamburger to X toggle
             $('#nav-toggle').on('click', function() {
               this.classList.toggle('active');
             });
           }); // end DOM ready
         }); // end jQuery

  
		 
		 

         window.onload=setTimeout(MadeByTheDRAgon, 10000);
         function MadeByTheDRAgon() {
             console.log("                                        ,   ,\n                                        $,  $,     ,\n                                        'ss.$ss. .s'\n                                ,     .ss$$$$$$$$$$s,\n                                $. s$$$$$$$$$$$$$$`$$Ss\n                                '$$$$$$$$$$$$$$$$$$o$$$       ,\n                               s$$$$$$$$$$$$$$$$$$$$$$$$s,  ,s\n                              s$$$$$$$$$'$$$$$$''''$$$$$$'$$$$$,\n                              s$$$$$$$$$$s''$$$$ssssss'$$$$$$$$'\n                             s$$$$$$$$$$'         `'''ss'$'$s''\n                             s$$$$$$$$$$,              `'''''$  .s$$s\n                             s$$$$$$$$$$$$s,...               `s$$'  `\n                         `ssss$$$$$$$$$$$$$$$$$$$$####s.     .$$'$.   , s-\n                           `''''$$$$$$$$$$$$$$$$$$$$#####$$$$$$'     $.$'\n                                 '$$$$$$$$$$$$$$$$$$$$$####s''     .$$$|\n                                  '$$$$$$$$$$$$$$$$$$$$$$$$##s    .$$' $\n                                   $$''$$$$$$$$$$$$$$$$$$$$$$$$$$$$$'   `\n                                  $$'  '$'$$$$$$$$$$$$$$$$$$$$S'''''\n                             ,   ,'     '  $$$$$$$$$$$$$$$$####s\n                             $.          .s$$$$$$$$$$$$$$$$$####'\n                 ,           '$s.   ..ssS$$$$$$$$$$$$$$$$$$$####'\n                 $           .$$$S$$$$$$$$$$$$$$$$$$$$$$$$#####'\n                 Ss     ..sS$$$$$$$$$$$$$$$$$$$$$$$$$$$######''\n                  '$$sS$$$$$$$$$$$$$$$$$$$$$$$$$$$########'\n           ,      s$$$$$$$$$$$$$$$$$$$$$$$$#########'''\n           $    s$$$$$$$$$$$$$$$$$$$$$#######'''      s'         ,\n           $$..$$$$$$$$$$$$$$$$$$######''       ....,$$....    ,$\n            '$$$$$$$$$$$$$$$######'' ,     .sS$$$$$$$$$$$$$$$$s$$\n              $$$$$$$$$$$$#####'     $, .s$$$$$$$$$$$$$$$$$$$$$$$$s.\n   )          $$$$$$$$$$$#####'      `$$$$$$$$$###########$$$$$$$$$$$.\n  ((          $$$$$$$$$$$#####       $$$$$$$$###'       '####$$$$$$$$$$\n  ) \         $$$$$$$$$$$$####.     $$$$$$###'             '###$$$$$$$$$   s'\n (   )        $$$$$$$$$$$$$####.   $$$$$###'                ####$$$$$$$$s$$'\n )  ( (       $$'$$$$$$$$$$$#####.$$$$$###' -The DRAgon    .###$$$$$$$$$$'\n (  )  )   _,$'   $$$$$$$$$$$$######.$$##'                .###$$$$$$$$$$\n ) (  ( \.         '$$$$$$$$$$$$$#######,,,.          ..####$$$$$$$$$$$'\n(   )$ )  )        ,$$$$$$$$$$$$$$$$$$####################$$$$$$$$$$$'\n(   ($$  ( \     _sS'  `'$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$S$$,\n )  )$$$s ) )  .      .   `$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$''  `$$\n  (   $$$Ss/  .$,    .$,,s$$$$$$##S$$$$$$$$$$$$$$$$$$$$$$$$S''        '\n    \)_$$$$$$$$$$$$$$$$$$$$$$$##'  $$        `$$.        `$$.\n        `'S$$$$$$$$$$$$$$$$$#'      $          `$          `$\n            `''''''''''''''         '           '           '\n");
         	console.log("The theme for JU ECell is created by Daipayan Mukherjee, Abhigyan Das, Rohit Chattopadhyay as a project for Jadapur University ECell. If you do wish to implement any stuff from the theme then give due credit to the developers"); 
         }
          
         $(window).load(function() {
                         function showhead(){
                             $('.headingz').animate({
                              opacity: '1'
                          } , 2000 );
                         };
                         window.setTimeout( showhead, 300);
                        
                        
                     }); 
