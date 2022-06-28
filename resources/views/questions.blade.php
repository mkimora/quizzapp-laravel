<link href="files/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="files/my.css" rel="stylesheet" type="text/css">





<br>
<h3 style="text-align: center;"><strong>Quiz en ligne : Mama Restaurant</strong> </h3>
<br>
<br>

<br>

<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                @foreach ($errors->all() as $error)
                    <div class="callout"><strong>Erreur!</strong></div>

                    <h2>{{ $error }}</h2>
                @endforeach
                {{-- @if ($session::get('successMessage'))
                <div class="callout"><strong>Succés!</strong></div>

                <?php Session::forget('successMessage'); ?>
                    
                @endif --}}
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-1">
                            <h2>Admin <b></b></h2>
                        </div>
                        <div class="col-sm-7"><Button data-toggle="modal" data-target="#Modal_add"
                                class="btn btn-primary">Ajouter</Button>
                            <a href="/" style="margin-left:5%;">Accueil</a>
                        </div>
                        <div class="col-sm-4">
                            <div class="search-box">

                                <input type="text" class="form-control" placeholder="Rechercher&hellip;">
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Question <i class="fa fa-sort"></i></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $q)
                            <tr>
                                <td>{{ $loop->index }}</td>
                                <td>{{ $q->question }} ?</td>


                                <td>
                                    <a href="#" class="text-warning" data-toggle="modal"
                                        data-target="#Modal_update{{ $q->id }}">Modifier</a>
                                    <a href="#" class="text-danger" data-toggle="modal"
                                        data-target="#Modal_delete{{ $q->id }}">Supprimer</a>
                                </td>
                            </tr>


                            <!-- Modal-Update -->
                            <div class="modal fade" id="Modal_update{{ $q->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form method="post" action="/update">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modifier</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <h5>Question: </h5><br>
                                                </div>
                                                <input style="visibility:hidden" name="id"
                                                    value="{{ $q->id }}">
                                                <div class="row" style="padding: 10px;">
                                                    <input name="question" value="{{ $q->question }}"
                                                        class="form-control">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6"><label>A:</label></div>
                                                    <div class="col-md-6"><label>B:</label></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6"><input value="{{ $q->a }}"
                                                            name="opa"></div>
                                                    <div class="col-md-6"><input value="{{ $q->b }}"
                                                            name="opb"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6"><label>C:</label></div>
                                                    <div class="col-md-6"><label>D:</label></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6"><input value="{{ $q->c }}"
                                                            name="opc"></div>
                                                    <div class="col-md-6"><input value="{{ $q->d }}"
                                                            name="opd"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3"><label>Answer: </label>
                                                        <select name="ans" class="form-control">
                                                            <option value="{{ $q->ans }}">{{ $q->ans }}
                                                            </option>
                                                            <option value="a">A</option>
                                                            <option value="b">B</option>
                                                            <option value="c">C</option>
                                                            <option value="d">D</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-9"></div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Fermer</button>
                                                <button type="submit" class="btn btn-primary">Modifier
                                                    Question</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal-Delete -->
                            <div class="modal fade" id="Modal_delete{{ $q->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form method="post" action="/delete">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modifier</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                    <input style="visibility:hidden" name="id"
                                                        value="{{ $q->id }}">
                                                    <h5>Voulez-vous supprimer cette question ?</h5>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Annuler</button>
                                                        <button type="submit" class="btn btn-danger">Supprimer
                                                            Question</button>
                                                    </div>
                                                
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>





<script src="files/jquery.min.js"></script>
<script src="files/popperjs.min.js"></script>
<script src="files/bootstrap.min.js"></script>
