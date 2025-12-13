// ローディング画面からの変遷
// ==========
const loadingAreaGrey = document.querySelector('#loading');
const loadingAreaGreen = document.querySelector('#loading-screen')

// ローディング中(グレースクリーン)
window.addEventListener('load',() =>{
    // ローディング中(グレースクリーン)
    loadingAreaGrey.animate({
        opacity: [1, 0],
        visibility: 'hidden',
    },
    {
        duration: 3200,
        delay: 1200,
        easing: 'ease',
        fill: 'forwards'
    }
    );
    // ローディング中(薄緑スクリーン)
    loadingAreaGreen.animate(
    {
        translate:['0 100vh', '0 0', '0 -100vh']
    },
    {
        duration: 2000,
        delay: 800,
        easing: 'ease',
        fill: 'forwards',
    }
    );
});

