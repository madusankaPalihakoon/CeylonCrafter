const imgs = ["img1.jpg", "img2.jpg", "img3.jpg", "img4.jpg", "img5.jpg"];

const background_wrapper = document.querySelector(".bg-wrapper");

imgs.forEach((img, index) => {
    const swiper_slide = document.createElement('div');
    swiper_slide.className = 'swiper-slide';

    const imgElement = document.createElement('img');
    imgElement.src = 'assets/img/' + img;
    imgElement.className = 'd-block w-100 thumbnailImg';
    imgElement.alt = `Slide ${index + 1}`;

    const gradient = document.createElement('div');
    gradient.className = 'gradient-overlay';

    swiper_slide.appendChild(imgElement);
    swiper_slide.appendChild(gradient);
    background_wrapper.appendChild(swiper_slide);
});