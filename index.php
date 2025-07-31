<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contoh halaman Bootstrap dengan gambar dan navigasi.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous" defer></script>
    <title>Website Portofolio</title>
    <link rel="icon" href="/img/logo1.jpeg" type="image/png">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #1E1E1E;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header class="navbar position-relative w-100">
        <div class="container-fluid navbar-expand-lg">
            <a href="#about" class="navbar-brand text-light fs-3 mx-5">
                <img src="/img/logo.png" alt="Logo" style="width: 150px; height: 55px; object-fit: cover;" class="g-4 mx-5">
                <i class="bi bi-x-lg me-3"></i>
                <span class="fs-3 ">Portofolio</span>
                <span class="mx-2 text-secondary">|</span>
                <span class=" text-capitalize fs-4">Bootstrap 5 &amp; PHP</span>
            </a>
            <nav class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav ms-auto me-auto fs-5 gap-4">
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#contact">Kontak</a>
                    </li>
                </ul>
            </nav>
        </div>


        <section id="home" class="home-section py-5">
            <div class="container-fluid">
                <div class="row text-dark">
                    <div class="col-md-5 d-flex flex-column justify-content-center align-items-start ms-auto">
                        <h1 class="display-4 fw-bold text-dark text-capitalize fst-italic">front end development</h1>
                        <p class="lead text-secondary">Saya seorang pengembang web yang bersemangat dengan pengalaman dalam berbagai teknologi web. Saya suka menciptakan solusi inovatif dan efisien untuk tantangan pengembangan web.</p>
                        <a href="#about" class="btn btn-secondary btn-lg">Pelajari Lebih Lanjut</a>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center h-100 me-auto">
                        <img src="/img/home.png" alt="Home Image" class="" style="width: 75%; height: auto; object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section py-5">
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="/img/profile.jpeg" alt="halo" class="img-fluid rounded-circle me-3 " style="width: 450px; height: 450px; object-fit: cover;">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-start">
                    <h2 class="display-5 fst-italic fw-medium">Tentang Saya</h2>
                    <p class="lead text-capitalize">
                        Halo, nama saya Muhammad Rafi Noer Salim, saya berumur 17 tahun, dan saya masih bersekolah di SMKN 1 Lumajang, saya dari kelas XII-RPL Gen-12.
                        Saya memiliki ketertarikan yang tinggi dalam dunia pengembangan perangkat lunak, khususnya di bidang web development.
                        Saya terus belajar berbagai teknologi baru seperti HTML, CSS, JavaScript, dan PHP, serta framework modern seperti Laravel dan Bootstrap.
                        Tujuan saya adalah menjadi seorang developer profesional yang mampu menciptakan solusi digital yang bermanfaat bagi masyarakat luas.
                    </p>
                    <a href="#contact" class="btn btn-secondary btn-lg">Hubungi Saya</a>
                </div>
            </div>
        </div>

    </section>

    <section id="services" class="services-section py-5">
        <div class="container mt-5">
            <div class="text-center mb-4">
                <h2 class="display-5 fst-italic fw-medium">Layanan Saya</h2>
                <p class="lead text-capitalize mt-2">Saya menawarkan berbagai layanan pengembangan web dan desain grafis untuk membantu bisnis Anda tumbuh secara online.
                    saya memiliki keahlian dalam pengembangan web, desain grafis, dan optimasi SEO. Berikut adalah beberapa layanan yang saya tawarkan:
                </p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                <div class="col">
                    <div class="card h-100">
                        <img src="/img/web-development.jpg" class="card-img-top" alt="Web Development">
                        <div class="card-body">
                            <h5 class="card-title">Pengembangan Web</h5>
                            <p class="card-text">Saya menawarkan layanan pengembangan web yang mencakup pembuatan situs web responsif, aplikasi web, dan sistem manajemen konten (CMS). Dengan pengalaman dalam HTML, CSS, JavaScript, dan PHP, saya dapat menciptakan solusi web yang sesuai dengan kebutuhan bisnis Anda.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#contact" class="text-capitalize"><i class="bi bi-chevron-right"></i>Hubungi Saya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/img/graphic-design.jpg" class="card-img-top" alt="Desain Grafis">
                        <div class="card-body">
                            <h5 class="card-title">Desain Grafis</h5>
                            <p class="card-text">Saya juga menyediakan layanan desain grafis untuk menciptakan
                                logo, poster, dan materi pemasaran lainnya. Dengan keterampilan dalam Adobe Photoshop dan Illustrator, saya dapat membantu merek Anda tampil menonjol dengan desain yang menarik dan profesional.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#contact" class="text-capitalize"><i class="bi bi-chevron-right"></i>Hubungi Saya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/img/seo.jpg" class="card-img-top" alt="Optimasi SEO">
                        <div class="card-body">
                            <h5 class="card-title">Optimasi SEO</h5>
                            <p class="card-text">Saya juga menawarkan layanan optimasi SEO untuk meningkatkan visibilitas situs web Anda di mesin pencari. Dengan menerapkan teknik SEO on-page dan off-page, saya dapat membantu meningkatkan peringkat situs web Anda dan menarik lebih banyak pengunjung.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#contact" class="text-capitalize"><i class="bi bi-chevron-right"></i>Hubungi Saya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Portofolio Section -->
    <section id="portofolio" class="portofolio-section py-5">
        <div class="text-center mt-5">
            <h1 class="text-capitalize display-5 fst-italic fw-medium">- portofolio project saya-</h1>
        </div>
        <div class="row row-cols-md-4 g-4 d-flex justify-content-center h-50 w-100 p-3">
            <div class="col">
                <div class="card h-100 ">
                    <img src="/img/logo.png" class="card-img-top" alt="Logo">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">brand / perusahaan</h5>
                        <p class="card-text">Saya mempunyai perusahaan saya sendiri bernama finyra software yang bergerak di bidang website development, dan sudah menangani berbagai proyek pembuatan website untuk klien dari berbagai sektor bisnis, mulai dari UMKM hingga perusahaan besar. Kami berkomitmen memberikan solusi digital yang inovatif dan profesional.</p>
                    </div>
                    <div class="card-footer">
                        <a href="https://chat.whatsapp.com/JDTB28TiPg8G2lsVblEexq" class="text-capitalize"><i class="bi bi-chevron-right"></i>link group whatsapp </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/project1.png" class="card-img-top h-auto" alt="Aplikasi Surat Menyurat">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">Aplikasi Surat Menyurat Perusahaan</h5>
                        <p class="card-text">
                            Sistem manajemen surat berbasis web untuk mengelola surat masuk dan keluar secara efisien.
                            Dibekali fitur pengarsipan digital, disposisi multi-user, dan notifikasi berbasis role user, cocok untuk lingkungan kerja formal seperti kantor atau instansi.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="https://github.com/Yks889/aplikasi-surat-perusahaan" class="text-capitalize">
                            <i class="bi bi-chevron-right"></i>link project
                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="/img/project2.png" class="card-img-top" alt="Finyra WhatsApp Bot">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">Finyra WhatsApp Bot</h5>
                        <p class="card-text">
                            Bot WhatsApp otomatis berbasis Baileys untuk mengelola pesanan jasa digital, mengirim promosi, dan merespons pertanyaan user secara real-time.
                            Dirancang khusus untuk layanan kreatif seperti digital studio, desain, dan pengembangan web.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="https://github.com/Yks889/finyra-wa-bot" class="text-capitalize"><i class="bi bi-chevron-right"></i>link project</a>
                    </div>
                </div>
            </div>
    </section>

    <section id="contact" class="contact-section py-5 mb-5">
        <div class="container-lg">
            <div class="text-center mb-4">
                <h2 class="display-5 fst-italic fw-medium">Kontak Saya</h2>
            </div>
            <div class="container d-flex flex-column justify-content-start align-items-center ">
                <div class="col align-items-center mt-5">
                    <a href="https://github.com/Yks889" class="btn btn-outline-dark btn-lg mb-3">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="https://www.tiktok.com/@stpdrawxz?_t=ZS-8ySFPftpFgr&_r=1" class="btn btn-outline-dark btn-lg mb-3">
                        <i class="bi bi-tiktok"></i>
                    </a>
                    <a href="https://chat.whatsapp.com/JDTB28TiPg8G2lsVblEexq" class="btn btn-outline-success btn-lg mb-3">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    <a href="https://www.instagram.com/finyra.software?igsh=b29wYm43NXJmaDJn" class="btn btn-outline-danger btn-lg mb-3">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://linktr.ee/FinyraSoftware" class="btn btn-outline-primary btn-lg mb-3">
                        <i class="bi bi-link"></i>
                    </a>
                </div>
            </div>
    </section>

    <footer class="text-center py-4 bg-dark text-light">
        <div class="container-lg">
            <h5 class="text-capitalize">Terima kasih telah mengunjungi portofolio saya!</h5>
            <p class="text-secondary">Jika Anda memiliki pertanyaan atau ingin bekerja sama, jangan ragu untuk menghubungi saya melalui media sosial di atas.</p>
            <p class="text-capitalize">© copyright 2023 Muhammad Rafi Noer Salim. All rights reserved.
                Follow me on:
                <a href="#" class="text-secondary"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-secondary"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-secondary"><i class="bi bi-instagram"></i></a>
            </p>
        </div>
    </footer>
</body>

</html>