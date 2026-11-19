# Text Media/Image size (`textimage_size`)

Changes the split between image and text of the bootstrap_package content elements
**Text & Media** (`textmedia`), **Text & Images** (`textpic`) and **Images** (`image`).
By default bootstrap_package shows image and text at 50% / 50%; with this extension the image can
take from 1 to 11 twelfths of the width (8% … 91%).

| | |
|---|---|
| TYPO3 | 12.4 LTS, 13.4 LTS, 14.3 LTS |
| PHP | 8.1+ (as required by the TYPO3 version) |
| bootstrap_package | 13, 14, 15 or 16 (Bootstrap 5) |

## Usage

In the content element, tab *Appearance > Layout*, choose **Image width 8% (1/12)** …
**Image width 91% (11/12)** (values 6761–6771).

| Image position | Result from 768 px (Bootstrap "md") |
|---|---|
| left / right / centered left / centered right | image n/12, text the rest of the row |
| above / below | image n/12 of the width, centred, text below/above at full width |
| Images element | the images take n/12 of the width, centred |

Below 768 px image and text use the full width, as in bootstrap_package.
Content elements without one of these layouts are not touched at all.

Old content elements with layouts 6661–6671 (text width, used by early versions) keep working.

## Installation

Composer:

    composer require specialistaweb/textimage_size

Classic mode: upload `textimage_size_5.0.0.zip` in *Admin Tools > Extensions*.

Then activate it for the site:

* **TYPO3 13 / 14 – site set:** *Site Management > Sites > edit site > Sets*, add **Text Media/Image size**.
* **TYPO3 12, or sites with TypoScript records:** add the static template
  **Text/Image size: Bootstrap5** after the bootstrap_package TypoScript.

Finally flush all caches.

## How it works

* The templates of the extension are added to `tt_content.{image,textpic,textmedia}.templateRootPaths`
  **only for content elements with one of its layouts** (`stdWrap.if isInList`). All other content
  elements keep the templates of the installed bootstrap_package version and of the site package.
* The templates use the same markup as bootstrap_package and add the classes `textimage-size` and
  `textimage-size-n`.
* Responsive images are generated for the real width of the image column
  (`lib.contentElement.settings.textimagesize.side.n` / `.full.n`, multiplier n/12), so a 25% image is
  not delivered at 50% size.
* The stylesheet (`Resources/Public/Css/textimage-size.css`, about 2 KB, plain CSS) is added with
  `f:asset.css` only to pages that use one of the layouts.

## Changelog

### 5.0.0

* The extension no longer replaces the bootstrap_package template paths for the whole site:
  up to 4.x it set `plugin.bootstrap_package_contentelements.view.templateRootPath` and
  `partialRootPath`, the slots meant for the site package (custom templates of the site package
  could be lost), and every Text & Media / Text & Images / Images element used the old template copies.
* Fixed: content elements **without** a size layout lost the bootstrap_package image configuration
  (images were generated at full width instead of half width).
* Fixed: the image configurations copied `responsiveimages.contentelements.textmedia.default`,
  which does not exist in bootstrap_package (no gutters were applied).
* Removed the site-wide change of the responsive image widths (`variants.*.width`, with a wrong
  constant for `xlarge`) and of the gutters: images of the whole site are generated again with the
  bootstrap_package values. The constants `plugin.tx_textimage_size.settings.*` no longer exist;
  set `lib.contentElement.settings.responsiveimages.variants` in your site package if you need other values.
* Removed `TCEFORM.tt_content.layout.disableNoMatchingValueElement` (site-wide setting).
* Stylesheet scoped to the elements of the extension (4.x changed gap and wrapping of all
  Text & Media / Text & Images elements) and loaded only where needed; plain CSS instead of SCSS.
* Image widths now exactly n/12 (before 0.08, 0.16, …).
* Templates updated to the current bootstrap_package markup (no empty gallery without files).
* Invalid `<f:/then>` tags removed.
* `composer.json`: English description, PHP and Fluid/Frontend requirements, `^` version constraints,
  removed non-existing autoload paths. `ext_emconf.php`: e-mail address fixed (`gt@specialistaweb.it`),
  obsolete keys removed, category `fe`.
* Removed unused files (Extension Builder settings, documentation template, Bootstrap 4 TypoScript,
  duplicate page TSconfig, empty `ext_localconf.php` / `ext_tables.php`).

## License

GPL-2.0-or-later
