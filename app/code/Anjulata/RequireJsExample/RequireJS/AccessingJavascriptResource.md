#Accessing Javascript Resources

##Ex-1 Access Js from any Module

app/code/RequireExample/JS/view/frontend/web/js/script-example.js
   
    <script type="text/x-magento-init">
        require(['RequireExample_Js/js/script-example'], function(scriptExample) {
        });
    </script>


##Ex-2 Access Js from any Theme
app/design/frontend/Magento/Luma/web/js/script-example.js

    
    <script type="text/x-magento-init">
        require(['js/script-example'], function(scriptExample) {
        });
    </script>
    
    
##Ex-3 Access Js from library
lib/web/js/script-example.js

   
    <script type="text/x-magento-init">
        require(['script-example'], function(scriptExample) {
        });
    </script>    
