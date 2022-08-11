/**
 * Rewrite all https://web.archive.org to use https
 */
function forceHttpsOnWaybackMachineHrefs() {
    let hrefs = document.querySelectorAll('a[href^="http://web.archive.org/"]');

    console.log("hrefs");
    console.log(hrefs);

    for (url of hrefs) {
        url.href = url.href.replace("http://", "https://");
    }
}
