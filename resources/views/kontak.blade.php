@extends('layouts.user')
@section('content')
    <div class="content">
        <h2><b>KONTAK KAMI</b></h2>
    </div>
    <section class="contact-container">
        <h2 class="mb-5"><b>KONTAK KAMI</b></h2>
        <form class="contact-layout" action="{{ route('message.store') }}" method="POST">
            @csrf
            <div class="left-column">
                <div class="form-group">
                    <input type="text" placeholder="Subject" class="input-field" name="subject">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Name" class="input-field" name="name">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" class="input-field" name="email">
                </div>
            </div>
            <div class="right-column">
                <div class="form-group">
                    <textarea placeholder="Message" class="input-field textarea-field" name="message"></textarea>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="action-button"><b>KIRIM</b></button>
            </div>
        </form>
    </section>

    <section class="info-section">
        <div class="container mb-3">
            <div class="row">
                <div class="col-md-4  contact-info">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5>EMAIL</h5>
                    <p class="inpo">tastyfood@gmail.com</p>
                </div>
                <div class="col-md-4 contact-info">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h5>PHONE</h5>
                    <p class="inpo">+62 812 3456 7890</p>
                </div>
                <div class="col-md-4 contact-info">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h5>LOCATION</h5>
                    <p class="inpo">Kota Bandung, Jawa Barat</p>
                </div>
            </div>
        </div>
    </section>

    {{-- map sementara --}}
    <section class="map">
        <div id="map">

        </div>
    </section>
@endsection
