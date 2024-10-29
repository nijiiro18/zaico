<!-- header.php -->
<?php
session_start();

// ���[�U�[�����O�C�����Ă��Ȃ��ꍇ�A���O�C���y�[�W�Ƀ��_�C���N�g
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.html");
    exit();
}
?>

<header style="display: flex; align-items: center; justify-content: space-between; padding: 10px;">
    <div style="display: flex; align-items: center;">
        <img src="logo.png" alt="Logo" style="height: 50px; margin-right: 20px;">
        <h1 style="margin: 0;">�ɂ�����s��</h1>
    </div>
    <div style="text-align: right;">
        <!-- ���O�C�����̃��[�U�[����\�� -->
        <div style="margin-right: 15px; font-weight: bold;">
            ���O�C����: <?= htmlspecialchars($_SESSION['loggedInUser']); ?>
        </div>
        <!-- ���O�A�E�g�{�^�� -->
        <form action="logout.php" method="post" style="display: inline;">
            <button type="submit" style="padding: 5px 10px; font-size: 1rem;">���O�A�E�g</button>
        </form>
    </div>
</header>

<nav style="padding: 10px; background-color: #f8f8f8;">
    <ul style="list-style: none; display: flex; gap: 15px; padding: 0; margin: 0;">
        <li><a href="inventory-search.html">�݌Ɍ���</a></li>
        <li><a href="low-stock-search.html">�݌ɏ�����</a></li>
        <li><a href="stock-in.html">����</a></li>
        <li><a href="stock-out1.html">�o�Ɂi���q�l�o�^�j</a></li>
        <li><a href="stock-out2.html">�o�Ɂi�������j</a></li>
        <li><a href="inventory-check.html">�I��</a></li>
        <li><a href="best-sellers.html">����ؕ\��</a></li>
        <li><a href="export-import.html">�G�N�X�|�[�g�E�C���|�[�g</a></li>
        <li><a href="order-alerts.html">�����A���[�g</a></li>
        <li><a href="master-maintenance.html">�}�X�^�����e</a></li>
        <li><a href="data-maintenance.html">�f�[�^�����e</a></li>
    </ul>
</nav>
