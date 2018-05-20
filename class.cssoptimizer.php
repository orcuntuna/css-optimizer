<?php

class cssOptimizer{
    
    /* @orcuntuna */

    private function sikistir($kod) {

        $kod = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $kod);
        $kod = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $kod);
        $kod = str_replace(";}","}",$kod);
        $kod = str_replace("} ","}",$kod);
        $kod = str_replace(" }","}",$kod);
        $kod = str_replace("{ ","{",$kod);
        $kod = str_replace(" {","{",$kod);
        $kod = str_replace(", ",",",$kod);
        $kod = str_replace(" ,",",",$kod);
        $kod = str_replace(" !","!",$kod);

        return $kod;
    }

    public function optimize($kaynak){

        $realpath = realpath(".");

        foreach($kaynak as $row){
            
            $urlmi = filter_var(trim($row),FILTER_VALIDATE_URL);

            if(!$urlmi){$row = $realpath.$row;}
            
            if(!$urlmi && !file_exists($row)){
                continue;
            }

            try{
                $kod = file_get_contents($row);
            }catch(Exception $e){

            }

            $yenikod = $this->sikistir($kod);
            
            echo '<style type="text/css">'.$yenikod.'</style>';
        }

    }


}