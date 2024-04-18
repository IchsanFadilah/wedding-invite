<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saeful & Arini Wedding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Lexend:wght@100..900&display=swap"
        rel="stylesheet">
    <!-- simply countdown -->
    <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css" />
    <script src="countdown/simplyCountdown.min.js"></script>

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- <script src="script.js"></script> --}}

    <link rel="stylesheet" href="/css/style.css">
    {{-- <link rel="stylesheet" href="/resources/css/app.css"> --}}
    @livewireStyles
</head>

<body>
    <script>
        AOS.init();
    </script>

    <!-- Hero Section -->
    <section id="hero"
        class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
        <main>
            <h1>Saeful & Arini</h1>
            <p>Akan melangsungkan resepsi pernikahan dalam:</p>
            <div class="simply-countdown"></div>
            <h4 class="fs-5">Kepada Bapak/Ibu/Saudara/i <span></span> </span></h4>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card-atas mt-2 py-3">
                        <div class="card-body">
                            <h2><span> </span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#home" class="btn btn-lg mt-4" onclick="enableScroll()"><i class="bi bi-envelope-open"></i>
                Buka
                Undangan</a>
        </main>
    </section>

    <nav class="navbar navbar-expand-md sticky-top mynavbar">
        <div class="container">
            <a class="navbar-brand" href="#home">Saeful & Arini</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Saeful & Arini</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="#home">Home</a>
                        <a class="nav-link" href="#info">Informasi</a>
                        <a class="nav-link" href="#gallery">Gallery</a>
                        <a class="nav-link" href="#gifts">Gift</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Start of Home -->
    <section id="home" class="home">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="2000"
                data-aos-anchor-placement="top-center">
                <div class="col-md-8 text-center">
                    <img src="https://wekita.co/wp-content/uploads/2023/10/bismillah-1.svg" alt="Bismillah"
                        class="bismillah mb-2">
                    <h3>Assalamu'alaikum Wr Wb</h3>
                    <p>Dengan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i untuk
                        hadir pada acara pernikahan kami</p>
                </div>
            </div>
            <div class="row couple">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1800"
                    data-aos-anchor-placement="top-center">
                    <div class="row">
                        <div class="col-8 text-end">
                            <h3>Saeful Alam</h3>
                            <p>Putra Pertama dari Bapak Purwanto<br>dan <br>Almh. Ibu Sumiyem</p>
                        </div>
                        <div class="col-4">
                            <img src="img/saeful.png" alt="Saeful Alam" class="img-responsive rounded-circle">
                        </div>
                    </div>
                </div>



                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1800"
                    data-aos-anchor-placement="top-center">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/arini.png" alt="Arini" class="img-responsive rounded-circle">
                        </div>
                        <div class="col-8">
                            <h3>Arini Ulfa Hidayatin</h3>
                            <p>Putri ke dua dari Bapak Agus Setiawan<br>dan <br>Ibu Nurasiah (Nunung)</p>
                        </div>
                    </div>
                </div>
                <span class="heart"><i class="bi bi-heart-fill"></i></span>
            </div>
        </div>
    </section>
    <!-- End of Home -->

    <!-- Start of Info -->
    <section id="info" class="info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center" data-aos="fade-down" data-aos-duration="1800">
                    <h2>Informasi Acara</h2>
                    <p class="alamat">Alamat: Gedung Ngariung. <br> Jl. Letjen Ibrahim Adjie No.169, RT.01/RW.04, Loji,
                        Kec.
                        Bogor Barat, Kota Bogor, Jawa Barat 16117</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1981.7571689118242!2d106.7686035!3d-6.5828008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5892893e9ef%3A0x6e9312f93673bde6!2sGEDUNG%20NGARIUNG!5e0!3m2!1sid!2sid!4v1712078119804!5m2!1sid!2sid"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="https://maps.app.goo.gl/K3BDuLYkBRG2FTZH9" target="_blank"
                        class="btn btn-light btn-sm my-3">Lihat Peta</a>
                    <p class="description">Diharapkan tidak salah alamat dan tanggal. Manakala tiba di tujuan namun
                        tidak ada tanda-tanda sedang dilangsungkan pernikahan, boleh jadi Anda salah jadawal, atau salah
                        tempat.</p>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-6 col-10 mb-5" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div class="card text-center ">
                        <div class="card-header">
                            Akad Nikah
                        </div>
                        <div class="card-body p-4">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>08.00 - 10.00</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>Minggu, 28 April 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-4">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-10" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div class="card text-center">
                        <div class="card-header">
                            Resepsi
                        </div>
                        <div class="card-body p-4">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>11.00 - Selesai</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>Minggu, 28 April 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Info -->

    <!-- Start of Gallery -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Gallery Foto</h2>
                    <p>Berikut beberapa foto pre-wedding Saeful & Arini</p>
                </div>
            </div>

            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
                <div class="col mt-3">
                    <a href="img/gallery/1.png" data-toggle="lightbox" data-gallery="mygallery">
                        <img src="img/gallery/tumbnail/1.png" alt="Saeful & Arini 1" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="img/gallery/2.png" data-toggle="lightbox" data-gallery="mygallery">
                        <img src="img/gallery/tumbnail/2.png" alt="Saeful & Arini 1" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="img/gallery/3.png" data-toggle="lightbox" data-gallery="mygallery">
                        <img src="img/gallery/tumbnail/3.png" alt="Saeful & Arini 1" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="img/gallery/4.png" data-toggle="lightbox" data-gallery="mygallery">
                        <img src="img/gallery/tumbnail/4.png" alt="Saeful & Arini 1" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="img/gallery/5.png" data-toggle="lightbox" data-gallery="mygallery">
                        <img src="img/gallery/tumbnail/5.png" alt="Saeful & Arini 1" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="img/gallery/6.png" data-toggle="lightbox" data-gallery="mygallery">
                        <img src="img/gallery/tumbnail/6.png" alt="Saeful & Arini 1" class="img-fluid w-100 rounded">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Gallery -->

    <!-- Start of Gifts -->
    <section id="gifts" class="gifts">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-10 text-center">
                    <h2 class="mb-5">Amplop Digital</h2>
                    <p>Doa Restu Anda merupakan karunia yang sangat berarti bagi Kami.</p>
                    <p>Dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-8 mb-5">
                        <div class="card">
                            <div class="card-header text-end py-0">
                                <img src="img/bca.svg" alt="Bank BCA" class="bank">
                            </div>
                            <div class="card-body py-3">
                                <h4 id="rekeningBca" class="rekening" type="text">0954430797
                                </h4>
                                <p class="card-text">Arini Ulfa Hidayatin</p>
                            </div>
                            <div class="card-footer text-end px-0 py-0">
                                <div class="m-1">
                                    <a tabindex="0" role="button" class="btn btn-secondary"
                                        data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus"
                                        data-bs-placement="top" data-bs-content="Copied" id="btnCpyBca">
                                        <i class="bi bi-copy"></i>
                                    </a>
                                </div>
                                <!-- <p id="messageBca" class="message text-black d-none">Copied!</p>
                                <button type="button" data-bs-container="body" data-bs-toggle="popover"
                                    data-bs-placement="popover" data-bs-content="Copied" class="btn btn-md btn-cpy m-1"
                                    id="btnCpyBca">
                                    <i class="bi bi-copy"></i>
                                </button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-8 mb-5">
                        <div class="card">
                            <div class="card-header text-end py-0">
                                <img src="img/bsi.svg" alt="Bank BCA" class="bank">
                            </div>
                            <div class="card-body py-3">
                                <h4 id="rekeningBsi" class="rekening">7124913707
                                </h4>
                                <p class="card-text">Saeful Alam</p>
                            </div>
                            <div class="card-footer text-end px-0 py-0">
                                <div class="m-1">
                                    <a tabindex="0" role="button" class="btn btn-secondary"
                                        data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus"
                                        data-bs-placement="top" data-bs-content="Copied" id="btnCpyBsi">
                                        <i class="bi bi-copy"></i>
                                    </a>
                                </div>
                                <!-- <p id="messageBsi" class="message text-black d-none">Copied!</p>
                                <button class="btn btn-md btn-cpy m-1" id="btnCpyBsi">
                                    <i class="bi bi-copy"></i>
                                </button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-10 text-center">
                        <h2 class="mb-5">Terima Kasih</h2>
                        <p>Kami ucapkan atas segala hadiah yang telah diberikan.</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- End of Gifts -->

    <!-- Add Content -->
    <section id="add" class="add">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h5>"Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari
                        jenismu
                        sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa
                        kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum
                        yang berfikir."</h5>
                    <h4>(Q.S Ar Rum : 21)</h4>
                </div>
                <div class="col-md-8 col-10 border mt-5 ucapan">
                    <h2 class="text-center mt-3">Ucapan & Doa restu</h2>
                    <livewire:comment>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Add Content -->

    <footer class="text-center bg-light">
        <div class="container-fluid">
            <p class="fs-6">Ichuuuls &copy; 2024. All Rights Reserved</p>
        </div>
    </footer>
    <!-- Audio -->
    <div id="audio-container">
        <audio id="song" autoplay loop>
            <source src="audio/audio.mp3" type="audio/mp3">
        </audio>

        <div class="audio-wrap" style="display: none;">
            <i class="bi bi-disc"></i>
        </div>
    </div>
    <!-- End Audio -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        simplyCountdown('.simply-countdown', {
            year: 2024, // required
            month: 4, // required
            day: 28, // required
            hours: 8, // Default is 0 [0-23] integer
            minutes: 0, // Default is 0 [0-59] integer
            seconds: 0, // Default is 0 [0-59] integer
            words: { //words displayed into the countdown
                days: {
                    singular: 'Hari',
                    plural: 'Hari'
                },
                hours: {
                    singular: 'Jam',
                    plural: 'Jam'
                },
                minutes: {
                    singular: 'Menit',
                    plural: 'Menit'
                },
                seconds: {
                    singular: 'Detik',
                    plural: 'Detik'
                }
            },
        })
    </script>

    <script>
        const stickyTop = document.querySelector(".sticky-top");
        const offcanvas = document.querySelector(".offcanvas");

        offcanvas.addEventListener("show.bs.offcanvas", () => {
            stickyTop.style.overflow = "visible";
        });

        offcanvas.addEventListener("hidden.bs.offcanvas", () => {
            stickyTop.style.overflow = "hidden";
        });
    </script>

    <script>
        const rootElement = document.querySelector(':root');
        const iconWrap = document.querySelector('.audio-wrap');
        const audioIcon = document.querySelector('.audio-wrap i');
        const audio = document.querySelector('#song');
        let isPlaying = false;

        function disableScroll() {
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

            window.onscroll = function() {
                window.scrollTo(scrollTop, scrollLeft);
            }
            rootElement.style.scrollBehavior = 'auto';
        }

        function enableScroll() {
            window.onscroll = function() {}
            rootElement.style.scrollBehavior = 'smooth';
            // localStorage.setItem('opened', 'true');
            playAudio()
        }

        function playAudio() {

            audio.volume = 0.5;
            iconWrap.style.display = 'flex';
            audio.play();
            isPlaying = true;
        }

        iconWrap.onclick = function() {
            if (isPlaying) {
                audio.pause();
                audioIcon.classList.remove('bi-disc');
                audioIcon.classList.add('bi-pause-circle');
            } else {
                audioIcon.classList.add('bi-disc');
                audioIcon.classList.remove('bi-pause-circle');
                audio.play();
            }
            isPlaying = !isPlaying;
        }

        function pauseAudio() {
            const audio = document.querySelector('#song');
            iconWrap.style.display = 'none';
            audio.pause();
        }


        disableScroll();
        // if (!localStorage.getItem('opened')) {
        //     disableScroll();
        // }
    </script>

    <script>
        const btnCpyBca = document.getElementById('btnCpyBca');
        const btnCpyBsi = document.getElementById('btnCpyBsi');
        const rekeningBca = document.getElementById('rekeningBca').innerText;
        const rekeningBsi = document.getElementById('rekeningBsi').innerText;
        const messageBca = document.getElementById('messageBca');
        const messageBsi = document.getElementById('messageBsi');

        btnCpyBca.addEventListener('click', () => {
            navigator.clipboard.write(rekeningBca);
        })

        btnCpyBsi.addEventListener('click', () => {
            navigator.clipboard.write(rekeningBsi);
        })
    </script>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const nama = urlParams.get('n') || '';
        const pronoun = urlParams.get('p') || 'Bapak/Ibu/Saudara/i';


        const namaConrainer = document.querySelector('.hero h2 span');
        namaConrainer.innerText = `${pronoun} ${nama}`
    </script>
    <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverBsi = document.querySelector('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

        const popover = new bootstrap.Popover('.popover-dismiss', {
            trigger: 'focus'
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
