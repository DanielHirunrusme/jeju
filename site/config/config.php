<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');
c::set('debug', true);
c::set('panel.stylesheet', 'assets/css/panel.css');

c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'default' => true,
    'locale'  => 'en_US',
    'url'     => '/',
  ),
  array(
    'code'    => 'kr',
    'name'    => 'Korean',
    'locale'  => 'ko_KR',
    'url'     => '/kr',
  ),
  array(
    'code'    => 'cn',
    'name'    => 'Chinese',
    'locale'  => 'zh',
    'url'     => '/cn',
  ),
  array(
    'code'    => 'jp',
    'name'    => 'Japanese',
    'locale'  => 'ja_JP',
    'url'     => '/jp',
  ),
));

c::set('language.detect', true);

function wrapLanguage($text){
  $newtext = preg_replace("/(\p{Z}|\p{Han}|\p{Katakana}|\p{Hiragana})/u", "<span lang=\"az\" class=\"az\">$1</span>", $text );
  return $newtext;
}

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/