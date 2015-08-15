<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	exit( 1 );
}
$wgExtensionCredits['other'][] = array(
	'author'         => 'John Lewis',
	'descriptionmsg' => 'mirahezemessages-description',
	'name'           => 'MirahezeMessages',
	'path'           => __FILE__,
	'url'            => '//github.com/Miraheze/MirahezeMessages',
);

$wgMessagesDirs['MirahezeMessages'] = dirname( __FILE__ ) . '/i18n';
