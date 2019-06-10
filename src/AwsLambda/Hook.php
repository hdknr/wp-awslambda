<?php
namespace Hdknr\AwsLambda;

// https://developer.wordpress.org/reference/functions/add_action/
// https://developer.wordpress.org/reference/functions/add_filter/

trait Hook {
    function install_hooks(){
        foreach(get_class_methods($this) as $fn){
            preg_match("/^(?P<hook>[^_]+)_(?P<name>.+)$/", $fn, $match);
            if($match != null && 
               in_array($match['hook'], ['action', 'filter'])){
                $hook = "add_".$match['hook'];
                $hook($match['name'], array($this, $fn));
            }   
        }   
    }
 }