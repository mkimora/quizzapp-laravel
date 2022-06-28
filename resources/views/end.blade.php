<link rel="stylesheet" href="files/bootstrap.min.css" type="text/css">



<div class="container-fluid">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-4">
            <label>Correct: <small>{{Session::get('correctans')}}</small></label>
            <label>Incorrect: <small>{{Session::get('wrongans')}}</small></label>
            <label>Résultat: <small>{{Session::get('correctans')}}/ {{Session::get('correctans')}}+{{Session::get('wrongans')}}</small></label><br>
            <br>
            <a href="/"><button class="btn btn-primary" style="margin-left:15%;">Fin du quizz</button></a>
            <div class="text-center"><a href="/">Accueil</a></div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-4"></div>
    </div>
</div>

<script src="files/jquery.min.js"></script>
<script src="files/popperjs.min.js"></script>
<script src="files/bootstrap.min.js"></script>