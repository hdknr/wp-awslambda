<?php
namespace Hdknr\AwsLambda;

class Option extends Base {

    protected $option = array(
        'aws_accesskey_id' => '',
        'aws_secret_access_key' => '',
        'aws_region' => '',
    );

    function __construct( array $argument = array() ){
        $opt = get_option($this->Name, array());
        if ($opt != null){
            $this->option = $opt;        
        }
    }

    function __set($name, $value){
        error_log("__set: $name = $value ");
        if(array_key_exists($name, $this->option)){
            $this->option[$name] = $value;
        } else {
            error_log("__set: $name not found");
        }
    }
    function get(){
        return $this->option; 
    }
    function update($values=null){
        if($values != null){
            foreach($values as $k => $v ){
                $this->option[$k] = $v;
            }
        }
        update_option($this->Name, $this->option);
    }
}