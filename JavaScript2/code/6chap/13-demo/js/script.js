//監視対象が範囲内に入ったら実行する動作
const showkirin = (entries) => {
    const keyframes = {
        opacity: [0, 1],
        translate: ['200px 0px', '100px 0'],
    };
    entries[0].target.animate(keyframes, {duration:600, fill:'forwards',});
}

//監視ロボットの設定
const kirinObserver = new IntersectionObserver(showkirin);

//キリンを監視するように指示
kirinObserver.observe(document.querySelector('#kirin'));