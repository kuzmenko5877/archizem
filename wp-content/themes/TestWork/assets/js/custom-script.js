const counters = document.querySelectorAll('.company-number');
const speed = 200;

const animateCounter = (counter) => {
    const animate = () => {
        const value = +counter.getAttribute('akhi');
        const data = +counter.innerText;

        const time = value / speed;
        if(data < value) {
            counter.innerText = Math.ceil(data + time);
            setTimeout(animate, 1);
        } else {
            counter.innerText = value;
        }
    };
    animate();
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounter(entry.target);
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.5 // Запускаем анимацию, когда элемент виден хотя бы на 50%
});


counters.forEach(counter => {
    observer.observe(counter);
});

