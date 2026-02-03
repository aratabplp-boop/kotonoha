<?php include('includes/header.php'); ?>

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

<?php include('includes/footer.php'); ?>