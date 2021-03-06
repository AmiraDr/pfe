@include ('header')
@include ('tableHeader')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ajouter un materiel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('adminShowMateriels')}}">Materiels</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
            <!-- jquery validation -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Ajouter un Materiel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{route('adminAddMaterielPost')}}">
                @csrf
                <div class="card-body">
                  
                  <div class="form-group">
                    <label>Categories</label>
                    <select name="categorie_id" class="form-control">
                      @foreach ($categories as $categorie)
                        <option value="{{$categorie->id}}">
                          {{$categorie->nom}}
                        </option>
                      @endforeach
                    </select>
                  </div>

                  
                  <div class="form-group">
                    <label>id</label>
                    <input type="text" name="id" class="form-control" placeholder="Entrer id">
                  </div>
                  <div class="form-group">
                    <label>scat id</label>
                    <input type="text" required name="scat_id" class="form-control" placeholder="Entrer id">
                  </div>
                  <div class="form-group">
                    <label>Nom</label>
                    <input type="text" required name="nom" class="form-control" placeholder="Entrer le nom">
                  </div>
                  <div class="form-group">
                    <label>marque</label>
                    <input type="text" required name="marque" class="form-control" placeholder="Entrer la marque">
</div>
                  <div class="form-group">
                    <label>etat</label>
                    <input type="text" required name="etat" class="form-control" placeholder="Entrer l'etat">
                  </div> 
                  <div class="form-group">
                    <label>Date d'achat</label>
                    <input type="Date" required name="date_achat" class="form-control" placeholder="Entrer le date d'achat">
                  </div>
                  <div class="form-group">
                    <label>Date fin garantie</label>
                    <input type="Date" required name="date_fin_garantie" class="form-control" placeholder="Entrer le date">
                  </div> 
                  <div class="form-group">
                    <label>Date de vie estim??</label>
                    <input type="Date" required name="date_vie_estime" class="form-control" placeholder="Entrer le date">
                  </div>
                  <div class="form-group">
                    <label>Manuel maintenance</label>
                    <input type="text" required name="manuel_maintenance" class="form-control" placeholder="comenter">
                  </div>
                  <div class="form-group">
                    <label>Quantit?? de stock</label>
                    <input type="text" name="agent" class="form-control" placeholder="Entrer agent">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success" >Ajouter un materiel</button>
                  <a href="{{route('adminShowMateriels')}}" class="btn btn-secondary">Annuler</a>
                </div>
                
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


 
  </div>
  <!-- /.content-wrapper -->

  




  @include ('footer')
  @include ('tableFooter')

<script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>

<script>

var uploadField = document.getElementById("lienNote");
uploadField.onchange = function() {
    if(this.files[0].size > 30500000){
       alert("La taille maximale autoris??e est 30 Mo !");
       this.value = "";
    };
};


$(function () {
 
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      name: {
        required: true
      },
    },
    messages: {
      name: {
        required: "Please enter a name"
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
  
