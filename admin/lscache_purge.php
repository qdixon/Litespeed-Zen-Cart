<?php
require('includes/application_top.php');
@header("X-LiteSpeed-Purge: *");

$messageStack->add('LSCache purge header sent successfully', 'success');

require(DIR_WS_INCLUDES . 'template_top.php');
?>
<h2>LiteSpeed Cache Control</h2>
<p>Cache purge sent to LiteSpeed. If configured properly, the server will clear the cache.</p>
<a href="index.php">Back to Dashboard</a>
<?php
require(DIR_WS_INCLUDES . 'template_bottom.php');
