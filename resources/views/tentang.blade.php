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
            Misuhiasu hadir sebagai ruang ekspresi bagi siapa pun yang memendam perasaan sulit—mulai dari sakit hati,
            kekecewaan, kegelisahan, ketidakpastian, pengkhianatan, hingga hubungan yang tidak sehat. Banyak emosi yang
            sering kali tidak mudah diungkapkan secara verbal, sehingga akhirnya dipendam dan menjadi beban. Melalui
            pendekatan yang lebih soft, artsy, dan tetap “chall”, Misuhiasu membantu menerjemahkan rasa itu menjadi
            bentuk kreativitas yang elegan dan tidak meledak-ledak, namun tetap jujur.
        </p>

        {{-- 🔻 Tujuan Kami --}}
        <div class="subblock">
            <h3 class="subblock-title">Tujuan Kami<span></span></h3>
            <p class="section-body">
                Tujuan Misuhiasu adalah membantu setiap individu mengekspresikan perasaan yang terpendam dengan cara
                yang aman, lembut, dan estetik. Kami ingin menjadi wadah yang menyalurkan emosi berat—seperti
                kekecewaan, cemburu, rasa tidak dihargai, toxic relationship, kurang komunikasi, hingga tekanan
                mental—agar tidak menjadi penyakit batin maupun beban berkepanjangan. Melalui karya dan pesan yang
                relatable, kami menghadirkan cara baru untuk menyuarakan diri tanpa harus melukai, mempermalukan, atau
                menyakiti siapa pun.
            </p>
        </div>


        {{-- 🔻 Riwayat Perusahaan --}}
        <div class="subblock">
            <h3 class="subblock-title">Riwayat Perusahaan<span></span></h3>
            <p class="section-body">
                Misuhiasu lahir dari pengalaman nyata tentang sulitnya mengungkapkan perasaan secara langsung. Didirikan
                oleh individu yang memahami kompleksitas emosi manusia, brand ini berawal dari kebutuhan untuk
                menciptakan medium ekspresi yang aman, kreatif, dan penuh makna. Dari proses kecil dan personal,
                Misuhiasu berkembang menjadi brand yang fokus pada emotional expression art, menghadirkan karya yang
                merepresentasikan berbagai luka, keresahan, dan kenyataan hubungan modern. Seiring waktu, Misuhiasu
                berkomitmen untuk terus menjadi teman emosional bagi banyak orang yang membutuhkan ruang untuk “bersuara
                tanpa harus bicara”.
            </p>
        </div>
    </div>

    <div id="visi" class="subcontent" style="display:none;">
        <h2 class="section-title">Visi dan Misi<span></span></h2>
        <p class="section-body">
            <b>Visi:</b> Menjadi brand fashion lokal nomor satu dengan keunggulan desain, kualitas, serta
            inovasi.<br><br>
            <b>Misi:</b> Menghadirkan produk fashion berkualitas tinggi yang dapat meningkatkan kepercayaan diri
            konsumen dan menciptakan pengalaman belanja yang menyenangkan.
        </p>
    </div>

    <div id="prospektus" class="subcontent" style="display:none;">
        <h2 class="section-title">Prospektus<span></span></h2>
        <p class="section-body">
            Misuhiasu melihat masa depan di mana ekspresi emosional menjadi bagian penting dari kesehatan mental dan
            identitas diri. Dengan memadukan seni, storytelling, dan emosi yang autentik, Misuhiasu memiliki potensi
            berkembang sebagai brand yang relevan bagi generasi yang semakin sadar akan pentingnya kejujuran perasaan.
        </p>
        <p class="section-body">
            <b>Ekspansi Produk Kreatif: </b>ilustrasi, apparel, aksesori, dan karya digital bertema emosi yang
            relatable.<br><br>
            <b>Kolaborasi Artistik : </b>dengan seniman, musisi, dan kreator yang fokus pada isu mental, hubungan, dan
            kehidupan sosial modern.<br><br>
            <b>Komunitas Emosional : </b>membangun ruang aman (online/offline) bagi orang-orang untuk berbagi cerita
            tanpa takut dihakimi.<br><br>
            <b>Posisi sebagai Emotional Expression Brand : </b>yang unik dan jarang dimiliki brand lain, memberikan
            nilai diferensiasi yang kuat.
            Dengan fondasi konsep yang kuat dan kebutuhan emosional yang terus meningkat, Misuhiasu memiliki peluang
            besar menjadi salah satu brand modern yang paling autentik dan bermakna.<br><br>
        </p>
    </div>

    <div id="penghargaan" class="subcontent" style="display:none;">
        <h2 class="section-title">Penghargaan<span></span></h2>
        <p class="section-body">
            Meskipun masih berkembang, Misuhiasu telah menerima berbagai bentuk apresiasi dari komunitas dan para
            pendukungnya. Brand ini mendapatkan pengakuan sebagai ruang ekspresi yang mampu mewakili perasaan yang sulit
            diungkapkan, sehingga banyak individu merasa lebih didengar dan dipahami. Dukungan dari pengikut yang terus
            bertambah juga menjadi bentuk penghargaan tersendiri, menunjukkan kuatnya resonansi emosional yang tercipta
            melalui setiap karya. Selain itu, Misuhiasu memperoleh apresiasi dari kolaborator—para seniman, fotografer,
            dan kreator—yang menilai brand ini memiliki identitas yang solid, konsep yang mendalam, serta pendekatan
            unik dalam menggabungkan seni dan emosi. Semua apresiasi ini menjadi motivasi bagi Misuhiasu untuk terus
            berkembang dan meningkatkan kualitas karya agar kelak dapat meraih penghargaan formal di dunia kreatif,
            seni, dan komunitas.
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
