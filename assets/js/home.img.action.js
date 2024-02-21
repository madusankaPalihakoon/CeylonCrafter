const imgs = ["img1.jpg","img2.jpg","img3.jpg","img4.jpg","img5.jpg"];

const carouselInner = document.querySelector('.carousel-inner');

imgs.forEach((img, index) => {
    const carouselItem = document.createElement('div');
    carouselItem.className = index === 0 ? 'carousel-item active' : 'carousel-item';

    const imgElement = document.createElement('img');
    imgElement.src = '../assets/img/'+img;
    imgElement.className = 'd-block w-100 thumbnailImg';
    imgElement.alt = `Slide ${index + 1}`;

    carouselItem.appendChild(imgElement);
    carouselInner.appendChild(carouselItem);
});
