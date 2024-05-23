@extends('layout.layout')

@section('content')
<section>
    <!-- Content -->
    <div class="row">
            <div class="col-6 col-12-small">
                <span class="image fit"><img src="https://cdn.pixabay.com/photo/2018/01/17/06/06/silhouette-3087519_640.png" alt="" style="width:25vw;" /></span>
            </div>
            <div class="col-6 col-12-small">
                <h2>O nas</h2>
                <p style="font-size: 1.3em"><strong>Kameralne STUDIO pilates</strong> powstało z naszej pasji do pracy nad ludzkim ciałem i chęci dzielenia się prozdrowotnym charakterem metody Pilates. Pracująca tu kadra to osoby z dużym doświadczeniem w praktyce i nauczaniu tej metody, nieustająco podnoszące swoje kwalifikacje poprzez szkolenia u najlepszych master trenerów w Polsce.</p>
                <p style="font-size: 1.3em">Biorąc pod uwagę cel z jakim do nas przyszedłeś, możliwości Twojego ciała, przebyte choroby czy urazy, dostosujemy twój plan treningowy do twoich potrzeb.</p>
                <p style="font-size: 1.3em"><strong>Przyjdź i przekonaj się sam, że pilates  jest dla wszystkich bez względu na wiek czy wcześniejszy styl życia.
                    Pamiętaj, nigdy nie jest za późno na walkę o sprawne ciało i lepszy komfort dnia codziennego !</strong></p>
                <p style="font-size: 1.3em">Lokalizacja studia to Będzin ul. Modrzejowska 95.<br>
                    Wzdłuż całej ulicy znajdują się bezpłatne miejsca parkingowe.</p>
                <p style="font-size: 1.3em">Zapraszamy!</p>
            </div>
            <!-- Break -->
            <div class="col-4 col-12-medium">
                <h3>Misja</h3>
                <p>Praca nad ludzkim ciałem i chęć dzielenia się prozdrowotnym charakterem metody pilates</p>
            </div>
            <div class="col-4 col-12-medium">
                <h3>Wizja</h3>
                <p>Sprawne ciało i lepszy komfort dnia codziennego bez względu na wiek czy wcześniejszy styl życia</p>
            </div>
            <div class="col-4 col-12-medium">
                <h3>Wartość</h3>
                <ul>
                    <li>Smukłe ciało, mocne i rozciągnięte mięśnie</li>
                    <li>Lepsza kondycja i koordynacja ruchowa</li>
                    <li>Plan treningowy dostosowany do twoich potrzeb</li>
                </ul>
            </div>
        </div>

    <hr class="major" />
                <!-- Image -->
                    <h1 style="text-align: center;">Z życia studia</h1>
                    <div class="box alt">
                        <div class="row gtr-25 gtr-uniform">

                            <div class="col-4"><span class="image fit"><img src="{{ asset('images/onas1.webp') }}" alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="{{ asset('images/onas2.webp') }}"  alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="{{ asset('images/onas3.webp') }}"  alt="" /></span></div>
                            <!-- Break -->
                            <div class="col-4"><span class="image fit"><img src="{{ asset('images/onas4.webp') }}"  alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="{{ asset('images/onas5.webp') }}"  alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="{{ asset('images/onas6.webp') }}"  alt="" /></span></div>
                            <!-- Break -->
                            <div class="col-4"><span class="image fit"><img src="{{ asset('images/onas7.webp') }}"  alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="{{ asset('images/onas8.webp') }}"  alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="{{ asset('images/onas9.webp') }}"  alt="" /></span></div>
                            <!-- Break -->
                            <div class="col-4"><span class="image fit"><img src="{{ asset('images/onas10.webp') }}"  alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="{{ asset('images/onas11.webp') }}"  alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="{{ asset('images/onas12.webp') }}"  alt="" /></span></div>

                        </div>
                    </div>
    </section>
@endsection
