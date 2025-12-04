@extends('layouts.app')

@section('content')
<style>
    .subnav-wrapper {
        border-bottom: 1px solid #eee;
        background: #fafafa;
    }
    .subnav {
        display: flex;
        gap: 45px;
        font-size: 20px;
        padding: 18px 40px;
        white-space: nowrap;
    }
    .subnav a {
        color: #4b4b4b;
        font-weight: 500;
        text-decoration: none;
        transition: .2s;
    }
    .subnav a.active {
        color: #c20f0f;
        font-weight: 700;
        border-bottom: 3px solid #c20f0f;
        padding-bottom: 6px;
    }
    .subnav a:hover {
        color: #c20f0f;
    }

    .section-title {
        font-size: 38px;
        font-weight: 700;
        margin-bottom: 22px;
    }
    .section-title span {
        width: 45px;
        height: 5px;
        background: #c20f0f;
        display: block;
        margin-top: 8px;
    }

    .section-body {
        font-size: 19px;
        line-height: 33px;
        text-align: justify;
        margin-bottom: 40px;
    }

    .subblock-title {
        font-size: 30px;
        font-weight: 700;
        margin-top: 40px;
        margin-bottom: 15px;
    }
    .subblock-title span {
        width: 35px;
        height: 4px;
        background: #c20f0f;
        display: block;
        margin-top: 6px;
    }
</style>

<div class="subnav-wrapper">
    <div class="subnav">
        <a href="#tentang" class="subtab active">Tentang Misuhiasu</a>
        <a href="#visi" class="subtab">Visi dan Misi</a>
        <a href="#prospektus" class="subtab">Prospektus</a>
        <a href="#penghargaan" class="subtab">Penghargaan</a>
    </div>
</div>

<div class="container py-5">

    {{-- 🟥 Bagian 1: Tentang Misuhiasu / berisi sub-bagian --}}
    <div id="tentang" class="subcontent">
        <h2 class="section-title">Tentang Misuhiasu<span></span></h2>
        <p class="section-body">
            Misuhiasu merupakan brand fashion modern yang lahir dari semangat kreativitas dan keinginan untuk
            menghadirkan gaya yang nyaman, trendi, dan dapat diakses oleh semua kalangan. Dengan perkembangan
            industri fashion digital yang sangat dinamis, Misuhiasu terus berkembang mengikuti kebutuhan dan
            preferensi konsumen Indonesia.
        </p>

        {{-- 🔻 Tujuan Kami --}}
        <div class="subblock">
            <h3 class="subblock-title">Tujuan Kami<span></span></h3>
            <p class="section-body">
                Merek Misuhiasu berfokus pada fashion dengan desain kasual, modern, dan nyaman digunakan dalam
                aktivitas sehari-hari. Koleksi kami mencakup pakaian, aksesoris, dan produk fashion lain yang dirancang
                untuk meningkatkan kepercayaan diri dan gaya hidup masyarakat urban masa kini.
            </p>
        </div>

       
        {{-- 🔻 Riwayat Perusahaan --}}
        <div class="subblock">
            <h3 class="subblock-title">Riwayat Perusahaan<span></span></h3>
            <p class="section-body">
                Misuhiasu bermula dari usaha kecil dalam industri fashion digital dan berkembang dengan cepat berkat
                kreativitas, inovasi, dan dukungan pelanggan setia. Melalui perkembangan online marketplace dan media
                sosial, Misuhiasu terus memperluas pasar hingga menjadi salah satu brand yang dipercaya konsumen.
                Perjalanan panjang perusahaan ini mencerminkan dedikasi dalam menghadirkan pengalaman fashion terbaik
                bagi masyarakat Indonesia.
            </p>
        </div>
    </div>
    
    <div id="visi" class="subcontent" style="display:none;">
        <h2 class="section-title">Visi dan Misi<span></span></h2>
        <p class="section-body">
            <b>Visi:</b> Menjadi brand fashion lokal nomor satu dengan keunggulan desain, kualitas, serta inovasi.<br><br>
            <b>Misi:</b> Menghadirkan produk fashion berkualitas tinggi yang dapat meningkatkan kepercayaan diri
            konsumen dan menciptakan pengalaman belanja yang menyenangkan.
        </p>
    </div>

    <div id="prospektus" class="subcontent" style="display:none;">
        <h2 class="section-title">Prospektus<span></span></h2>
        <p class="section-body">
            Prospektus Misuhiasu akan dipublikasikan secara berkala untuk memberikan informasi transparan kepada
            pemangku kepentingan mengenai performa bisnis dan strategi ekspansi.
        </p>
    </div>

    <div id="penghargaan" class="subcontent" style="display:none;">
        <h2 class="section-title">Penghargaan<span></span></h2>
        <p class="section-body">
            Berkat inovasi dan layanan pelanggan, Misuhiasu telah menerima berbagai penghargaan dari komunitas fashion
            dan platform e-commerce sebagai bentuk pengakuan atas dedikasi perusahaan.
        </p>
    </div>

</div>

<script>
    const tabs = document.querySelectorAll('.subtab');
    const contents = document.querySelectorAll('.subcontent');

    tabs.forEach(tab => {
        tab.addEventListener('click', e => {
            e.preventDefault();
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            contents.forEach(c => c.style.display = 'none');
            document.querySelector(tab.getAttribute('href')).style.display = 'block';
        });
    });
</script>
@endsection
