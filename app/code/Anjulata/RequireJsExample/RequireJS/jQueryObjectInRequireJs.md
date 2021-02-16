###Jquery Object


    <!-- This will give an error on browser : jQuery is undefined-->
    <script type="text/javascript">
        jQuery(function(){
            //your code here
        });
    </script>
    
That’s because the global jQuery object won’t be initialized until you use `jQuery as a RequireJS module`    
***

    <!-- In Other word something like this -->
    requirejs(['jquery'], function(jQuery){
        jQuery(function(){
            //your code here
        });
    });
***
Modern versions of jQuery will detect if they’re being included in a `RequireJS/AMD` environment and `define` a module that returns the global jQuery object.

`lib/web/jquery/jquery.min.js`

    if ( typeof define === "function" && define.amd ) {
        define( "jquery", [], function() {
            return jQuery;
        } );
    }  
