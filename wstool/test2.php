<?
//echo "<BR>".$_SERVER["SERVER_NAME"];


echo urlencode("1' or 1=1--");

echo urldecode("%27");
echo urldecode("%5F");

echo "<BR>urlencode:".urlencode("abc_001한글?=&/%+@");
echo "<BR>rawurlencode:".urlencode("abc_001한글?=&/%+@");
echo "<BR>".eregi("[^a-z0-9]","qiewrsdfsdkfhsh2한342y432421");

echo "<BR>한글있어?:".eregi("^[가-힣]+$","한글");
?>