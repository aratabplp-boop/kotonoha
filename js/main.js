$(function() {
    const currentPath = window.location.pathname;
    const isInsideRoom = currentPath.indexOf('/rooms/') !== -1;
    const msg = "きょうも たくさん おはなし ききたいな！";

    // 【処理】タイトル画面の「はじめる」を押す
    $('#btn-start').on('click', function() {
        console.log("① タイトル → ② 歓迎画面へ");
        $('#scene-title').removeClass('active');
        $('#scene-welcome').addClass('active');
        
        // 歓迎テキストをタイピング演出
        let i = 0;
        const timer = setInterval(() => {
            $('#welcome-text').append(msg[i]);
            i++;
            if (i >= msg.length) clearInterval(timer);
        }, 100);
    });

// --- ② 歓迎画面 → お庭（home.php）へ移動 ---
    $('#btn-to-home').on('click', function() {
        console.log("② 歓迎画面 → home.php へ移動します");
        window.location.href = 'home.php'; // URLを移動させる命令
    });

// --- ③ お庭の「各おへや」をクリックした時の処理 ---
    $('.room').on('click', function() {
        const roomName = $(this).data('room'); // interview, kirari など
        console.log(roomName + " のお部屋に移動します");
        // 例: interview なら rooms/interview.php へ
        window.location.href = 'rooms/' + roomName + '.php';
    });

// --- フッターナビゲーション ---
    $('.nav-btn').on('click', function(e) {
        const targetPage = $(this).attr('href');
        if (!targetPage || targetPage === '#' || targetPage === '') return;
        e.preventDefault();

        let finalDestination = targetPage;

        
        // 目的地（album, unei等）はすべてお庭（ルート）
        // だから、今「お部屋（rooms）」にいる時だけ、一歩外（../）に出る。
        // お庭にいるなら、そのままそのファイルを開く。
        if (isInsideRoom) {
            finalDestination = '../' + targetPage;
        }

        console.log("移動先: " + finalDestination);
        window.location.href = finalDestination;
    });

    // --- ⑤ 現在地の光（active）の判定 ---
    const currentFile = currentPath.split("/").pop();
    $('.nav-btn').each(function() {
        const btnHref = $(this).attr('href');
        const isHome = (currentFile === "" || currentFile === "index.php" || currentFile === "home.php") && btnHref === "home.php";
        
        if (btnHref === currentFile || isHome) {
            $(this).addClass('active');
        }
    });

});