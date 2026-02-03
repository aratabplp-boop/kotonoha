<?php
    // 【処理】今いる場所が「rooms」フォルダの中かどうかを判定する
    $current_dir = basename(dirname($_SERVER['PHP_SELF']));
    $path_prefix = ($current_dir === 'rooms') ? '../' : '';
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>コトノハ・アルバム</title>
    <link rel="stylesheet" href="<?php echo $path_prefix; ?>css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="garden-viewport">
    <div class="garden-container">
        <header class="garden-header">
            <div class="stat-item">🏆 Lv.1</div>
            <div class="stat-item">✨ 120</div>
            <div class="stat-item">🪙 50</div>
            <div class="stat-item">🔥 7</div>
        </header>
