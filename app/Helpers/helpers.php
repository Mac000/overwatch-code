<?php
use \Illuminate\Support\Str;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

/**
* Determine whether to set Urdu locale based on request path
* @param  \Illuminate\Http\Request  $request
* @return $rtl
*/
function setUrLocale(Request $request, $ur_route, $param_key = null, $param_value = null) {
$rtl = null;

/* Params of Str::replaceFirst()
* @param-1    search for the first '/' from route string coming as result of route()
* @param-2    replace the first '/'
* @param-3    route string/url without base url
*
* Results "true" if the current request path Matches the path/url of Arabic route of a current page!
*/

// If route Parameters are NOT provided, use following block
if ($param_key === null) {
if ($request->path() === Str::replaceFirst('/', '', route($ur_route , [], false))) {
App::setLocale('ur');
}
}
// If route Parameters are provided, use following block
elseif ($param_key !== null) {
if ($request->path() === Str::replaceFirst('/', '', route($ur_route , [$param_key => $param_value], false))) {
App::setLocale('ur');
}
}

if (App::isLocale('ur')) {
$rtl = 'text-rtl';
}
return $rtl;
}
