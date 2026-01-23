<!-- <!DOCTYPE html>
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

</html> -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While - Mensajes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --bg-light: #f8f9fa;
            --sidebar-width: 240px;
            --chat-list-width: 320px;
            --primary-purple: #4b0082;
            --chat-bg: #d9e2e1;
        }

        body { background-color: var(--bg-light); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; height: 100vh; overflow: hidden; }

        /* Estructura Principal */
        .app-container { display: flex; height: 100vh; }

        /* Sidebar Izquierdo */
        .sidebar {
            width: var(--sidebar-width);
            background: white;
            padding: 2rem 1.5rem;
            display: flex;
            flex-direction: column;
            border-right: 1px solid #eee;
        }
        .logo { font-size: 2rem; font-weight: 800; color: #1a1a1a; margin-bottom: 2rem; }
        .nav-link {
            color: #888;
            padding: 0.8rem 1rem;
            border-radius: 12px;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: 0.3s;
        }
        .nav-link.active { background: #f0f0f0; color: #1a1a1a; }
        .nav-link i { margin-right: 15px; font-size: 1.2rem; }

        /* Contenedor de Mensajes (El cuadro redondeado) */
        .main-content {
            flex-grow: 1;
            padding: 2rem;
            display: flex;
            flex-direction: column;
        }
        .messages-window {
            background: white;
            border-radius: 40px;
            flex-grow: 1;
            display: flex;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
        }

        /* Lista de Chats */
        .chat-list {
            width: var(--chat-list-width);
            border-right: 1px solid #f0f0f0;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
        }
        .chat-item {
            padding: 15px 25px;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: 0.2s;
        }
        .chat-item.active { background-color: var(--chat-bg); }
        .avatar-circle {
            width: 50px; height: 50px;
            border-radius: 50%;
            background: #333;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
        }

        /* Ventana de Chat */
        .chat-view {
            flex-grow: 1;
            background-color: var(--chat-bg);
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .chat-header {
            background: rgba(255,255,255,0.4);
            padding: 15px 30px;
            border-radius: 25px;
            margin-bottom: 20px;
        }
        .message-bubble {
            max-width: 70%;
            padding: 12px 20px;
            border-radius: 20px;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }
        .msg-received { background: white; align-self: flex-start; border-bottom-left-radius: 5px; }
        .msg-sent { background: #e2e2e2; align-self: flex-end; border-bottom-right-radius: 5px; }

        /* Barra de entrada */
        .chat-input-container {
            background: white;
            border-radius: 30px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            margin-top: auto;
        }
        .chat-input-container input {
            border: none;
            flex-grow: 1;
            padding: 5px 15px;
            outline: none;
        }
    </style>
</head>
<body>

<div class="app-container">
    <aside class="sidebar">
        <div class="logo">while.</div>
        <nav class="flex-grow-1">
            <a href="#" class="nav-link"><i class="bi bi-house"></i> Inicio</a>
            <a href="#" class="nav-link active justify-content-between">
                <span><i class="bi bi-chat-dots"></i> Mensajes</span>
                <span class="badge bg-primary rounded-pill">5</span>
            </a>
            <a href="#" class="nav-link"><i class="bi bi-compass"></i> Explorar</a>
            <a href="#" class="nav-link"><i class="bi bi-bell"></i> Notificaciones</a>
            <a href="#" class="nav-link mt-4"><i class="bi bi-plus-lg"></i> Crear</a>
        </nav>
        
        <div class="user-profile mt-auto pt-4 border-top">
            <small class="text-muted d-block mb-2">En Línea</small>
            <div class="d-flex align-items-center p-2 bg-light rounded-pill">
                <img src="https://i.pravatar.cc/150?u=9" width="40" class="rounded-circle me-2">
                <div style="font-size: 0.8rem;">
                    <strong>WestCol</strong><br>@laPamper
                </div>
            </div>
        </div>
    </aside>

    <main class="main-content">
        <h3 class="fw-bold mb-4">Mensajes</h3>
        
        <div class="messages-window">
            <div class="chat-list">
                <div class="chat-item">
                    <div class="avatar-circle">AR</div>
                    <div>
                        <div class="fw-bold">Alberto De La Rosa</div>
                        <small class="text-muted">+5 mensajes</small>
                    </div>
                </div>
                <div class="chat-item active">
                    <div class="avatar-circle">FE</div>
                    <div>
                        <div class="fw-bold">Feid</div>
                        <small class="text-muted">Que onda parcero...</small>
                    </div>
                </div>
                <div class="chat-item">
                    <div class="avatar-circle bg-danger">LY</div>
                    <div>
                        <div class="fw-bold">lamineyamal</div>
                        <small class="text-muted">y que fuis?</small>
                    </div>
                </div>
            </div>

            <div class="chat-view">
                <div class="chat-header">
                    <div class="fw-bold">Feid</div>
                    <small class="text-success">En línea</small>
                </div>

                <div class="d-flex flex-column overflow-auto pe-2">
                    <div class="message-bubble msg-received">
                        Oe mano mire esto
                    </div>
                    <div class="message-bubble msg-received shadow-sm">
                        <i class="bi bi-image fs-1 text-muted"></i>
                    </div>
                    
                    <div class="message-bubble msg-sent">
                        Estan re asperos
                    </div>
                    <div class="align-self-end me-2 mb-3">
                        🔥 🔥
                    </div>
                </div>

                <div class="chat-input-container shadow-sm">
                    <button class="btn btn-link text-dark p-0 me-2"><i class="bi bi-emoji-smile"></i></button>
                    <button class="btn btn-link text-dark p-0 me-2"><i class="bi bi-paperclip"></i></button>
                    <input type="text" placeholder="Escribe algo...">
                    <button class="btn btn-dark rounded-circle px-2 py-1"><i class="bi bi-send-fill"></i></button>
                </div>
            </div>
        </div>
    </main>
</div>

</body>
</html>