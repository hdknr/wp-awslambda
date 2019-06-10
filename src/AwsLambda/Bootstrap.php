<?php
namespace Hdknr\AwsLambda;

if ( ! defined( 'WPINC' ) ) {
	die;
}

class Bootstrap {

	protected $plugin_file;
    protected $plugin_dir;
    protected $plugin_app;
    protected $dependencies = [
        '/timber-library/timber.php'    // https://ja.wordpress.org/plugins/timber-library/
    ];

    public function __construct( $file ) {
		$this->plugin_file = $file;
		$this->plugin_dir  = dirname( $file );
    }

    public function autoload() {
        require_once $this->plugin_dir . '/vendor/autoload.php';

        foreach($this->dependencies as $mod) {
            $modpath = WP_PLUGIN_DIR . $mod;
            if(is_file($modpath)){
                require_once $modpath;
            }
        }
    }

    public function i18n (){
        add_action(
            'init',
            function() {
                load_plugin_textdomain( 'wp-awslambda' );
            }
        );
    }

    public function getInstance() {
        // $this->plugin_app = App::get_instance();
        $this->plugin_app = new App();
    }

	public function run() {
        $this->autoload();
        $this->i18n();
        $this->getInstance();
    }
}