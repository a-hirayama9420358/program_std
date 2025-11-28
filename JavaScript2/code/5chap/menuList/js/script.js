const menu = document.querySelector('#menu');

const lists = [
    {
        name: 'いちご',
        img: 'strawberry.jpg',
        price: 450,
    },
    {
        name: 'ライム',
        img: 'lime.jpg',
        price: 400,
    },
    {
        name: 'マンゴー',
        img: 'mango.jpg',
        price: 500,
    },
    {
        name: 'レモン',
        img: 'lemon.jpg',
        price: 400,
    },
    {
        name: 'いちじく',
        img: 'fig.jpg',
        price: 500,
    },
    {
        name: 'りんご',
        img: 'apple.jpg',
        price: 400,
    },
];

// console.log(lists[5].name)

// for (let i = 0; i < lists.length; i++){
//     const content = `<div><img src= "images/${lists[i].img}" alt= "商品画像">
//     <h2>${lists[i].name}</h2>
//     <p>${lists[i].price}円</p></div>`;
//     menu.insertAdjacentHTML('beforeend', content);
// }

for (let i = 0; i < lists.length; i++){
    const {name, img, price} = lists[i];
    const content = `<div><img src= "images/${img}" alt= "商品画像">
    <h2>${name}</h2>
    <p>${price}円</p></div>`;
    menu.insertAdjacentHTML('beforeend', content);
}
