<?php
namespace Hdknr\AwsLambda;

class App extends Base {
    use Hook;

    protected $admin = null;
    protected $option = null;

    public function __construct(array $argument = array()) {
        $this->admin = Admin::get_instance();
        $this->option = Option::get_instance();
        $this->install_hooks();
        error_log('App construct');
    }  
}