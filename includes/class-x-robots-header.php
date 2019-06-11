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

		add_action(
			'admin_notices',
			array(
				$this,
				'addAdminNotice'
			)
		);
	}

	public function sendHeaders($headers)
	{
		$headers['X-Robots-Tag'] = 'noindex, nofollow';
		return $headers;
	}

	public function addAdminNotice()
	{
		echo '<div class="notice notice-warning">
			<p>This site will not be indexed by Google. Disable the X Robots Tag plugin to allow Google to index the site</p>
		</div>';
	}
}
