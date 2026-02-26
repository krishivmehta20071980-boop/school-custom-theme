<?php
/**
 * Title: Footer Widget Area
 * Slug: school-custom-theme/footer-widget
 * Categories: school
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

<h2 style="text-align:center">Latest Updates</h2>

<!-- wp:query {"query":{"perPage":3,"postType":"post"}} -->
<div class="wp-block-query">

<!-- wp:post-template -->

<div style="padding:20px; border-bottom:1px solid #eee">

<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

</div>

<!-- /wp:post-template -->

</div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->