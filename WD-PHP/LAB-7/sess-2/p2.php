<?php
if(isset($_POST['write'])){
    $filename=$_POST['file'];
    $str=$_POST['data'];
    $file=fopen($filename,'a');
    if($file){
        fwrite($file,$str);
        fclose($file);
        echo "content write successfully";
    }
    else{
        echo "error in opening";}
}
elseif (isset($_POST['read'])) {
    # code...
    $filename=$_POST['file'];
    if(file_exists($filename)){
        $str=file_get_contents($filename);
        echo $str;
    }
}

?>