# Study-threejs-db  

### threejs  

javascript の 3D 描画ライブラリ  
昔少し勉強したけど、書き方を忘れた。  


---  


### データベースにアクセスするための php 開発　at Windows  

postgres に php からアクセスする  
サーバを立てる必要がある。  

サーバは、Apache を起動する  

Apache の設定の、  
C:\var\Apache24\conf\httpd.conf　を書き換える  

起動場所を、250行目くらいの  
```
DocumentRoot "C:\Users\yoshioca\Documents\Study-threejs-db"
<Directory "C:\Users\yoshioca\Documents\Study-threejs-db">
```
ここにかいておく  

ブラウザから localhost にアクセスする。  
[http://loalhost:85](http://loalhost:85)  


---  



### 接続テスト  

TEST-Connect.php  

```php

// これはデバック用のエラー表示
<?php
// ini_set("display_errors", On);
// error_reporting(E_ALL);
?>


<?php

// echo "hello world";

$conn_string = "host = localhost port = 5432 dbname =　postgres user = postgres password = postgres";
// echo $conn_string;

$db_conn = pg_connect($conn_string);
// echo $db_conn;

if (!$db_conn){
  echo "Failed<br>";
  // error_log(pg_last_error());
} else {
  echo "Success<br>";
}

?>

```
