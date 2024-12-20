<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "textimage_size".
 *
 * Auto generated 25-10-2023 09:19
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Text Media/Image size',
  'description' => 'Use only with bootstrap 5 + boostrap package 12 to change the output size for standard bootstrap package output (column split 50% image - 50% text). For content types text/image (textpict), text/media and image',
  'category' => 'plugin',
  'version' => '4.0.2',
  'state' => 'beta',
  'uploadfolder' => false,
  'clearcacheonload' => true,
  'author' => 'Giulia Tuveri',
  'author_email' => 'gt@pecialistaweb.it',
  'author_company' => NULL,
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '12.0.0-13.4.99',
      'bootstrap_package' => '13.0.0-15.0.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

