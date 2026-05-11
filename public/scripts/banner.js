const banner = document.querySelector('.banner');
const credits = document.getElementById('credits');

const banners = [
    {
        image: '../assets/banner1.jpg',
        credits: 'Foto de <span class="highlight-word"><a href="https://unsplash.com/pt-br/@dncerullo?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_blank">Danielle Cerullo</a></span> na <span class="highlight-word"><a href="https://unsplash.com/pt-br/fotografias/mulher-em-pe-cercada-por-equipamento-de-exercicio-CQfNt66ttZM?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_blank">Unsplash</a></span>',
    },
    {
        image: '../assets/banner2.jpg',
        credits: 'Foto de <span class="highlight-word"><a href="https://unsplash.com/pt-br/@risennnnn?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_blank">Risen Wang</a></span> na <span class="highlight-word"><a href="https://unsplash.com/pt-br/fotografias/homem-fazendo-levantamento-de-peso-CQfNt66ttZM?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_blank">Unsplash</a></span>',
    },
    {
        image: '../assets/banner3.jpg',
        credits: 'Foto de <span class="highlight-word"><a href="https://unsplash.com/pt-br/@victorfreitas?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_blank">Victor Freitas</a></span> na <span class="highlight-word"><a href="https://unsplash.com/pt-br/fotografias/homem-fazendo-levantamento-de-peso-CQfNt66ttZM?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_blank">Unsplash</a></span>',
    }
];

let currentBannerIndex = 0;
const duration = 3000;

setInterval(() => {
    currentBannerIndex++;
    if (currentBannerIndex >= banners.length) {
        currentBannerIndex = 0;
    }

    banner.style.backgroundImage = `url('${banners[currentBannerIndex].image}')`;
    credits.innerHTML = banners[currentBannerIndex].credits;
}, duration);