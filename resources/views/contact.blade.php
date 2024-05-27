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
            <embed class="uagb-google-map__iframe" title="Google Map for " src="https://maps.google.com/maps?q=B%C4%99dzin%2C%20Modrzejowska%2095&amp;z=15&amp;hl=pl&amp;t=m&amp;output=embed&amp;iwloc=near" width='100%' height="300" loading="lazy">
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
