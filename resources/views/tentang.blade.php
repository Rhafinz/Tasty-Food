@extends('layouts.user')
@section('content')
    <h2 class="thick"><b>TENTANG KAMI</b></h2>
    <section class="tastyFood">
        <div class="tasty-food-section">
            <div class="text-content">
                <h3>TASTY FOOD</h3>
                <p class="paragraph"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui
                    diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex.
                    Fusce sit amet <br> viverra ante.</b></p>
                <p class="paragraph2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, <br> augue eu rutrum commodo, dui
                    diam convallis arcu, eget consectetur ex sem <br> eget lacus. Nullam vitae dignissim neque, vel luctus ex.
                    Fusce sit amet <br> viverra ante.</p>
            </div>
            <div class="image-content">
                <img src="{{ asset('assets/ASET/brooke-lark-oaz0raysASk-unsplash.jpg') }}" alt="Tasty Food 1">
                <img src="{{ asset('assets/ASET/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" alt="Tasty Food 2">
            </div>
        </div>
    </section>
@endsection
