<?php
// Get all registered post types
$post_types = get_post_types();

// Echo the list of post types
echo "Registered Post Types:<br>";

foreach ($post_types as $post_type) {
    echo "$post_type<br>";
}
?>
