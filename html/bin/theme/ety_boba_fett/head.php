<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');

// 팝업추가
if(defined('_INDEX_')) {
    include G5_BBS_PATH.'/newwin.inc.php';
}
?>

<?php include_once(G5_THEME_PATH.'/navication.php');?>


<?php  if(defined('_INDEX_')) {  //첫페이지 만 ?>
    <div class="main_container">
<?php  }else{  //게시판만 날씬하게 ?>   
   
      <?php  
         if($bo_table) {
         echo '<div class="container boardpage">';
      }else{  
         echo '<div class="container normalpage">';
      }  ?>

<?php  }  ?>   