const items = document.querySelectorAll(".img-item");


for (let i = 0; i < items.length; i++){
    const keyframe = {
        opacity:[0, 1],
        // rotate:['x 90deg', '0deg'],
        // translate:['0 330px', '0 0'],
        rotate:['10deg', '0deg'],
        scale:[1.1, 1],
        filter:['blur(20px)', 'blur(0px)'],
    };

    const option = {
        duration: 3000,
        delay:i *500,
        fill: 'forwards'
    };

    items[i].animate(keyframe, option)
}