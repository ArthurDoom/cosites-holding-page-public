<?php
/**
 * Maintenance mode template shown to logged out users.
 *
 * @package   ng-maintenance-mode
 * @copyright Copyright (c) 2018, Walter Craig
 * @license   GPL2+
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<link href='//fonts.googleapis.com/css?family=Lato:400,400italic,700|Playfair+Display' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo plugins_url( 'css/maintenance.css', dirname( __FILE__ ) ); ?>">

		<title>Down for Maintenance | <?php echo esc_html( get_bloginfo( 'name' ) ); ?></title>
	</head>

	<body class="cosites">
		<main class="holding-content">
			<h1><?php esc_html_e( 'We are currently updating this site', '_fitbox' ); ?></h1>
			<p><?php esc_html_e( 'While we add the finishing touches, why not take a look at our other', '_fitbox' ); ?> <a href="https://cosites.co.uk"><?php esc_html_e( 'websites', '_fitbox' ); ?></a></p>
		</main>
		<footer class="holding-footer">
			<div class="logo">
				<a href="https://cosites.co.uk/" rel="home">
					<img src="
						<?php echo plugins_url( '/img/logo.svg', dirname( __FILE__ ) ); ?>"onerror="this.src='<?php echo plugins_url( '/img/logo.png', dirname( __FILE__ ) ); ?>'; this.onerror=null;">
				</a>
			</div>
			<span class="copy-that">&copy; <? echo date('Y');?></span>
		</footer>
	</body>
</html>
