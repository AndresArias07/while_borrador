<aside class="d-flex position-fixed sidebar flex-column border-end bg-white gap-4">
  <div class="container-fluid d-flex container-img align-items-center">
    <img src="<?= base_url('img/logo-while/while.png') ?>" alt="logo-while" class="img-fluid logo-img">
  </div>
  <ul class="nav nav-pills flex-column mb-auto gap-3 fs-5 mt-5">
    <li class="nav-item">
      <a href="/" class="nav-link p-2 active d-flex align-items-center gap-4 fs-6">

        <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 11.5L12 4L21 11.5" />
          <path d="M5.5 10.5V20H18.5V10.5" />
        </svg>
        Inicio
      </a>
    </li>

    <li>
      <a href="/mensajes" class="nav-link p-2 d-flex align-items-center justify-content-between ">
        <div class="d-flex align-items-center gap-4 fs-6">

          <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
          </svg>
          Inicio
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link p-3 d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
            </svg>
            Mensajes
          </div>
          <span class="badge bg-primary rounded-pill">5</span>
        </a>
      </li>

      <li>
        <a href="#" class="nav-link p-3 d-flex align-items-center gap-3">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" />
            <polygon points="10 10 16 8 14 14 8 16" />
          </svg>
          Explorar
        </a>
      </li>

      <li>
        <a href="#" class="nav-link p-3 d-flex align-items-center gap-3">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9" />
            <path d="M13.73 21a2 2 0 0 1-3.46 0" />
          </svg>
          Notificaciones
        </a>
      </li>

      <li>
        <a href="#" class="nav-link p-3 d-flex align-items-center gap-3">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="5" y1="12" x2="19" y2="12" />
          </svg>
          Crear
        </a>
      </li>
    </ul>
  </div>
  <div class="mt-4 pt-3 border-top d-flex flex-column mt-auto">
    <h6 class="fw-bold mb-3 ps-2" style="font-size: 0.9rem;">En Línea</h6>

    <div class="d-flex align-items-center justify-content-between px-2 mb-4">
      <div class="d-flex align-items-center gap-2">
        <img src="<?= base_url('img/sidebar-down/alberto.png') ?>" class="rounded-circle" width="35" height="35" alt="Alberto">
        <span class="online">Alberto De la rosa</span>
      </div>
      <span class="bg-success rounded-circle" style="width: 8px; height: 8px;"></span>
    </div>

    <div class="d-flex align-items-center gap-2 profile-sidebar mb-2 p-2">
      <img src="<?php echo base_url('img/sidebar-down/westcol.png') ?>" class="rounded-circle" width="50" height="50" alt="WestCol">
      <div class="d-flex flex-column overflow-hidden ">
        <span class="fw-bold text-dark text-truncate" style="font-size: 0.9rem;">WestCol</span>
        <small class="text-muted text-truncate">@laPamper</small>
      </div>
    </div>
  </div>
</aside>