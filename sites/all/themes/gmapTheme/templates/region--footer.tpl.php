<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>
<?php if ($content): ?>
  <footer id="footer" class="<?php print $classes; ?>">
    <div id = "footer-image">
    	<?php print "<img src='sites/all/themes/gmapTheme/images/footer-image.png'/>"; ?>
    </div>
    <?php print $content; ?>
  </footer>
<?php endif; ?>
