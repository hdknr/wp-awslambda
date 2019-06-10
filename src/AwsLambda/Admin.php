<?php
namespace Hdknr\AwsLambda;

class Admin extends Base {
    use Hook;

    function __construct( array $argument = array() ){
        $this->install_hooks();
    }

    function show_page() {
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }

        $ctx = \Timber::get_context();
        $page_id = $this->get_page_id();

        if( $page_id == 'options' && $_SERVER['REQUEST_METHOD'] == 'POST') {
            Option::get_instance()->update($_POST);
        }

        \Timber::render('templates/page.html', $ctx);    
    }

    public function action_admin_menu (){
        // https://codex.wordpress.org/Function_Reference/add_options_page
        add_options_page(
            'AWS Lambda Settings',     // Page Title
            'AWS Lambda',               // Menu Title 
            'manage_options',           // Capablities
            "{$this->Name}-options",             // Slug
            array($this, 'show_page'));

        // https://codex.wordpress.org/Function_Reference/add_management_page
        add_management_page(
            'AWS Lambda Execution',     // Page Title
            'AWS Lambda',               // Menu Title 
            'manage_options',           // Capablities
            "{$this->Name}-management",             // Slug
            array($this, 'show_page'));
    }

    public function get_page_id() {
        // https://codex.wordpress.org/Function_Reference/get_current_screen
        $id = get_current_screen()->id;
        preg_match('/[^-]+$/', $id, $matches);
        return $matches[0];
    }

    public function action_admin_footer() {
        $ctx = \Timber::get_context();

        $ctx["aws"] = Option::get_instance()->get();
        $page_id = $this->get_page_id();

        \Timber::render("templates/script.{$page_id}.html", $ctx);   
    }

    public function filter_admin_head () {
        $ctx = \Timber::get_context();
        \Timber::render('templates/head.html', $ctx);   
    }
}