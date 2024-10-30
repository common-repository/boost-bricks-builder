console.log('Initiating open-css-tab.js');

function openCSSStyle() {

    // Open style tab
    const styleTab =
        parent.window.document.querySelector("ul#bricks-panel-tabs > li:nth-child(2)") ??
        document.querySelector("ul#bricks-panel-tabs > li:nth-child(2)");

    styleTab.click();

    // Open CSS acordion after 0.5 second
    setTimeout(function () {
        const cssAcordion =
            parent.window.document.querySelector('li.control-group[data-control-group="_css"] .control-group-title') ??
            document.querySelector('li.control-group[data-control-group="_css"] .control-group-title');


        // Only open if closed:
        if (cssAcordion.parentNode.classList.contains('open') == false) {
            cssAcordion.click();
        }

    }, 100);

}

document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('keydown', function (event) {
        if (event.altKey && event.key.toLowerCase() === 'ç') {
            event.preventDefault();
            openCSSStyle();
        }
    });
});

console.log('End of open-css-tab.js');