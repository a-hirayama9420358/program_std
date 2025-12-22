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