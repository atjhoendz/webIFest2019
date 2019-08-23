@extends('layouts.detail_page')

@section('main')
    <div class="container detailContent" id="talkshow">
        <h1 class="txtJudul">TALKSHOW</h1>
        <h6 style="padding-top=0px">Collaborating with <br> Developer Circles Bandung</h6>
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
                    <p class="descRangkaian">Talkshow merupakan event pembuka rangkaian IFest 2019 yang mengundang narasumber berkompeten untuk memberikan wawasan baru dengan topik <span class="yellow-text">"Why Data is So Important"</span> sebagai pengenalan Big Data.</p>
                <p class="yellow-text">Minggu, 15 September 2019</p>
                <p>Bandung Creative Hub</p>
                <a href="https://www.eventbrite.com/e/talkshow-why-data-is-so-important-tickets-68438207521" target="_blank" class="waves-effect waves-light btnRSVP btn">RSVP NOW <i class="material-icons">mail</i></a>
            </div>
        </div>
    </div>
@endsection