<?php
class Nameproc{
    public function ACname(){
        if(isset($_POST['CNB'])){
            return"";  
        }
        else{
           $this->listOfNames = $_POST['listOfNames'];
            if($_POST['addName'] != ""){
                $newname = substr($_POST['addName'],strpos($_POST['addName']," ")+0) . ", " . substr($_POST['addName'],0,strpos($_POST['addName']," "));
                
                if($_POST['listOfNames'] == "") {
                    $this->listOfNames = $newname;
                }
                else{
                    $switchNames = preg_split("/\n/", $this->listOfNames ,0, PREG_SPLIT_NO_EMPTY);
					array_push($switchNames, $newname);
					sort($switchNames);
					$this->listOfNames = "";
					for($i = 0; $i < count($switchNames); $i++) {
						$this->listOfNames .= $switchNames[$i] . "\n" ;
                    }
                }
            }
            return $this->listOfNames;
        }
    }
}
?>