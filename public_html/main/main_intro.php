<?php
/******************************************************************************
 * @Subject         : 세션의 유무 체크 후 페이지 이동
 * @author          : 김영빈 (kimyounil1@gmail.com)
 * @since           : 2016-03-16
 * @Description     : 세션이 있으면 메인 페이지로 없다면 로그인 페이지로 보냄
 ******************************************************************************/
require_once $_SERVER["DOCUMENT_ROOT"]."/include/session_ch.php";
$url = $_SERVER["DOCUMENT_ROOT"]."/login/login.php";
if ( $login_check == 0 ){
    Header("Location: ".$url);
}
?>
