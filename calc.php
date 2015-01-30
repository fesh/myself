<?php
header('Content-Type:text/html; charset=utf-8');
include_once "sqlDb/ez_sql_core.php";
include_once "sqlDb/ez_sql_mysql.php";
$db = new ezSQL_mysql("root", "mysql@xigotv@2012", "xg", "192.168.1.5");
$db->query("set names utf8"); 
$type = $_POST["type"];
//更新数据库
if($type == "i"){
    $userName = substr_cut($_POST["userName"],30);
    $score = $_POST["score"];    
    $db->query("INSERT INTO calc_user (user_name,score) values ('$userName','$score')");

}else{
    $arr = $db->get_results("select (select count(*)+1850 from calc_user) as cot, a.* from calc_user a order by a.score  limit 10");
    echo json_encode($arr);
}

function substr_cut($str_cut,$length)
{
    if (strlen($str_cut) > $length)
    {
        for($i=0; $i < $length; $i++)
        if (ord($str_cut[$i]) > 128)    $i++;
        $str_cut = substr($str_cut,0,$i)."..";
    }
    return $str_cut;
}
?>
