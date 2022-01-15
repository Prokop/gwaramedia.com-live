<?php

namespace FSPoster\App\Providers;

use FSPoster\App\Pages\Base\Controllers\Ajax as BaseAjax;
use FSPoster\App\Pages\Logs\Controllers\Ajax as LogsAjax;
use FSPoster\App\Pages\Share\Controllers\Ajax as ShareAjax;
use FSPoster\App\Pages\Accounts\Controllers\Ajax as AccountsAjax;
use FSPoster\App\Pages\Settings\Controllers\Ajax as SettingsAjax;

Helper::disableDebug();

class Ajax
{
	use BaseAjax, AccountsAjax, ShareAjax, LogsAjax, SettingsAjax;

	public function __construct ()
	{
		$methods = get_class_methods( $this );

		foreach ( $methods as $method )
		{
			if ( $method === '__construct' )
			{
				continue;
			}

			add_action( 'wp_ajax_' . $method, function () use ( $method ) {
				$this->$method();

				exit;
			} );
		}
	}

	public function activate_app ()
	{
		$found_from     = Request::post( 'statistic', '', 'string' );
		$email          = Request::post( 'email', '', 'string' );
		$password       = Request::post( 'password', '', 'string' );
		$passwordRepeat = Request::post( 'passwordRepeat', '', 'string' );

		if ( Helper::getOption( 'poster_plugin_installed', '0', TRUE ) )
		{
			Helper::response( FALSE, esc_html__( 'Your plugin is already installed!', 'fs-poster' ) );
		}

		$result = Helper::api_cmd( 'register', 'POST', '', [
			'email'                 => $email,
			'password'              => $password,
			'password_confirmation' => $passwordRepeat,
			'version'               => Helper::getVersion(),
			'found_from'            => $found_from,
			'domain'                => network_site_url()
		] );

		if ( $result[ 'status' ] === 'error' )
		{
			Helper::response( FALSE, htmlspecialchars( $result[ 'message' ] ) );
		}

		Helper::setOption( 'access_token', $result[ 'access_token' ], TRUE );

        register_uninstall_hook( FSPL_ROOT_DIR . '/init.php', [ Helper::class, 'removePlugin' ] );

        Helper::setOption( 'poster_plugin_installed', Helper::getVersion(), TRUE );

		Helper::response( TRUE, [ 'msg' => esc_html__( 'Plugin installed!', 'fs-poster' ) ] );
	}
}
