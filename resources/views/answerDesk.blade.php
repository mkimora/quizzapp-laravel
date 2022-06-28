<link rel="stylesheet" href="files/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="files/my.css" type="text/css">






<div class="back2">
    <div class="container-fluid">
        <form method="post" action="/submitans">
            @csrf
            <div class="row" style="padding-top: 30vh; color: black;">
                <div class="col-md-3"></div>
                <div class="col-md-4">
                    <h4>#{{ Session::get('nextq') }}: {{ $question->question }}</h4><br>
                    <input value="a" name="ans" type="checkbox"> (A) <small>{{ $question->a }}</small><br>
                    <input value="b" name="ans" type="checkbox"> (B) <small>{{ $question->b }}</small><br>
                    <input value="c" name="ans" type="checkbox"> (C) <small>{{ $question->c }}</small><br>
                    <input value="d" name="ans" type="checkbox"> (D) <small>{{ $question->d }}</small><br>
                    <input value="{{ $question->ans }}" style="visibility:hidden" name="dbans">
                </div>
                <div class="col-md-5"></div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-4">
                    <button type="submit" style="float:right;" class="btn btn-primary">Suivant</button>
                </div>
                <div class="col-md-5"></div>
            </div>
        </form>
    </div>
</div>









<script src="files/jquery.min.js"></script>
<script src="files/popperjs.min.js"></script>
<script src="files/bootstrap.min.js"></script>
