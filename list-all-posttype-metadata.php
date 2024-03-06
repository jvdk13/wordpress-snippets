<?php
// Specify the post type for which you want to retrieve metadata keys
$post_type = 'posttype';

// Get all registered post types
$post_types = get_post_types();

// Check if the specified post type exists
if (in_array($post_type, $post_types)) {
    // Get all posts of the specified post type
    $posts = get_posts(array('post_type' => $post_type, 'posts_per_page' => -1));

    // Check if there are posts
    if ($posts) {
        echo "Metadata keys for post type '$post_type':<br>";

        // Array to store unique metadata keys
        $unique_keys = array();

        foreach ($posts as $post) {
            // Get all metadata for each post
            $meta_data = get_post_meta($post->ID);

            // Collect unique keys
            foreach ($meta_data as $key => $value) {
                $unique_keys[$key] = true;
            }
        }

        // Output the unique metadata keys
        foreach (array_keys($unique_keys) as $unique_key) {
            echo "$unique_key<br>";
        }
    } else {
        echo "No posts found for post type '$post_type'.";
    }
} else {
    echo "Invalid post type: '$post_type'.";
}
?>
