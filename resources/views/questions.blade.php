<link href="files/bootstrap.min.css" rel="stylesheet"  type="text/css">
<link href="files/my.css" rel="stylesheet"  type="text/css">





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
                @foreach($errors->all() as $error)
                <h2>{{$error}}</h2>
                @endforeach
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-1"><h2>Admin <b></b></h2></div>
                    <div class="col-sm-7"><Button data-toggle="modal" data-target="#Modal_add" class="btn btn-primary">Ajouter</Button>
                    <a href="/">Accueil</a>
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
                    <tr>
                        <td>1</td>
                        <td>Quel est notre menu du Mardi ?</td>
                        

                        <td>
                            <a href="#" class="text-warning"  data-toggle="tooltip" data-toggle="modal" data-target="#Modal_update">Modifier</a>
                            <a href="#" class="text-danger"  data-toggle="tooltip" >Supprimer</a>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>


<!-- Modal-Add -->
<div class="modal fade" id="Modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="post" action="/add">
            @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
         <h5>Question: </h5><br>
        </div>
        <div class="row" style="padding: 10px;">
         <input name="question" class="form-control">
        </div>
        <div class="row">
            <div class="col-md-6"><label>A:</label></div>
            <div class="col-md-6"><label>B:</label></div>
        </div>
        <div class="row">
            <div class="col-md-6"><input name="opa"></div>
            <div class="col-md-6"><input name="opb"></div>
        </div>
        <div class="row">
            <div class="col-md-6"><label>C:</label></div>
            <div class="col-md-6"><label>D:</label></div>
        </div>
        <div class="row">
            <div class="col-md-6"><input name="opc"></div>
            <div class="col-md-6"><input name="opd"></div>
        </div>
        <div class="row">
            <div class="col-md-6"><label>E:</label></div>
            <div class="col-md-6"><label>F:</label></div>
        </div>
        <div class="row">
            <div class="col-md-6"><input name="ope"></div>
            <div class="col-md-6"><input name="opf"></div>
        </div>
        <div class="row">
            <div class="col-md-6"><label>G:</label></div>
            <div class="col-md-6"><label>H:</label></div>
        </div>
        <div class="row">
            <div class="col-md-6"><input name="opg"></div>
            <div class="col-md-6"><input name="oph"></div>
        </div>
        <div class="row">
            <div class="col-md-6"><label>I:</label></div>
            <div class="col-md-6"><label>J:</label></div>
        </div>
        <div class="row">
            <div class="col-md-6"><input name="opi"></div>
            <div class="col-md-6"><input name="opj"></div>
        </div>
        <div class="row">
            <div class="col-md-3"><label>Answer: </label>
                <select name="ans" class="form-control">
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                    <option value="d">E</option>
                    <option value="d">F</option>
                    <option value="d">G</option>
                    <option value="d">H</option>
                    <option value="d">I</option>
                    <option value="d">J</option>
                </select>
            </div>
            <div class="col-md-9"></div>
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary" >Ajouter Question</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal-Update -->







<script src="files/jquery.min.js"></script>
<script src="files/popperjs.min.js"></script>
<script src="files/bootstrap.min.js"></script>