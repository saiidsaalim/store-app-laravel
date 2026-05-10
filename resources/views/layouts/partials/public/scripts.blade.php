<script>
        // Hero image carousel
        const images = document.querySelectorAll('.hero-image');
        let currentIndex = 0;

        function rotateImages() {
            images.forEach((img, index) => {
                if (index === currentIndex) {
                    img.classList.add('opacity-100');
                    img.classList.remove('opacity-0');
                } else {
                    img.classList.add('opacity-0');
                    img.classList.remove('opacity-100');
                }
            });

            currentIndex = (currentIndex + 1) % images.length;
        }

        // Change image every 5 seconds
        setInterval(rotateImages, 5000);
    </script>