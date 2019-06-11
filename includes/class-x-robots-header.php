<?php
class X_Robots_Header
{
	public function run()
	{
		add_filter(
			'wp_headers',
			array(
				$this,
				'sendHeaders'
			)
		);

		function sample_admin_notice__success()
		{
			?>
		<div class="notice notice-warning">
			<p><?= 'This site will not be indexed by Google. Disable the X Robots Tag plugin to allow Google to index the site' ?></p>
		</div>
	<?php
}
add_action('admin_notices', 'sample_admin_notice__success');
}

public function sendHeaders($headers)
{
	$headers['X-Robots-Tag'] = 'noindex, nofollow';
	return $headers;
}
}
