
<footer class="garden-footer">
    <nav class="footer-nav">
        <a href="home.php" class="nav-btn">
            <span class="nav-icon">🏠</span>
            <span class="nav-text">ホーム</span>
        </a>
        <a href="album.php" class="nav-btn">
            <span class="nav-icon">📚</span>
            <span class="nav-text">アルバム</span>
        </a>
        <a href="masters.php" class="nav-btn">
            <span class="nav-icon">💡</span>
            <span class="nav-text">達人Tips</span>
        </a>
        <a href="unei.php" class="nav-btn">
            <span class="nav-icon">📢</span>
            <span class="nav-text">お知らせ</span>
        </a>
        <a href="settings.php" class="nav-btn">
            <span class="nav-icon">⚙️</span>
            <span class="nav-text">設定</span>
        </a>
    </nav>
</footer>
    </div> </div> 

<?php
    // header.phpと同じ判定ロジックを使います
    $current_dir = basename(dirname($_SERVER['PHP_SELF']));
    $path_prefix = ($current_dir === 'rooms') ? '../' : '';
?>
<script src="<?php echo $path_prefix; ?>js/main.js"></script>

</body>
</html>