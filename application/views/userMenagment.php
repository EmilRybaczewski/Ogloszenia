<style>
    .janekk{
        background-color: floralwhite;
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        border-radius: 20px 20px 20px 20px;
        -moz-border-radius: 20px 20px 20px 20px;
        -webkit-border-radius: 20px 20px 20px 20px;
        text-align: center;
    }

</style>
<div class="row">
    <div class="container-fluid">
        <div class="col-md-2 col-md-offset-5 janekk">
            <div>
                <ul class="list-unstyled">
<li><?= anchor('Ogloszenia/dodaj', 'Dodaj ogłoszenie')?></li>
<li><?= anchor('Logginc/wedit', 'Edytuj Konto')?></li>
<li><?= anchor('Logginc/usun', 'Usuń Konto')?></li>
<li><?= anchor('Ogloszenia/mojeOgloszenia', 'Moje Ogłoszenia')?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
