<?php
function laynoidung ( $noidung , $start , $stop ) {
$bd = strpos ( $noidung , $start );
$kt = strpos ( substr ( $noidung , $bd ), $stop ) + $bd ;
$content = substr ( $noidung , $bd , $kt - $bd );
            return $content ;
            }
$urlkqsx = 'http://wap.vn/wap/xoso/ketqua.jsp?code=XSTD' ;
$sourcekqsx = @ file_get_contents ( $urlkqsx );
$batdaukqsx = '<b>Xổ số miền bắc</b>' ;
$ketthuckqsx = '<a href="ketqua.jsp?code=XSTD">Làm mới</a><br/>' ;
$tinkqsx = laynoidung ( $sourcekqsx , $batdaukqsx , $ketthuckqsx );
echo $tinkqsx ;
?>