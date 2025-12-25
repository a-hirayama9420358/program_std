// ローディング画面からの変遷
// ==========
const loadingAreaGrey = document.querySelector('#loading');
const loadingAreaGreen = document.querySelector('#loading-screen')
const loadingText = document.querySelector('#loading p')

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

//ローディング中のテキスト
loadingText.animate(
    [
        {
            opacity: 1,
            offset: .8, //80%
        },
        {
            opacity: 0,
            offset: 1,
        },
    ],
    {
        duration: 1200,
        easing: 'ease',
        fill: 'forwards'
    },
);
});

// 画像ギャラリー
// ==========
const mainImage = document.querySelector('.gallery-image img')
const thumbImages = document.querySelectorAll('.gallery-thumbnails img')


//mousoverのイベントを０から５の全てのiamageごとに書くのが面倒なんでFor分で処理
// for (let i = 0; i < thumbImages.length; i++){
//     thumbImages[i].addEventListener('mouseover', (event) =>{
//         mainImage.src = event.target.src;
//         mainImage.animate({opacity: [0, 1]}, 500);
//     });
// }

//ForEachでthumbImagesの要素を渡す箱として引数imgを設定、名前はなんでもいい
thumbImages.forEach((img) => {
    img.addEventListener('mouseover', (event) =>{
        mainImage.src = event.target.src;
        mainImage.animate({opacity:[0, 1]}, 500);
    })
});

const menuOpen = document.querySelector('#menu-open');
const menuClose = document.querySelector('#menu-close');
const menuPanel = document.querySelector('#menu-panel');
const menuItems = document.querySelectorAll('#menu-panel li')
const menuOptions = {
    duration: 1400,
    easing: 'ease',
    fill: 'forwards',
}

// メニューを開く
menuOpen.addEventListener('click', () => {
    // console.log('メニュー開く');
    menuPanel.animate({translate: ['100vw', 0]}, menuOptions);

// リンクをひとつずつ表示 引数itemにはリストの各要素が入り第二引数indexには各要素の番号が自動で入る
    menuItems.forEach((item, index) =>              {
        // console.log(`${index}番目のリスト`);
        item.animate({
            opacity:[0, 1],
            translate:['2rem', 0],
        },
        {
            duration: 3000,
            delay: 1000 *index,
            easing: 'ease',
            fill: 'forwards',
        }
    );
});
});

// メニュー閉じる
menuClose.addEventListener('click', () => {
    menuPanel.animate({translate: [0, '100vw']}, menuOptions);
    menuItems.forEach((item) => {
        item.animate({opacity: [1, 0]}, menuOptions);
    });
});

// 監視対象が範囲内に入ったら実行する動作 第二引数obsは「const fadeObserver = new IntersectionObserver(animateFade)」
const  animateFade = (entries, obs) => {
    entries.forEach((entry) => {
        if(entry.isIntersecting){
            // console.log(entry.target);
            entry.target.animate(
                {
                    opacity: [0, 1],
                    filter: ['blur(.4rem)', 'blur(0rem)'], //blurでぼかしを調整
                    translate: ['0 10rem', 0],
                },
                {
                    duration: 2000,
                    easing: 'ease',
                    fill: 'forwards',
                }
            );
            // 一度ふわっと表示させたら監視をやめる
            obs.unobserve(entry.target);
        }
});
};

// 監視設定　インスタンス
const fadeObserver = new IntersectionObserver(animateFade)

// .fadeinを監視するように指示
const  fadeElements = document.querySelectorAll('.fadein')

// fadeElementsは配列なんで ForEachで回して各要素を監視
fadeElements.forEach((fadeElement) => {
fadeObserver.observe(fadeElement);
});