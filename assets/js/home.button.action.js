const heroBtn = document.getElementsByClassName("hero-btn")[0];
const arrow = document.getElementById("arrow");

const welcomeBtn = document.getElementsByClassName("welcome-btn")[0];
const caret = document.getElementById("caret");

const infoBtn = document.querySelectorAll(".see-more-btn");

function toggleArrow(status) {
    if (status) {
        arrow.classList.replace('bi-arrow-right-circle', 'bi-arrow-right-circle-fill');
        arrow.style.marginLeft = '10px';
        arrow.style.transition = 'margin-left 1s';
    } else {
        arrow.classList.replace('bi-arrow-right-circle-fill', 'bi-arrow-right-circle');
        arrow.style.marginLeft = '0';
    }
}

function toggleCaret(status) {
    if (status) {
        caret.classList.replace('bi-caret-right', 'bi-caret-right-fill');
        caret.style.marginLeft = '10px';
        caret.style.transition = 'margin-left 1s';
    } else {
        caret.classList.replace('bi-caret-right-fill', 'bi-caret-right');
        caret.style.marginLeft = '0';
    }
}

heroBtn.addEventListener('mouseover', function() {
    toggleArrow(true);
});

heroBtn.addEventListener('mouseout', function() {
    toggleArrow(false);
});

welcomeBtn.addEventListener('mouseover', function() {
    toggleCaret(true);
});

welcomeBtn.addEventListener('mouseout', function() {
    toggleCaret(false);
});

infoBtn.forEach(function(button) {
    button.addEventListener('mouseover', function() {
        const infoCaret = button.closest('.see-more-btn').querySelector("#info-caret");
        infoCaret.classList.replace('bi-caret-right', 'bi-caret-right-fill');
        infoCaret.style.marginLeft = '10px';
        infoCaret.style.transition = 'margin-left 1s';
    });
});

infoBtn.forEach(function(button) {
    button.addEventListener('mouseout', function() {
        const infoCaret = button.closest('.see-more-btn').querySelector("#info-caret");
        infoCaret.classList.replace('bi-caret-right-fill', 'bi-caret-right');
        infoCaret.style.marginLeft = '0';
    });
});

