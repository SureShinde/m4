https://requirejs.org/docs/api.html#config
###The Purpose of requirejs-config.js

- Allow end-user-programmers to add `require.config` options to Magento’s RequireJS system
- Allow end-user-programmers to perform any other `setup/configuration` their javascript needs
- RequireJs is a `module Loader`, we can specify the loading sequence.
***
    
    <script  type="text/javascript"  src="http://127.0.0.1/magento_2_3_4_sd/pub/static/version1589603267/frontend/Magento/luma/en_US/requirejs-config.js"></script>

This is a special javascript file that Magento generates during `setup:di:compile` (in production mode) or on the fly (developer and default mode).
***
######What we can specify in `requirejs-config.js`

    var config = {
        deps: [],
        map: {},
        paths: {},
        shim: {
            deps: []
        },
        config: {
            mixins:{}
        }
    };
***
##EX - 

    var config = {
        paths:{
            "scriptExample":"'RequireExample_Js/js/script-example'"
        }
    };
    alert("Done");
    //=======================
    - This is internally converted like below in requirejs-config
    (function() {
        //CONTENTS HERE
        require.config(config);
    })();
    
    ========FINAL LOOK===============
    (function() {
        var config = {
            paths:{
                "scriptExample":"'RequireExample_Js/js/script-example'"
            }
        };
        alert("Done");
        
        require.config(config);
    })();
    
