<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <title>Sistem Monitoring Barcode Pohon</title>
</head>

<body>

    <!-- header -->
    <div class="header">
        <div class="search">
            <div class="icon-search">
                <ion-icon name="search-outline"></ion-icon>
            </div>
            <div class="text-search">
                <p>Search</p>
            </div>
        </div>
        <div class="notifikasi">
            <div class="icon-notifikasi">
                <ion-icon name="notifications-outline"></ion-icon>
            </div>
        </div>
        <div class="pesan">
            <div class="icon-pesan">
                <ion-icon name="mail-unread-outline"></ion-icon>
            </div>
        </div>
        <div class="menu">
            <div class="icon-menu">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- informasi -->
    <div class="informasi">
        <div class="info-cuaca"></div>
    </div>
    <!-- end informasi -->

    <!-- kategori -->
    <div class="kategori">
        <div class="kategori-buah">
            <div class="bungkus">
                <div class="img-jambu">
                    <img src="<?php echo base_url('assets/img/kategori/jambu.png') ?>">
                </div>
                <div class="text">
                    Jambu
                </div>
            </div>
        </div>
        <div class="kategori-buah">
            <div class="bungkus">
                <div class="img-jeruk">
                    <img src="<?php echo base_url('assets/img/kategori/jeruk.png') ?>">
                </div>
                <div class="text">
                    Jeruk
                </div>
            </div>
        </div>
        <div class="kategori-buah">
            <div class="bungkus">
                <div class="img">
                    <img src="<?php echo base_url('assets/img/kategori/durian.png') ?>">
                </div>
                <div class="text">
                    Durian
                </div>
            </div>
        </div>
        <div class="kategori-buah">
            <div class="bungkus">
                <div class="img">
                    <img src="<?php echo base_url('assets/img/kategori/lemon.png') ?>">
                </div>
                <div class="text">
                    Lemon
                </div>
            </div>
        </div>
    </div>
    <!-- end kategori -->

    <!-- daftar pohon -->
    <div class="judul-pohon">
        <p><b>Daftar Pohon</b></p>
    </div>
    <div class="daftar-pohon">
        <div class="pohon">
            <div class="kotak-pohon">
                <img src="assets/img/pohon.svg">
            </div>
            <div class="text-pohon">
                <p class="p1">Pohon Jambu</p>
                <button>Cek Pohon</button>
            </div>
        </div>
        <div class="pohon">
            <div class="kotak-pohon">
                <img src="assets/img/pohon.svg">
            </div>
            <div class="text-pohon">
                <p class="p1">Pohon Jeruk</p>
                <button>Cek Pohon</button>
            </div>
        </div>
        <div class="pohon">
            <div class="kotak-pohon">
                <img src="assets/img/pohon.svg">
            </div>
            <div class="text-pohon">
                <p class="p1">Pohon Durian</p>
                <button>Cek Pohon</button>
            </div>
        </div>
        <div class="pohon">
            <div class="kotak-pohon">
                <img src="assets/img/pohon.svg">
            </div>
            <div class="text-pohon">
                <p class="p1">Pohon Lemon</p>
                <button>Cek Pohon</button>
            </div>
        </div>
        <div class="pohon">
            <div class="kotak-pohon">
                <img src="assets/img/pohon.svg">
            </div>
            <div class="text-pohon">
                <p class="p1">Pohon Nanas</p>
                <button>Cek Pohon</button>
            </div>
        </div>
    </div>
    <!-- end daftar pohon -->

    <!-- hasil panen -->
    <div class="judul-panen">
        <p><b>Hasil Panen</b></p>
    </div>
    <div class="hasil-panen">
        <div class="panen">
            <div class="foto-panen"></div>
            <div class="text-panen">
                <p class="p1">Jambu Citra</p>
                <p class="p2">Rp. 15.000</p>
            </div>
            <div class="tombol-pesan">
                <button class="btn btn-primary">Beli</button>
            </div>
        </div>
        <div class="panen">
            <div class="foto-panen"></div>
            <div class="text-panen">
                <p class="p1">Jambu Citra</p>
                <p class="p2">Rp. 15.000</p>
            </div>
            <div class="tombol-pesan">
                <button class="btn btn-primary">Beli</button>
            </div>
        </div>
        <div class="panen">
            <div class="foto-panen"></div>
            <div class="text-panen">
                <p class="p1">Jambu Citra</p>
                <p class="p2">Rp. 15.000</p>
            </div>
            <div class="tombol-pesan">
                <button class="btn btn-primary">Beli</button>
            </div>
        </div>
        <div class="panen">
            <div class="foto-panen"></div>
            <div class="text-panen">
                <p class="p1">Jambu Citra</p>
                <p class="p2">Rp. 15.000</p>
            </div>
            <div class="tombol-pesan">
                <button class="btn btn-primary">Beli</button>
            </div>
        </div>
    </div>
    <!-- end hasil panen -->

    <!-- data sparsial -->
    <div class="data-sparsial">
        <div class="judul-sparsial">
            <p>Data Sparsial</p>
        </div>
        <div class="peta-sparsial">
            <div class="peta"></div>
        </div>
    </div>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navigation">
            <ul>
                <li class="list active">
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="text">Profile</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="qr-code-outline"></ion-icon></span>
                        <span class="text">Scan</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="receipt-outline"></ion-icon></span>
                        <span class="text">Detail</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="text">Settings</span>
                    </a>
                </li>
                <div class="indikator"></div>
            </ul>
        </div>
    </div>
    <!-- end Navbar -->
    <div class="footer">
        <!-- box-icon -->
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <!-- ion-icon -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>
            const list = document.querySelectorAll('.list');

            function activeLink() {
                list.forEach((item) => item.classList.remove('active'));
                this.classList.add('active');
            }
            list.forEach((item) => item.addEventListener('click', activeLink));
        </script>
    </div>
</body>

</html>