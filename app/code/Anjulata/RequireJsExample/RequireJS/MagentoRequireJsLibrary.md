##RequireJs Library in Magento2


####For Frontend

`vendor/magento/module-theme/view/frontend/layout/default_head_blocks.xml`

    
    <head>
        <script src="requirejs/require.js"/>
    </head>

***
`vendor/magento/module-theme/view/frontend/layout/default.xml`
    
    <body>
        <block name="require.js" class="Magento\Framework\View\Element\Template" template="Magento_Theme::page/js/require_js.phtml" />
            
    
        <referenceContainer name="after.body.start">
                <block class="Magento\RequireJs\Block\Html\Head\Config" name="requirejs-config"/>
        </referenceContainer>       

    </body>
    
***
`vendor/magento/module-theme/view/frontend/templates/page/js/require_js.phtml`


    <script>
        var BASE_URL = '<?= $block->escapeUrl($block->getBaseUrl()) ?>';
        var require = {
            "baseUrl": "<?= $block->escapeUrl($block->getViewFileUrl('/')) ?>"
        };
    </script>
***


    \Magento\RequireJs\Block\Html\Head\Config
    
    use Magento\Framework\RequireJs\Config as RequireJsConfig;
    const CONFIG_FILE_NAME = 'requirejs-config.js';

***
###For Backend
`vendor/magento/module-backend/view/adminhtml/layout/default.xml`

    <head>
        <link src="requirejs/require.js"/>
    </head>

    <body>
            <block name="require.js" class="Magento\Backend\Block\Page\RequireJs" template="Magento_Backend::page/js/require_js.phtml"/>
            
            <referenceContainer name="after.body.start">
                <block class="Magento\RequireJs\Block\Html\Head\Config" name="requirejs-config"/>
            </referenceContainer>
    </body    

***
`vendor/magento/module-backend/view/adminhtml/templates/page/js/require_js.phtml`

    <script>
        var BASE_URL = '<?= /* @noEscape */ $block->getUrl('*') ?>';
        var FORM_KEY = '<?= /* @noEscape */ $block->getFormKey() ?>';
        var require = {
            "baseUrl": "<?= /* @noEscape */ $block->getViewFileUrl('/') ?>"
        };
    </script>
    
    
