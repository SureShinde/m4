#map:

- map used for giving alias to any real `AMD` modules.


    map: {
        '*': {
            ko: 'Knockoutjs/knockout'
        }
    }

#paths:

- This is also used for aliasing, similar to map but for path we can alias not only to `AMD` modules js but also to any `js-library`, `Html` files.
- Magento mainly used for `third party` library and `external Urls`.

#deps:

- This is used include JS globally, means on `every page`.
- Also used for as per `dependency` in other module with `shim`.

#shim:

- used to build a dependency on a third party library, since we cannot modify it.
######When to use shim ?

- To add a `new dependency` to a third party library.
- To change the `load order` by adding a dependency to a third party library

#mixins:

- used to overwrite AMD component methods which returns either a `UI component`, a `jQuery widget` or `js Object` 
