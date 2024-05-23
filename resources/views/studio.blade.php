@extends('layout.layout')

@section('content')
<div class="row">
    <header>
        <h1 style="text-align: center;">Studio</h1>
    </header>
        <p>Miejsce, do którego Cię zapraszamy to klimatyczna przestrzeń oferująca ćwiczenia w mini grupach oraz treningi personalne. W obu przypadkach łączymy klasyczną metodę pracy na matach z dużym i małym sprzętem najwyższej jakości, który został zaprojektowanym przez samego twórcę tej metody  – Josepha Pilatesa.</p>
        <p>W studio do twojej dyspozycji znajdują się 3 Reformery w tym jeden z systemem wieży, 4 Spine Correctory, Combo Chair, rollery, piłki gimnastyczne, obręcze, drążki oraz wiele drobnego sprzętu który sprawia, że nasze zajęcia są urozmaicone, interesujące i dostosowane do poziomu uczestników. Trening  ze sprzętem pomaga udoskonalić ćwiczenia, dzięki czemu szybciej osiągamy zamierzone cele w kształtowaniu sylwetki oraz w uzyskaniu sprawności funkcjonalnej.</p>
        <p>Jeśli niewiele mówią ci powyższe nazwy dużego sprzętu Pilates, nic się na martw 🤗 szybko spieszymy z  wyjaśnieniami <br><br></p>


    <div class="col-6 col-12-small">
        <span class="image fit"><img src="{{ asset('images/baba1.webp') }}"alt="" style="width:25vw;" /></span>
    </div>
    <div class="col-6 col-12-small">
        <h2>Reformer</h2>
        <p>wyglądem zbliżony jest do łóżka i zapewnia przeprowadzenie treningu całego ciała efektywniej niż na macie. Wprawiony w ruch przez ćwiczącego skupia uwagę klienta na precyzji ruchu zachowując jednocześnie odpowiednie wzorce ruchowe.</p>
        <p>Posiada płaską leżankę na kółkach zwaną wózkiem, ruchomą poręcz, zaramienniki, podgłówek, paski oraz zestaw sprężyn o różnej sile oporu. Dzięki temu, że części reformera są regulowane, można go dostosować do różnych rozmiarów ciała klienta, poziomu jego umiejętności oraz kondycji. Sprzęt ten umożliwia wykonywanie ćwiczeń w pozycji leżącej, siedzącej, stojącej czy w klęku a jego wszechstronność powoduje, że ilość ćwiczeniowych kombinacji jest praktycznie bez limitu.</p>
        <p>Dla kogo jest reformer? Dla każdego! bo jego zastosowanie jest wszechstronne. Panie wysmuklą na nim swoje ciało, sportowiec zwiększy siłę mięśniową i poprawi wydolność a osoba po operacji lub z kontuzją wykona na nim trening medyczny czy rehabilitacyjny.</p>
        <br>
        <br>
    </div>
    <div class="col-6 col-12-small">
        <h2>Wunda / Combo Cher</h2>
        <p>czyli krzesło to stabilne siedzisko, z ruchomym nożnym pedałem na sprężynach z kilkustopniowym obciążeniem. Lekki, prosty w obsłudze przyrząd oraz wygodne siedzisko sprawia, że można na nim leżeć, siedzieć, ustawiać ciało w różnych pozycjach dla pozyskania ciekawych rozwiązań treningowych.
         Polecany jest szczególnie dla osób średniozaawansowanych i zaawansowanych oraz osób wymagających rehabilitacji pourazowej odbudowując uszkodzone partie mięśniowe. Służy przede wszystkim do wzmacniania korpusu mięśni brzucha, pleców oraz nóg, pośladków i ramion. Ćwiczenia na krześle poprawiają również stabilizację, wytrzymałość i elastyczność.</p>
    </div>
    <div class="col-6 col-12-small">
        <span class="image fit"><img src="{{ asset('images/baba2.webp') }}" alt="" style="width:25vw;" /></span>
        <br>
    </div>

    <div class="col-6 col-12-small">
        <span class="image fit"><img src="{{ asset('images/baba3.webp') }}" alt="" style="width:25vw;" /></span>
    </div>
    <div class="col-6 col-12-small">
        <h2>Spine Corrector</h2>
        <p>czyli łuk to jeden z najmniejszych pilatesowych sprzętów, przeznaczonym do korekcji kręgosłupa, ale nie tylko. Charakterystyczny kształt pół łuku daje wiele możliwości wzmacniania mięśni, w szczególności brzucha i pleców, rozciągania mięśni i kręgosłupa dając wsparcie dla pleców.
        Dzięki niemu odzyskujemy przestrzeń w ciele i naturalne krzywizny kręgosłupa. Spine corrector polecany jest dla każdego bez względu na stopień zaawansowania.</p>
    </div>
</div>
@endsection
