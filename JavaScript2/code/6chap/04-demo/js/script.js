const heading = document.querySelector('#heading');

const keyframes = {
    opacity: [0, 1],
    translate: ['0 100px', '200px 300px'],
};

const option = {
    duration: 4000,
    easing: 'ease'
}

heading.animate(keyframes, option)


// heading.style.transform = 'translate(100px, 300px) rotate(15deg) scale(2.5)';
