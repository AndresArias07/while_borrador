<!DOCTYPE html>
<html lang="es">

<body>
    <div class="main-container">
    <div class="chat-interface">
        <h1 class="main-title">Mensajes</h1>

        <div class="main-card shadow-lg">
            <aside class="contacts-sidebar">
                <div class="contacts-list">
                    <div class="contact-item">
                        <img src="https://ui-avatars.com/api/?name=Alberto+Rosa&background=333&color=fff" class="avatar-lg">
                        <div class="contact-text">
                            <span class="name">Alberto De la Rosa</span>
                            <span class="sub">+5 mensajes</span>
                        </div>
                    </div>

                    <div class="contact-item active">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_j4XWjF4YpGzF9Z1-N0L5L5L5L5L5L5L5L5" class="avatar-lg">
                        <div class="contact-text">
                            <span class="name">Feid</span>
                            <span class="sub text-dark">Que onda parcero queria de....</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <img src="https://ui-avatars.com/api/?name=Lamine+Yamal&background=random" class="avatar-lg">
                        <div class="contact-text">
                            <span class="name">lamineyamal</span>
                            <span class="sub">y que fue?</span>
                        </div>
                    </div>
                </div>

                <div class="sidebar-footer">
                    No hay mas mensajes
                </div>
            </aside>

            <section class="chat-area">
                <header class="chat-header">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_j4XWjF4YpGzF9Z1-N0L5L5L5L5L5L5L5L5" class="avatar-md">
                    <div class="ms-3">
                        <span class="d-block fw-bold">Feid</span>
                        <span class="status">En línea</span>
                    </div>
                </header>

                <div class="messages-body">
                    <div class="message-row">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_j4XWjF4YpGzF9Z1-N0L5L5L5L5L5L5L5L5" class="avatar-xs">
                        <div class="message-group">
                            <div class="img-preview shadow-sm">
                                <img src="https://m.media-amazon.com/images/I/71N-WfH8ZSL._AC_SL1500_.jpg">
                            </div>
                            <div class="bubble received">Oe mano mire esto</div>
                        </div>
                    </div>

                    <div class="message-row sent">
                        <div class="bubble sent">Estan re asperos</div>
                        <img src="https://ui-avatars.com/api/?name=Yo" class="avatar-xs">
                    </div>

                    <div class="text-end pe-5 mt-2">
                        <span class="emoji-reaction">🔥🔥</span>
                    </div>
                </div>

                <footer class="chat-input-row">
                    <div class="input-capsule">
                        <button class="tool-btn">😊</button>
                        <button class="tool-btn">📎</button>
                        <input type="text" placeholder="Escribe algo....">
                    </div>
                    <button class="send-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
                    </button>
                </footer>
            </section>
        </div>
    </div>
</div>

<!-- script de interactividadll -->
<script>
    // Seleccionamos todos los items de contacto
    const contactItems = document.querySelectorAll('.contact-item');

    contactItems.forEach(item => {
        item.addEventListener('click', () => {
            document.querySelector('.contact-item.active').classList.remove('active');
            
            item.classList.add('active');

            const name = item.querySelector('.name').textContent;
            const headerName = document.querySelector('.chat-header .fw-bold');
            headerName.textContent = name;
            
        });
    });
</script>
</body>

</html>