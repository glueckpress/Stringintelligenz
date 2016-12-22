<h4><?php _e( '🙅✋👁📢&#160;Achtung! Stringintelligenz only supports default (<dfn title="That’s de_DE as a locale.">informal</dfn>) German for now.', 'stringintelligenz' ); ?></h4>
<p>
	<?php
	printf(
		__(
			'Switch to <strong>“Deutsch”</strong> at <a href="%1$s">Settings→General→Site&#160;Language</a> or at <a href="%2$s">Profile→Personal&#160;Options→Language</a> in order to enable inclusive German in your WordPress admin interface.<br><em>(Quick check: As an administrator you should see the word “Profile” instead of “Benutzer” in your admin menu after you have activated Deutsch.)</em>',
			'stringintelligenz'
		),
		admin_url( 'options-general.php' ),
		admin_url( 'profile.php' )
	);
	?>
</p>
