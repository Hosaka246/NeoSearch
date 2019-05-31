<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="GENERATOR" content="JustSystems Homepage Builder Version 21.0.5.0 for Windows">
<title></title>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-85299351-4');
</script>

</head>
<body>
<?php
#設定
$IKAGARRAY = array("-いかがでしたか", "-いかがでしたか -いかがでしょうか -いかがですか","-いかが","");
$FTARRAY = array("filetype:html","filetype:php","filetype:pdf","");


$naiyou = filter_input(INPUT_POST,'NAIYOU', FILTER_SANITIZE_SPECIAL_CHARS);
$SEARCH = filter_input(INPUT_POST,'SEARCH', FILTER_SANITIZE_SPECIAL_CHARS);
$WordPress = filter_input(INPUT_POST, 'WordPress', FILTER_SANITIZE_SPECIAL_CHARS);
$Reserved = filter_input(INPUT_POST, 'Reserved', FILTER_SANITIZE_SPECIAL_CHARS);
$IKAGA = filter_input(INPUT_POST, 'IKAGA', FILTER_SANITIZE_SPECIAL_CHARS);
$FILETYPE = filter_input(INPUT_POST, 'FILETYPE', FILTER_SANITIZE_SPECIAL_CHARS);

if ($SEARCH = "pittari"){
 $data = '"'.$naiyou. '" ';
}else{
 $data = $naiyou." ";
}

if (isset($WordPress)) $data .= $WordPress." "; 
if (isset($Reserved)) $data .= $Reserved." "; 

$data .= $IKAGARRAY[$IKAGA]." ";
$data .= $FTARRAY[$FILETYPE]." ";

//(https://www.google.com/search?q=(＜？＝)=$data (？＞)を、
//GoogleにPUTしようと思えばできる気はするが、やめておく。

?>
コピーペーストして検索にかけてください：<br>
<?php
echo $data;
?>
<br>
</body>
</html>
