<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Filter_clauses_after_date_PostgreSql{
	
    static function getQuerySelectString($tabela,$coluna,$valor)
    {
        
        if(replace_db($coluna) == '' ){            
            $strReturn = '("'.$tabela.'"."'.$coluna.'" NOTNULL) ';

            return $strReturn;
        }

        $strReturn = '("'.$tabela.'"."'.$coluna.'"::DATE > '.'\''.replace_db($valor).'\'::DATE) ';
        
        return $strReturn;        
    }
    /**
     * PRIVATES
     */
  }
?>