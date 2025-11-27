const text = document.querySelector('#colorText');
const color = document.querySelector('#colorPicker')



const colorBg = () => {
    //選択した色に背景を変更
    document.body.style.backgroundColor = color.value

    //カラーコードを表示
    if(color.value== '#ffffff') {
        text.textContent = `カラーコード：${color.value}(white)`;
    } else if (color.value== '#000000') {
        text.textContent = `カラーコード：${color.value}(black)`;
    }
    else {
        text.textContent = `カラーコード：${color.value}`
    }
};

//カラーピッカーが変更されたら、colorBgを発動
color.addEventListener('input', colorBg)

const message = (name, weather) => {
    return `${name}さん、こんにちは！今日の天気は${weather}です`;
};

console.log(message('mana', '雨'));
