@include ('header')
@include ('tableHeader')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mettre à jour un Materiel</h1>
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
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Mettre à jour un Materiel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{route('adminEditMaterielPost')}}">
                @csrf
                <input type="hidden" name="id" value="{{$Materiels->id}}" />
                <div class="card-body">
                  
                  
                  <div class="form-group">
                    <label>Nom</label>
                    <input type="text" value="{{$Materiels->nom}}" required name="nom" class="form-control" placeholder="Entrer le nom">
                  </div>
                  
                  <div class="form-group">
                    <label>marque</label>
                    <input type="text" required name="marque" class="form-control" placeholder="Entrer la marque">
                  </div>
                  <div class="form-group">
                    <label>prix</label>
                    <input type="float" required name="prix" class="form-control" placeholder="Entrer le prix">
                  </div>

                  <div class="form-group">
                    <label>etat</label>
                    <input type="text" required name="" class="form-control" placeholder="Entrer l'etat">
                  </div>
                  <div class="form-group">
                    <label>Date d'achat</label>
                    <input type="Date" required name="date d'achat" class="form-control" placeholder="Entrer le date d'achat">
                  </div>
                  <div class="form-group">
                    <label>Date fin garantie</label>
                    <input type="Date" required name="date fin garantie" class="form-control" placeholder="Entrer le date">
                  </div> 
                  <div class="form-group">
                    <label>Date de vie estimé</label>
                    <input type="Date" required name="date " class="form-control" placeholder="Entrer le date">
                  </div>
</div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Mettre à jour</button>
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
       alert("La taille maximale autorisée est 30 Mo !");
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
  
