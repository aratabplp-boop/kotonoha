$(function() {
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

    // 【処理】歓迎画面の「お庭へいく」を押す
    $('#btn-to-home').on('click', function() {
        console.log("② 歓迎画面 → ③ ホーム画面へ");
        $('#scene-welcome').removeClass('active');
        $('#scene-home').addClass('active');
    });
});