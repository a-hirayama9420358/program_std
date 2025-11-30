const heading = document.querySelector('#heading');
const rote = document.querySelector('#rote');
const color = document.querySelector('#color');

const keyframes = {
    color: ['transparent', '#fff'],
    backgroundPosition: ['100% 0', '0 0'],
};

const keyframes2 = {
    opacity: [0, 1],
    rotate: ['y 360deg', 0],
};

const keyframes3 = {
    color: ['#f66', '#fc2', '#0c9', '#0bd']
};

const option = {
    duration: 4000,
    easing: 'ease'
}

const option2 = {
    duration: 8000,
    direction: 'alternate',
    iterations: Infinity,
}

heading.animate(keyframes, option)
rote.animate(keyframes2, option)
color.animate(keyframes3, option2)


// heading.style.transform = 'translate(100px, 300px) rotate(15deg) scale(2.5)';
