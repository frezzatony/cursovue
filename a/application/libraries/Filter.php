<?php

/**
 * @author Tony Frezza

 */

class Filter extends Data{

    
    
    function __construct($arrProp = array())    {
        
        parent::__construct($arrProp);
        
        $this->CI->config->load('filter', TRUE);
                
        $directory = dirname(__FILE__).'/Filter/';
        
        require_once($directory.'Filter_inputs_defaults.php');
        $this->_scanInputDirectory($directory.'Inputs/');
        
        require_once($directory.'Filter_typeforms_defaults.php');
        $this->_scanInputDirectory($directory.'TypeForms/');
                
        
        $this->CI->template->loadCss(BASE_URL.'assets/plugins/filter/css/filter.css');
        $this->CI->template->loadJs(BASE_URL.'assets/plugins/filter/js/filter.js');
        
    }
    
    
    private function _scanInputDirectory($directory){
        
        $scanned_directory = array_diff(scandir($directory), array('..', '.'));
       
        foreach($scanned_directory as $input_file){
            
            if(is_dir($directory.$input_file)){
                continue; 
            } 
            
            require_once($directory.$input_file);
            
            $objectName = preg_replace('/.php/', '', $input_file);
            $className = $objectName.'_filter';
            
            $this->{strtolower($objectName)} = new $className;
            
        }   
    }
}

?>
