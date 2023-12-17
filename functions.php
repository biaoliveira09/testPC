<?php 

/**
*  Add hook to add social sharing links after title in posts
*/

function bia_add_social_links($title, $id) {
    if (is_single() && $id === get_the_ID()) {

		$social_share_links = '
			<nav id="social-share-links" class="social-share-links">
				<ul>
					<li>
						<a href="https://www.facebook.com/sharer/sharer.php?u=' . get_permalink(). '" target="_blank" rel="noopener noreferrer">
							Facebook
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/sharing/share-offsite/?url=' .get_the_permalink() . ' "target="_blank" rel="noopener noreferrer">
							LinkedIn
				</a>
				
					</li>
				</ul>
			</nav>';

		$output = $title . '</h1>' . $social_share_links;
		
        return $output;
	} else {
		return $title;
	
	}
}
add_filter( 'the_title', 'bia_add_social_links', 10, 2 );


?>