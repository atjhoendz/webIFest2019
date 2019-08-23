@extends('layouts.detail_page')

@section('main')
<div class="container detailContent" id="semnas">
    <h1 class="txtJudul">SEMINAR NASIONAL</h1>
    <div class="horizontal-scroll-wrapper">
        <div class="horizontal-scroll-content">
            <img class="responsive-img z-depth-3" src="{{url('img/pemateri1_talkshow.jpg')}}" alt="img_talks">
        </div>
        <div class="horizontal-scroll-content">
            <img class="responsive-img z-depth-3" src="{{url('img/pemateri2_talkshow.jpg')}}" alt="img_talks">
        </div>
        <div class="horizontal-scroll-content">
            <img class="responsive-img z-depth-3" src="{{url('img/pemateri3_talkshow.jpg')}}" alt="img_talks">
        </div>
    </div>
    <div class="row">
        <div class="col m12 descWrapper">
            <p class="descRangkaian">Seminar Nasional Informatika (Semnas) adalah bagian dari rangkaian IFest yang
                setiap tahunnya mengundang
                pemateri yang telah berpengalaman di bidang yang relevan dengan tema yang dibawa Semnas di tingkat
                nasional. Pada tahun ini, Semnas membawa <span class="yellow-text">'The Role of Big Data Analytics in
                    Industry Revolution'</span> sebagai
                tema mengingat hal tersebut sedang marak dibicarakan. Selain seminar, ada pula kegiatan yang melibatkan
                masyarakat untuk mempublikasikan hasil penelitiannya. Semnas bertujuan untuk meningkatkan wawasan
                masyarakat umum di bidang Informatika yang sesuai dengan perkembangan zaman.</p>
            <p class="yellow-text">Sabtu, 12 Oktober 2019</p>
            <p>Gedung Graha Sanusi Unpad Dipatiukur, Bandung</p>
            <a href="#" class="waves-effect waves-light btnRSVP btn">GET TICKETS NOW <i
                    class="material-icons">mail</i></a>
        </div>
    </div>
</div>
@endsection