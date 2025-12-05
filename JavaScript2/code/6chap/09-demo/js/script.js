const items = document.querySelectorAll(".img-item");


for (let i = 0; i < items.length; i++){
    const keyframe = {
        opacity:[0, 1]
    };

    const option = {
        duration: 3000,
        fill: 'forwards'
    };

    items[i].animate(keyframe, option)
}