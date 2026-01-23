<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sliders = document.querySelectorAll('.container-images');

        sliders.forEach(slider => {
            let isDown = false;
            let startX;
            let scrollLeft;

            // Variables para la inercia
            let velX = 0;
            let momentumID;
            let lastPosX = 0;

            const applyMomentum = () => {
                // Aplicamos la velocidad al scroll
                slider.scrollLeft -= velX;
                // Fricción: 0.95 (puedes subirlo a 0.98 para que deslice más tiempo)
                velX *= 0.95;

                if (Math.abs(velX) > 0.5) {
                    momentumID = requestAnimationFrame(applyMomentum);
                }
            };

            slider.addEventListener('mousedown', (e) => {
                isDown = true;
                slider.style.cursor = 'grabbing';
                cancelAnimationFrame(momentumID);

                startX = e.pageX - slider.offsetLeft;
                scrollLeft = slider.scrollLeft;
                velX = 0;
                lastPosX = e.pageX; // Inicializamos la posición
            });

            slider.addEventListener('mouseleave', () => {
                if (!isDown) return;
                isDown = false;
                slider.style.cursor = 'grab';
                applyMomentum();
            });

            slider.addEventListener('mouseup', () => {
                isDown = false;
                slider.style.cursor = 'grab';
                applyMomentum();
            });

            slider.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();

                const x = e.pageX - slider.offsetLeft;

                // Calculamos la velocidad: posición actual menos la anterior
                // Invertimos el cálculo para que coincida con el movimiento del scroll
                velX = x - lastPosX;
                lastPosX = x;

                const walk = (x - startX) * 1.2;
                slider.scrollLeft = scrollLeft - walk;
            });
        });
    });
</script>