
<?php
require 'send.php';

$response = file_get_contents("http://43.248.128.139/api/Domain/index");

$res = json_decode($response,true);

if(is_array($res['data']['data'])){
    for ($i=0; $i < count($res['data']['data']); $i++) { 
        $domain =  $res['data']['data'][$i]['domain'];
        $id =  $res['data']['data'][$i]['domain_id'];
        domain_get($domain,$id);        

    }
}

?>

