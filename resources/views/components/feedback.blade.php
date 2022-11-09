<div class="feedback fixed w-96 bottom-4 glassmorphism-box min-h-[200px]">
    <div class="w-full relative px-6 py-4">
        <div id="hideFeedbackIcon" class="absolute top-2 right-2 cursor-pointer">
            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.4389 16.5L27.1014 7.85126C27.3603 7.59234 27.5058 7.24118 27.5058 6.87501C27.5058 6.50885 27.3603 6.15768 27.1014 5.89876C26.8425 5.63984 26.4913 5.49438 26.1252 5.49438C25.759 5.49438 25.4078 5.63984 25.1489 5.89876L16.5002 14.5613L7.85141 5.89876C7.59249 5.63984 7.24133 5.49439 6.87516 5.49439C6.509 5.49439 6.15783 5.63984 5.89891 5.89876C5.63999 6.15768 5.49453 6.50885 5.49453 6.87501C5.49453 7.24118 5.63999 7.59234 5.89891 7.85126L14.5614 16.5L5.89891 25.1488C5.77003 25.2766 5.66774 25.4287 5.59793 25.5962C5.52813 25.7638 5.49219 25.9435 5.49219 26.125C5.49219 26.3065 5.52813 26.4862 5.59793 26.6538C5.66774 26.8214 5.77003 26.9734 5.89891 27.1013C6.02673 27.2301 6.17881 27.3324 6.34637 27.4022C6.51392 27.472 6.69364 27.508 6.87516 27.508C7.05668 27.508 7.2364 27.472 7.40395 27.4022C7.57151 27.3324 7.72359 27.2301 7.85141 27.1013L16.5002 18.4388L25.1489 27.1013C25.2767 27.2301 25.4288 27.3324 25.5964 27.4022C25.7639 27.472 25.9436 27.508 26.1252 27.508C26.3067 27.508 26.4864 27.472 26.654 27.4022C26.8215 27.3324 26.9736 27.2301 27.1014 27.1013C27.2303 26.9734 27.3326 26.8214 27.4024 26.6538C27.4722 26.4862 27.5081 26.3065 27.5081 26.125C27.5081 25.9435 27.4722 25.7638 27.4024 25.5962C27.3326 25.4287 27.2303 25.2766 27.1014 25.1488L18.4389 16.5Z"
                    fill="black" />
            </svg>
        </div>
        <div class="flex flex-col">
            <div class="flex">
                <div class="w-1/5">
                    <div class="h-12 w-12 rounded-full bg-black">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="flex flex-col pl-3 pr-2">
                    <h6 class="text-[18px] text-dark-gray">Juan Angela Alma</h6>
                    <p class="text-[16px] text-dark-gray">ulasan bersifat publik serta menyertakan info akun dan
                        perangkat anda</p>
                </div>
            </div>
            <div class="flex justify-between mt-4">
                <img class="star-icon cursor-pointer" src="/assets/icons/star-outline.svg" alt="">
                <img class="star-icon cursor-pointer" src="/assets/icons/star-outline.svg" alt="">
                <img class="star-icon cursor-pointer" src="/assets/icons/star-outline.svg" alt="">
                <img class="star-icon cursor-pointer" src="/assets/icons/star-outline.svg" alt="">
                <img class="star-icon cursor-pointer" src="/assets/icons/star-outline.svg" alt="">
            </div>
            <div class="relative mt-4">
                <input type="text" placeholder="Deskripsikan pengalaman anda"
                class="w-full rounded-lg bg-transparent border border-dark-gray">
                <div class="absolute flex justify-center items-center top-[50%] translate-y-[-50%] right-2 h-7 w-7">
                    <img src="/assets/icons/send.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <script>
        const hideFeedbackIcon = document.getElementById('hideFeedbackIcon');

        hideFeedbackIcon.addEventListener('click', () => {
            const feedbackContainer = hideFeedbackIcon.parentElement.parentElement;
            feedbackContainer.classList.add('slide-right');
        });
    </script>

    <script>
        const starIcon = document.querySelectorAll('.star-icon');
        function onClickIcon(index) {
            for (let i = 0; i < starIcon.length; i++) {
                if (i <= index) {
                    starIcon[i].src = '/assets/icons/star.svg';
                } else {
                    starIcon[i].src = '/assets/icons/star-outline.svg';
                }
            }
        }
        starIcon.forEach((icon, index) => {
            icon.addEventListener('click', () => {
                onClickIcon(index);
            });
        });
    </script>
</div>
