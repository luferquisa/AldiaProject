 function tamanos(){
             alto = $( window ).height();
             $(".left-bar-menu").height( alto+"px" );
             $("#actions-sidebar").height( alto+"px" );
             $(".left-bar-menu img").height( alto+"px" );
             $("body").css("background-size","100% "+alto+"px");
}

//cuando el navegador cambia de tamaño    
        $( window ).resize(function() {
          tamanos();
        });

        //Cuando se carga la página
        $(document).ready(function(){
           	tamanos();
		});

        $(".left-bar-menu").mouseover(function(){
                $(".left-bar-menu").css('display','none');
                $("#actions-sidebar").css('display','inline');
         });

         $("#actions-sidebar").mouseleave(function(){
                $(".left-bar-menu").css('display','inline');
                $("#actions-sidebar").css('display','none');
         });