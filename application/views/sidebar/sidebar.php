<nav class="sidebar">
  <div class="sidebar-header">
    <a href="<?php echo base_url() ?>welcome/dashboard" class="sidebar-brand">
      Dashboard<span></span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Menu Dashboard</li>
      <li class="nav-item">
        <a href="<?php echo base_url() ?>kriteria/kriteria" class="nav-link">
          <i class="link-icon" data-feather="inbox"></i>
          <span class="link-title">Data Kriteria</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo base_url() ?>kriteria/alternatif" class="nav-link">
          <i class="link-icon" data-feather="inbox"></i>
          <span class="link-title">Data Alternatif</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
          <i class="link-icon" data-feather="layout"></i>
          <span class="link-title">Hasil Perhitungan</span>
        </a>
      </li>
    </ul>
  </div>
</nav>

<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <h6 class="text-muted">Sidebar:</h6>
    <div class="form-group border-bottom">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light">
          Light
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark" checked>
          Dark
        </label>
      </div>
    </div>
    <div class="theme-wrapper">
      <h6 class="text-muted mb-2">Light Theme:</h6>
      <a class="theme-item active" href="<?php echo base_url() ?>welcome/dashboard">
        <img src="../assets/images/screenshots/light.jpg" alt="light theme">
      </a>
      <h6 class="text-muted mb-2">Dark Theme:</h6>
      <a class="theme-item" href="<?php echo base_url() ?>welcome/dashboard2">
        <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
      </a>
    </div>
  </div>
</nav>