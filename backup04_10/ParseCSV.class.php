<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParseCSV
 *
 * @author B45802
 */
class ParseCSV {

    //put your code here
    var $file_handle;

    function ParseCSV($absolutefilePath) {
        if (empty($absolutefilePath) || !isset($absolutefilePath)) {
            echo "ERROR: Didn't get .csv file path";
            return;
        } else {
            if (is_readable($absolutefilePath)) {
                if (filesize($absolutefilePath) <= 0) {
                    echo "CSV File read is empty";
                    return;
                }
                $this->file_handle = fopen($absolutefilePath, "r");
            } else {
                echo "ERROR: CSV file not readable";
                return;
            }
        }
    }

    function parse($colsToFetchArr) {
        $isFirstRow = TRUE;
        $valIndxArray = Array();
        $indxOfOperation;
        $indxOfProjType;
        $indexOfStatus;
        $count = 0;
        $retDataArr = Array();
        while (!feof($this->file_handle)) {

            $dataReadArr = fgetcsv($this->file_handle, 0, "\n");
            //compute which indexes to iterate: header
            if ($isFirstRow) {
                $isFirstRow = FALSE;
                // I dont need to do anything special it, so just ignore the first row
			} else {
                // go over the data now 
                if ($dataReadArr && array_key_exists(0, $dataReadArr) ) {
                   // $oneRowArr = explode(",", $dataReadArr[0]);
                   $oneRowArr =   str_getcsv($dataReadArr[0], ",");
                   
                        $oneRetRow = Array(); 
                        foreach ($oneRowArr as $val) { 
                            if($val == "Average")
								{
									echo "done";
									return;
								}
                        }
                        $retDataArr[] = $oneRetRow;
                     
                }
            }
        }

        fclose($this->file_handle); 
        return $retDataArr;
    }

//    function removeQuotes($strArr) {
//        foreach ($strArr as $val) {
//            
//        }
//    }

}

?>
