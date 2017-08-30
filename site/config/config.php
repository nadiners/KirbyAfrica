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
c::set('debug',true);
c::set('panel.stylesheet', 'assets/css/panel.css');
c::set('textarea.buttons', array(
  "h1",
  "h2",
  "bold",
  "ulist",
  "olist",
  "blockquote",
  "link",
  "page"
));

c::set('kirbytext.video.vimeo.options', [
  'autoplay' => false,
  'badge' => false,
  'color' => 'ffffff'
]);

c::set('markdown.extra', true);

c::set('languages', array(
  array(
    'name'      => 'English',
    'code'      => 'en',
    'locale'    => 'en_US.utf-8',
    'default'   => true,
    'url'       => '/',
    'direction' => 'ltr'
  ),
  array(
    'name'    => 'עברית',
    'code'    => 'he',
    'locale'  => 'he_HE.utf-8',
    'url'     => '/he',
    'direction' => 'rtl'
  ),
));



/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/


kirby()->hook('panel.file.upload', 'shrinkImage');
kirby()->hook('panel.file.replace', 'shrinkImage');

function shrinkImage($file, $maxDimension = 1000) {

  try {
    if ($file->type() == 'image' and ($file->width() > $maxDimension or $file->height() > $maxDimension)) {

      // Get original file path
      $originalPath = $file->dir().'/'.$file->filename();

      // Create a thumb and get its path
      $resized = $file->resize($maxDimension,$maxDimension);
      $resizedPath = $resized->dir().'/'.$resized->filename();

      // Replace the original file with the resized one
      copy($resizedPath, $originalPath);
      unlink($resizedPath);

    }
  } catch(Exception $e) {
    return response::error($e->getMessage());
  }
}
?>