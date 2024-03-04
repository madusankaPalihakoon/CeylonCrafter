const package_details = document.querySelectorAll(".package_details");


package_details.forEach(function(button) {
    button.addEventListener('mouseover', function() {
        const infoCaret = button.closest('.package_details').querySelector("#pkge-details-caret");
        infoCaret.classList.replace('bi-caret-right', 'bi-caret-right-fill');
        infoCaret.style.marginLeft = '10px';
        infoCaret.style.transition = 'margin-left 1s';
    });
});

package_details.forEach(function(button) {
    button.addEventListener('mouseout', function() {
        const infoCaret = button.closest('.package_details').querySelector("#pkge-details-caret");
        infoCaret.classList.replace('bi-caret-right-fill', 'bi-caret-right');
        infoCaret.style.marginLeft = '0';
    });
})