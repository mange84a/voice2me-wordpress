(function () {
	'use strict';
    //Loggo slider
	document.addEventListener('DOMContentLoaded', function () {
        const track = document.querySelector(".logos-list");
        if (!track) return;
        track.innerHTML += track.innerHTML; 
        track.innerHTML += track.innerHTML;

        let scrollAmount = 0;

        function slide() {
            scrollAmount += 1;
            track.style.transform = `translateX(-${scrollAmount}px)`;
            if (scrollAmount > track.scrollWidth / 2) {
                scrollAmount = 0;
            }
            requestAnimationFrame(slide);
        }
        slide();
    });
})();



