<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historias Glassmorphism</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --glass-bg: rgba(234, 221, 219, 0.6); /* Rosado con transparencia */
            --glass-border: rgba(255, 255, 255, 0.4);
        }

        body { 
            background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            padding-top: 50px;
        }

        /* Historias Superiores */
        .story-header { margin-bottom: 40px; }
        .story-circle {
            width: 70px; height: 70px;
            border-radius: 50%;
            border: 3px solid #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .story-circle:hover { transform: scale(1.1); }
        .story-circle img { width: 100%; height: 100%; object-fit: cover; }

        /* Imagen Principal Estilo Móvil */
        .main-img-container {
            position: relative;
            border-radius: 40px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            height: 650px;
        }
        .main-img-container img {
            width: 100%; height: 100%; object-fit: cover;
        }
        .img-overlay-text {
            position: absolute;
            bottom: 40px;
            left: 40px;
            font-weight: bold;
            font-size: 1.5rem;
            color: #222;
        }

        /* Tarjetas Estilo Morfista (Glassmorphism) */
        .testimonial-col { padding-left: 50px; }
        .label-name { color: #999; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 25px; }

        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(12px); /* Efecto de desenfoque */
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            border-radius: 25px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            background: rgba(234, 221, 219, 0.8);
            transform: translateY(-5px);
        }

        /* Iconos de las tarjetas */
        .icon-box {
            width: 50px; height: 50px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.4rem;
        }
        .bg-mint { background: rgba(201, 220, 214, 0.8); color: #4a7c6d; }
        .bg-lime { background: rgba(220, 225, 193, 0.8); color: #6d7c4a; }
        .bg-rose { background: rgba(242, 213, 213, 0.8); color: #b35a5a; }

        .card-title { font-weight: 700; margin: 0; font-size: 1rem; }
        .card-subtitle { color: #666; font-size: 0.85rem; }
        .card-text { margin-top: 15px; color: #333; line-height: 1.6; }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bold mb-4">Historias</h1>
            <div class="d-flex gap-3 mb-5">
                <div class="story-circle"><img src="https://i.pravatar.cc/150?u=1"></div>
                <div class="story-circle"><img src="https://i.pravatar.cc/150?u=2"></div>
                <div class="story-circle"><img src="https://i.pravatar.cc/150?u=3"></div>
                <div class="story-circle"><img src="https://i.pravatar.cc/150?u=4"></div>
                <div class="story-circle"><img src="https://i.pravatar.cc/150?u=5"></div>
            </div>
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col-lg-5">
            <div class="main-img-container">
                <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80" alt="Paisaje">
                <div class="img-overlay-text">Lorem</div>
            </div>
        </div>

        <div class="col-lg-7 testimonial-col">
            <p class="label-name text-uppercase">Samuel Sconn</p>

            <div class="glass-card">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-mint">☺</div>
                    <div>
                        <h6 class="card-title">Dev Doodlebug</h6>
                        <span class="card-subtitle">Life Cycle Manager</span>
                    </div>
                </div>
                <p class="card-text">
                    Namedly's tools for managing our identity through many stages of development—larval, pupal, and far beyond—were top notch.
                </p>
            </div>

            <div class="glass-card">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-lime">☺</div>
                    <div>
                        <h6 class="card-title">Carl Caterpillar</h6>
                        <span class="card-subtitle">Head of Growth</span>
                    </div>
                </div>
                <p class="card-text">
                    I've been transformed completely. I wouldn't use any other service.
                </p>
            </div>

            <div class="glass-card">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-rose">☺</div>
                    <div>
                        <h6 class="card-title">Sophia Segment</h6>
                        <span class="card-subtitle">CIO</span>
                    </div>
                </div>
                <p class="card-text">
                    As Chief Insect Officer, it's my job to make sure all bugs feel represented, and Namedly exceeded all my expectations.
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historias Glassmorphism</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --glass-bg: rgba(234, 221, 219, 0.6); /* Rosado con transparencia */
            --glass-border: rgba(255, 255, 255, 0.4);
        }

        body { 
            background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            padding-top: 50px;
        }

        /* Historias Superiores */
        .story-header { margin-bottom: 40px; }
        .story-circle {
            width: 70px; height: 70px;
            border-radius: 50%;
            border: 3px solid #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .story-circle:hover { transform: scale(1.1); }
        .story-circle img { width: 100%; height: 100%; object-fit: cover; }

        /* Imagen Principal Estilo Móvil */
        .main-img-container {
            position: relative;
            border-radius: 40px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            height: 650px;
        }
        .main-img-container img {
            width: 100%; height: 100%; object-fit: cover;
        }
        .img-overlay-text {
            position: absolute;
            bottom: 40px;
            left: 40px;
            font-weight: bold;
            font-size: 1.5rem;
            color: #222;
        }

        /* Tarjetas Estilo Morfista (Glassmorphism) */
        .testimonial-col { padding-left: 50px; }
        .label-name { color: #999; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 25px; }

        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(12px); /* Efecto de desenfoque */
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            border-radius: 25px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            background: rgba(234, 221, 219, 0.8);
            transform: translateY(-5px);
        }

        /* Iconos de las tarjetas */
        .icon-box {
            width: 50px; height: 50px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.4rem;
        }
        .bg-mint { background: rgba(201, 220, 214, 0.8); color: #4a7c6d; }
        .bg-lime { background: rgba(220, 225, 193, 0.8); color: #6d7c4a; }
        .bg-rose { background: rgba(242, 213, 213, 0.8); color: #b35a5a; }

        .card-title { font-weight: 700; margin: 0; font-size: 1rem; }
        .card-subtitle { color: #666; font-size: 0.85rem; }
        .card-text { margin-top: 15px; color: #333; line-height: 1.6; }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bold mb-4">Historias</h1>
            <div class="d-flex gap-3 mb-5">
                <div class="story-circle"><img src="https://i.pravatar.cc/150?u=1"></div>
                <div class="story-circle"><img src="https://i.pravatar.cc/150?u=2"></div>
                <div class="story-circle"><img src="https://i.pravatar.cc/150?u=3"></div>
                <div class="story-circle"><img src="https://i.pravatar.cc/150?u=4"></div>
                <div class="story-circle"><img src="https://i.pravatar.cc/150?u=5"></div>
            </div>
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col-lg-5">
            <div class="main-img-container">
                <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80" alt="Paisaje">
                <div class="img-overlay-text">Lorem</div>
            </div>
        </div>

        <div class="col-lg-7 testimonial-col">
            <p class="label-name text-uppercase">Samuel Sconn</p>

            <div class="glass-card">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-mint">☺</div>
                    <div>
                        <h6 class="card-title">Dev Doodlebug</h6>
                        <span class="card-subtitle">Life Cycle Manager</span>
                    </div>
                </div>
                <p class="card-text">
                    Namedly's tools for managing our identity through many stages of development—larval, pupal, and far beyond—were top notch.
                </p>
            </div>

            <div class="glass-card">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-lime">☺</div>
                    <div>
                        <h6 class="card-title">Carl Caterpillar</h6>
                        <span class="card-subtitle">Head of Growth</span>
                    </div>
                </div>
                <p class="card-text">
                    I've been transformed completely. I wouldn't use any other service.
                </p>
            </div>

            <div class="glass-card">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-rose">☺</div>
                    <div>
                        <h6 class="card-title">Sophia Segment</h6>
                        <span class="card-subtitle">CIO</span>
                    </div>
                </div>
                <p class="card-text">
                    As Chief Insect Officer, it's my job to make sure all bugs feel represented, and Namedly exceeded all my expectations.
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>