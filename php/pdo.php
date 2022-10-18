<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:text/html; charset=big5");

$connectionString = "odbc:master";
$db = new PDO($connectionString);

// 依前端傳來參數組合查詢條件
$from = isset($_GET["from"]) ? $_GET["from"] : "";
$to = isset($_GET["to"]) ? $_GET["to"] : "";


$query = " SELECT 工作單號,入廠日 FROM 進貨表 WHERE 入廠日 >= #$from#
 AND 入廠日 <= #$to# 
ORDER BY 入廠日 DESC,工作單號 DESC";

$query = mb_convert_encoding($query, "BIG5", "UTF-8");

// $rs = $db->query($query);
// 用此方法在 fetchAll 若沒有資料會有錯誤訊息

$sth = $db->prepare($query);
$sth->execute();

$arr = $sth->fetchAll(\PDO::FETCH_ASSOC);

// 取得資料陣列

$keys = ['work_id', 'in_date'];
$json = "";

$rows=[];

for ($i = 0; $i < count($arr); $i++) {
  $j = 0;
  foreach ($arr[$i] as $key => $value) {
    // 字串後面有空白導致無法正確輸出 json 格式, 加上 trim            
    $newarr[urlencode($keys[$j])] = urlencode(trim($value));
    $j++;
  }
  // 原始日期 2022-01-05 00:00:00 將時分秒去掉    
  $newarr["in_date"] = substr( $newarr["in_date"] , 0 , 10 );
  $rows[$i] = $newarr;
}

// array to json
$json = json_encode($rows);

// 再用urldecode把資料轉回成中文格式
$json = urldecode($json);

echo $json
?>

