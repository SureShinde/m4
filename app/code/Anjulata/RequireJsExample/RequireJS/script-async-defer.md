https://javascript.info/script-async-defer
##Problems with heavy script
- In modern websites, scripts are often `heavier` than HTML: their `download size` is larger, and `processing time` is also longer.
- When the browser loads HTML and comes across a `<script>...</script>` tag, it `can’t continue` building the DOM. It must `execute` the script `right now`. The same happens for `external scripts` <script src="..."></script>: the browser must wait until the script downloads, execute it, and only after process the rest of the page.
***
######Workaround for above Problem

-   we can put a script at the bottom of the page.
***

###defer = "true"
- The `defer` attribute tells the browser that it should go on working with the page, and load the script “in background”, then run the script when it loads.
- Scripts with defer `never` block the page.
- Scripts with defer always execute when the `DOM is ready`, but `before DOMContentLoaded` event.
- Note: The defer attribute is `ignored` if the `<script>` tag has no `src`.

###async = "true"
- The async attribute means that a script is completely independent:
- `DOMContentLoaded` and `async` scripts don’t wait for each other:
***

In practice, `defer` is used for scripts that need the `whole DOM` and/or their relative execution order is important. And `async` is used for `independent` scripts, like counters or ads. And their relative execution order does not matter.
