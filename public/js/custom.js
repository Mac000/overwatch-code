/**
 * Bind all Document Ready events
 */
function bindPageLoadFunctions() {
    document.addEventListener("DOMContentLoaded", function() {
        forceHttpsOnWaybackMachineHrefs();
    });
}
bindPageLoadFunctions();
