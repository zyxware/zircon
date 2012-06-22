<?php

/**
 * @file html.tpl.php
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 * @see nucleus_preprocess_html()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
  <head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>

  <body class="<?php print $classes; ?>"<?php print $attributes;?>>
    <div id="skip-link"><a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a></div>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
    <div class="colors-theme">
    	<ul>
        	<li>
            	<span>Change color: </span>
                <a class="color-link red-color" href="<?php print base_path() . "../default";?>" title="Red color">Red color</a>  
                <div class="list-colors">
                	<ul>
                    <li><a href="<?php print base_path() . "../red";?>" title="Red color"><span class="color-link red-color"></span>Red color</a></li>
                    	<li><a href="<?php print base_path() . "../blue";?>" title="Blue color"><span class="color-link blue-color"></span>Blue color</a></li>
                        <li><a href="<?php print base_path() . "../pink";?>" title="Pink color"><span class="color-link pink-color"></span>Pink color</a></li>
                        <li><a href="<?php print base_path() . "../orange";?>" title="Orange color"><span class="color-link orange-color"></span>Orange color</a></li>
                    </ul>
                </div>              
            </li>
            <li><a href="#" title="Download demo content for this color" class="btn-download">Download</a></li>
        </ul>
	<!--ul>
    	<li><a href="#" class="red-color" title="Red">Red</a></li>
        <li><a href="#" class="orange-color" title="Orange">Orange</a></li>
        <li><a href="#" class="blue-color" title="Blue">Blue</a></li>
        <li><a href="#" class="pink-color" title="Pink">Pink</a></li>
    </ul-->
</div>
  </body>
</html>