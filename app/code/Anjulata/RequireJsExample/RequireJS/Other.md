
lib/web/requirejs/require.js

###data-main=""
    
    <!-- data-main attribute tells require.js to load
              scripts/main.js after require.js loads. -->
         
    <script data-main="scripts/main" src="scripts/require.js"></script>


###RequireJS File Loading
   
    require.config({
         baseUrl: '/my-javascript-code',
    });
     
    http://example.com/my-javascript-code/helper/world.js
    https://example.com/my-javascript-code/helper/world.js    
    example.com/my-javascript-code/helper/world.js



