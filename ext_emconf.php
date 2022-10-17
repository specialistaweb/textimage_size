<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "textimage_size".
 *
 * Auto generated 26-04-2021 15:14
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Text Media/Image size',
  'description' => 'Useful change the output size for standard bootstrap package output (column split 50% image - 50% text). For content types text/image (textpict), text/media and image',
  'category' => 'plugin',
  'author' => 'Giulia Tuveri',
  'author_email' => 'gt@pecialistaweb.it',
  'state' => 'beta',
  'uploadfolder' => false,
  'clearCacheOnLoad' => 0,
  'version' => '2.1.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '11.0.0-11.5.99',
      'bootstrap_package' => '9.0.0-12.0.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'clearcacheonload' => false,
  'author_company' => NULL,
);

