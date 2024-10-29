<?php
session_start();
session_unset(); // すべてのセッション変数を削除
session_destroy(); // セッションを破棄
header("Location: login.html"); // ログインページにリダイレクト
exit();
?>