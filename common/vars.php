<?php
//サーバーが $_SERVER['HTTPS'] の値を返さない場合で、SSL化されいる場合は $_SERVER['HTTPS'] に 'on' を設定
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) and $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
}
//Home の URL の組み立て
$host_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'];
