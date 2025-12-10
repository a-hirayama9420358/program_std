//監視対象が範囲内に入ったら実行する動作
const showkirin = () => {
    console.log('きりんさんです')
}

//監視ロボットの設定
const kirinObserver = new IntersectionObserver(showkirin);

//キリンを監視するように指示
kirinObserver.observe(document.querySelector('#kirin'));