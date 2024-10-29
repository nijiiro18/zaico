<!-- header.php -->
<?php
session_start();

// ユーザーがログインしていない場合、ログインページにリダイレクト
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.html");
    exit();
}
?>

<header style="display: flex; align-items: center; justify-content: space-between; padding: 10px;">
    <div style="display: flex; align-items: center;">
        <img src="logo.png" alt="Logo" style="height: 50px; margin-right: 20px;">
        <h1 style="margin: 0;">にじいろ市場</h1>
    </div>
    <div style="text-align: right;">
        <!-- ログイン中のユーザー名を表示 -->
        <div style="margin-right: 15px; font-weight: bold;">
            ログイン中: <?= htmlspecialchars($_SESSION['loggedInUser']); ?>
        </div>
        <!-- ログアウトボタン -->
        <form action="logout.php" method="post" style="display: inline;">
            <button type="submit" style="padding: 5px 10px; font-size: 1rem;">ログアウト</button>
        </form>
    </div>
</header>

<nav style="padding: 10px; background-color: #f8f8f8;">
    <ul style="list-style: none; display: flex; gap: 15px; padding: 0; margin: 0;">
        <li><a href="inventory-search.html">在庫検索</a></li>
        <li><a href="low-stock-search.html">在庫少検索</a></li>
        <li><a href="stock-in.html">入庫</a></li>
        <li><a href="stock-out1.html">出庫（お客様登録）</a></li>
        <li><a href="stock-out2.html">出庫（発送時）</a></li>
        <li><a href="inventory-check.html">棚卸</a></li>
        <li><a href="best-sellers.html">売れ筋表示</a></li>
        <li><a href="export-import.html">エクスポート・インポート</a></li>
        <li><a href="order-alerts.html">発注アラート</a></li>
        <li><a href="master-maintenance.html">マスタメンテ</a></li>
        <li><a href="data-maintenance.html">データメンテ</a></li>
    </ul>
</nav>
