<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Pegawai Baharu</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="app-shell">
        <aside class="sidebar" id="sidebar">
            <div class="brand"><div class="brand-mark">M</div><div><strong>MySalam</strong><span>Portal Pegawai</span></div></div>
            <div class="profile-mini"><div class="avatar">{{ strtoupper(substr($pegawai?->nama_penuh ?? 'PB', 0, 2)) }}</div><div><strong>{{ $pegawai?->nama_penuh ?? 'Pegawai Baharu' }}</strong><span>{{ $pegawai?->jawatan ?? 'Pegawai Baharu' }}</span></div></div>
            <nav class="main-nav" aria-label="Navigasi utama">
                <a class="nav-link active" href="#dashboard"><span class="nav-icon">[ ]</span> Dashboard</a>
                <a class="nav-link" href="#profil"><span class="nav-icon">[P]</span> Profil Saya</a>
                <a class="nav-link" href="#dokumen"><span class="nav-icon">[D]</span> Dokumen Saya <b class="nav-badge">2</b></a>
                <a class="nav-link" href="#status"><span class="nav-icon">[S]</span> Status Permohonan</a>
                <a class="nav-link" href="#bantuan"><span class="nav-icon">[?]</span> Bantuan</a>
            </nav>
            <div class="sidebar-bottom"><div class="help-card"><div class="help-icon">*</div><strong>Perlukan bantuan?</strong><span>Hubungi Unit Sumber Manusia</span><a href="#bantuan">Lihat panduan -></a></div><a class="logout" href="#"><span><-</span> Log keluar</a></div>
        </aside>
        <main class="main-content" id="dashboard">
            <header class="topbar"><button class="menu-toggle" aria-label="Buka menu" data-menu-toggle>Menu</button><div class="breadcrumb"><span>Portal Pegawai</span><b>/</b> Dashboard</div><div class="topbar-actions"><button class="icon-button" aria-label="Notifikasi">Notis<i></i></button><div class="topbar-user"><div class="avatar avatar-small">{{ strtoupper(substr($pegawai?->nama_penuh ?? 'PB', 0, 2)) }}</div><span>{{ $pegawai?->nama_penuh ?? 'Pegawai Baharu' }}</span><b>v</b></div></div></header>
            <div class="page-content">
                <section class="welcome-row"><div><p class="eyebrow">SELAMAT DATANG KE PORTAL PEGAWAI</p><h1>Assalamualaikum, {{ $pegawai?->nama_penuh ?? 'Pegawai Baharu' }} !</h1><p class="muted">Lengkapkan maklumat anda untuk memulakan proses kemasukan pegawai.</p></div><div class="date-chip"><span>Hari ini</span></div></section>
                <section class="hero-card"><div class="hero-copy"><span class="status-pill">Dalam proses</span><h2>Lengkapkan profil anda</h2><p>Anda hampir selesai! Lengkapkan baki maklumat dan dokumen sebelum dihantar kepada HR untuk semakan.</p><a class="primary-button" href="#profil">Sambung pengisian <span>-></span></a></div><div class="progress-ring" style="background: conic-gradient(#fff 0 {{ $profileProgress }}%, rgba(255,255,255,.2) {{ $profileProgress }}% 100%)" aria-label="Kemajuan {{ $profileProgress }} peratus"><div><strong>{{ $profileProgress }}%</strong><span>Lengkap</span></div></div></section>
                <div class="section-heading"><div><p class="eyebrow">RINGKASAN ANDA</p><h2>Perjalanan kemasukan</h2></div><a class="text-link" href="#status">Lihat status penuh <span>-></span></a></div>
                <section class="journey-grid"><article class="stat-card stat-green"><div class="stat-icon">OK</div><div><span>Profil peribadi</span><strong>{{ $profileProgress }}% lengkap</strong></div><b class="check">OK</b></article><article class="stat-card stat-orange"><div class="stat-icon">DOC</div><div><span>Dokumen sokongan</span><strong>Belum dimuat naik</strong></div><b class="arrow">-></b></article><article class="stat-card stat-blue"><div class="stat-icon">HR</div><div><span>Semakan HR</span><strong>{{ ucfirst($pegawai?->status ?? 'Belum dihantar') }}</strong></div><b class="lock">-</b></article></section>
                <div class="dashboard-grid"><section class="content-card tasks-card" id="profil"><div class="card-heading"><div><p class="eyebrow">TINDAKAN DIPERLUKAN</p><h2>Tugasan anda</h2></div><span class="task-count">2 tugasan</span></div><div class="task-list"><a href="#profil" class="task-item"><div class="task-number done">OK</div><div class="task-text"><strong>Lengkapkan maklumat peribadi</strong><span>Profil anda {{ $profileProgress }}% lengkap</span></div><span class="task-status complete">Dalam proses</span><span class="task-chevron">></span></a><a href="#dokumen" class="task-item"><div class="task-number current">2</div><div class="task-text"><strong>Muat naik dokumen sokongan</strong><span>Dokumen diperlukan untuk semakan HR</span></div><span class="task-status pending">Belum lengkap</span><span class="task-chevron">></span></a><a href="#status" class="task-item disabled"><div class="task-number">3</div><div class="task-text"><strong>Hantar untuk semakan HR</strong><span>Lengkapkan semua tugasan terdahulu</span></div><span class="task-status locked">Terkunci</span><span class="task-chevron">></span></a></div></section>
                    <section class="content-card deadline-card" id="status"><div class="card-heading"><div><p class="eyebrow">PERINGATAN</p><h2>Tarikh akhir</h2></div><span class="calendar-icon">[]</span></div><div class="deadline-date"><strong>31</strong><div><span>OKTOBER</span><b>2026</b></div></div><p class="muted">Sila lengkapkan semua maklumat sebelum tarikh akhir yang ditetapkan.</p><div class="days-left"><span>!</span><strong>12 hari lagi</strong><small>daripada hari ini</small></div></section></div>
                <section class="notice" id="bantuan"><div class="notice-icon">i</div><div><strong>Pastikan maklumat anda tepat</strong><p>Maklumat yang dihantar akan digunakan untuk rekod perkhidmatan anda. Sila semak sebelum membuat penghantaran.</p></div><button aria-label="Tutup notis">x</button></section>
            </div>
        </main>
    </div>
</body>
</html>
