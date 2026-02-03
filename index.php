<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>パパママあのね！コトノハ・ガーデン</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
 <div class="garden-viewport">
    <div class="garden-container">

        <div id="scene-title" class="scene active">
            <div class="title-content">
                <h1 class="logo-text">パパママあのね！<br><span>コトノハ・アルバム</span></h1>
                <button id="btn-start" class="btn-puni">はじめる</button>
            </div>
        </div>

    <div id="scene-welcome" class="scene">
       <div class="welcome-content">
          <div class="large-char">
            <img src="img/Simasmile.jpg" alt="しまじろう">
           </div> 
          <div class="welcome-bubble">
            <p id="welcome-text"></p>
         </div>
          <button id="btn-to-home" class="btn-puni-small">コトノハ・ガーデンへいく</button>

          <a href="album.php" class="link-sub-album">コトノハ・アルバムを聴く</a>
         
        </div>
     </div>
<div id="scene-home" class="scene">
        <header class="garden-header">
            <div class="stat-item">🏆 Lv.1</div>
            <div class="stat-item">✨ 120</div>
            <div class="stat-item">🪙 50</div>
            <div class="stat-item">🔥 7</div>
        </header>
        
        <div class="char-welcome-area">
            <div class="char-wrapper">
                <div class="char-image">
                    <img src="img/Simasmile.jpg">
                </div>
                <div class="char-bubble-main">
                    <p id="home-char-say">
                        ようこそ！コトノハ・ガーデンへ！<br>
                        たくさんおはなししよう！
                    </p>
                </div>
            </div>
        </div>
      
        <main class="garden-map">
            <div class="map-content">
                <div class="room left" data-room="interview">
                    <div class="room-icon-container">
                        <img src="img/interview.png" alt="インタビュー">
                    </div>
                    <span class="room-name">わくわくインタビューのへや</span>
                </div>

                <div class="room right" data-room="kirari">
                    <div class="room-icon-container">
                        <img src="img/kirari.png" alt="キラリ">
                    </div>
                    <span class="room-name">きょうのキラリ☆のへや</span>
                </div>

                <div class="room left" data-room="thanks">
                    <div class="room-icon-container">
                        <img src="img/thankyou.png" alt="ありがとう">
                    </div>
                    <span class="room-name">パパママありがとう💛のへや</span>
                </div>

                <div class="room right" data-room="read">
                    <div class="room-icon-container">
                        <img src="img/read.png" alt="どくしょ">
                    </div>
                    <span class="room-name">くいずのへや</span>
                </div>

                <div class="room left" data-room="mistake">
                    <div class="room-icon-container">
                        <img src="img/mistake.png" alt="だいじょうぶ">
                    </div>
                    <span class="room-name">だいじょうぶのへや</span>
                </div>

                <div class="room right" data-room="timecapsel">
                    <div class="room-icon-container">
                        <img src="img/timecupsel.png" alt="たいむれたー">
                    </div>
                    <span class="room-name">たいむれたーのへや</span>
                </div>
            </div>
        </main> 
        
        <footer class="garden-footer">
            <nav class="footer-nav">
             <a href="home.php" class="nav-btn active">
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

    </div> </div> </div>
    

<script src="js/main.js"></script>
</body>
</html>