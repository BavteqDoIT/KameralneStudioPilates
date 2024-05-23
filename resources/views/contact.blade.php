@extends('layout.layout')

@section('content')
<section>
<h1 style="text-align: center;">Spotkajmy się !</h1>
<br>
<div class="row">
    <div class="col-6 col-12-small">
        <h2>Adres</h2>
        <p>
            ul. Modrzejowska 95<br>
            42-500 Będzin
        </p>
        <p>
            Email: pilatesbedzin@wp.pl<br>
            TEL. 577 702 100
        </p>
        <P>
            Wygodny dojazd oraz duży parking przed lokalem to nasz atut.<br>
            Odległość studia od przystanku komunikacji miejskiej oraz od dworca PKP Będzin Miasto to jedyne 200m.<br>
            Od miast ościennych woj. śląskiego dzieli nas zaledwie kilka kilometrów:<br>
            <ul>
                <li>Sosnowiec 3 km</li>
                <li>Czeladź 3,5 km</li>
                <li>Dąbrowa Górnicza 3,5 km</li>
                <li>Siemianowice Śląskie 7 km</li>
                <li>Katowice 9 km</li>
                <li>Mysłowice 10 km</li>
                <li>Piekary Śląskie 11 km</li>
                <li>Bytom 14km</li>
            </ul>
        </p>
        <p>
            <iframe width="1000" height="252" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1000&amp;height=252&amp;hl=en&amp;q=Kameralne%20Studio%20Pilates%20B%C4%99dzin+(Kameralne%20Studio%20Pilates)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://www.counterliczniki.com'>licznik</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=ea2bfd575223e95fccdb4752d017b322714b4e39'></script>
        </p>
        <p> Serdecznie zapraszamy !</p>
    </div>
    <div class="col-6 col-12-small">
        <h2>Formularz kontaktowy</h2>
        <form method="post" action="#">
            <div class="row gtr-uniform">

                <div class="col-6 col-12-xsmall">
                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Imie" />
                </div>

                <div class="col-6 col-12-xsmall">
                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Nazwisko" />
                </div>

                <div class="col-6 col-12-xsmall">
                    <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                </div>

                <div class="col-6 col-12-xsmall">
                    <input type="tel" name="demo-tel" id="demo-email" value="" placeholder="Nr. telefonu" />
                </div>

                <div class="col-12">
                    <textarea name="demo-message" id="demo-message" placeholder="Napisz wiadomość" rows="6"></textarea>
                </div>
                <!-- Break -->
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Wyślij" class="primary" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</div>
</section>
@endsection
