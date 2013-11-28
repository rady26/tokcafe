<?php
/// <summary>
///	両トリム
/// </summary>
function mb_trim($str) {
    return mb_Rtrim(mb_Ltrim($str));
}
/// <summary>
///	左トリム
/// </summary>
function mb_Ltrim($str) {
    return mb_ereg_replace("^��+", "", $str);
}
/// <summary>
///	右トリム
/// </summary>
function mb_Rtrim($str) {
    return mb_ereg_replace("��+$", "", $str);
}
?>