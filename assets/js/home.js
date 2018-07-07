  
		 
		 
         
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
					 
		//Forms of home page
function getFormData(ef) {
    var form = document.getElementById(ef);
    var elements = form.elements;
    var fields = Object.keys(elements).map(function(k) {
        if (elements[k].name !== undefined) {
            return elements[k].name;
        } else if (elements[k].length > 0) {
            return elements[k].item(0).name;
        }
    }).filter(function(item, pos, self) {
        return self.indexOf(item) == pos && item;
    });
    var data = {};
    fields.forEach(function(k) {
        data[k] = elements[k].value;
        var str = "";
        if (elements[k].type === "checkbox") {
            str = str + elements[k].checked + ", ";
            data[k] = str.slice(0, -2);
        } else if (elements[k].length) {
            for (var i = 0; i < elements[k].length; i++) {
                if (elements[k].item(i).checked) {
                    str = str + elements[k].item(i).value + ", ";
                    data[k] = str.slice(0, -2);
                }
            }
        }
    });
    data.formDataNameOrder = JSON.stringify(fields);
    data.formGoogleSheetName = form.dataset.sheet || "responses";
    data.formGoogleSendEmail = form.dataset.email || "";
    data.formGoogleEmail = form.dataset.sendmail || "1";
    return data;
}

function validEmail(e) {
    return true;
}

function handleFormSubmit(event) {
    event.preventDefault();
	console.log(event.target.id);
    var data = getFormData(event.target.id);
    if (!validEmail(data.email)) {
        document.getElementById('email-invalid').style.display = 'block';
        return false;
    } else {
        var url = event.target.action;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', url);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            //document.getElementById('test-statement-body').style.display = 'none';
			//console.log( xhr.status, xhr.statusText )
			//console.log(xhr.responseText);
			$('#Coordinator-Modal').modal('hide');
			$('#Ambassador-Modal').modal('hide');
			document.getElementById('thank-you-modal-button').click();
            return;
        };
        var encoded = Object.keys(data).map(function(k) {
            return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
        }).join('&')
        xhr.send(encoded);
    }
}

function loaded() {
    console.log('Form submission handler loaded successfully');
    var form = document.getElementById('contact-form');
    form.addEventListener("submit", handleFormSubmit, false);
	form = document.getElementById('ambassador-form');
    form.addEventListener("submit", handleFormSubmit, false);
	form = document.getElementById('coordinator-form');
    form.addEventListener("submit", handleFormSubmit, false);
}
		
document.addEventListener('DOMContentLoaded',loaded,false);