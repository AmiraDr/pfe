@include ('header')
@include ('tableHeader')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mettre à jour un Maintenance</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('adminShowMaintenances')}}">Maintenances</a></li>
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
                <h3 class="card-title">Mettre à jour un Maintenance</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{route('adminEditMaintenancePost')}}">
                @csrf
                <input type="hidden" name="id" value="{{$maintenance->id}}" />
                <div class="card-body">
                  
                  
                  <div class="form-group">
                    <label>Categories</label>
                    <select name="categorie_id" class="form-control">
                      @foreach ($categories as $categorie)
                        <option value="{{$categorie->id}}" @if ($categorie->id==$maintenance->categorie_id) selected @endif >
                          {{$categorie->nom}}
                        </option>
                      @endforeach
                    </select>
                  </div>


                  <div class="form-group">
                    <label>Materiel_id</label>
                    <input type="text" value="{{$maintenance->materiel_id}}" required name="materiel_id" class="form-control" placeholder="Entrer le nom">
                  </div>
                  
                  <div class="form-group">
                    <label>Agent_id</label>
                    <input type="text" value="{{$maintenance->Agent_id}}" required name="Agent_id" class="form-control" placeholder="Entrer le Agent_id">
                  </div>
                  
                  <div class="form-group">
                    <label>Maintenance</label>
                    <input type="text" value="{{$maintenance->Maintenance}}" required name="Maintenance" class="form-control" placeholder="Entrer le Maintenance">
                  </div>

                  <div class="form-group">
                    <label>Facture</label>
                    <input type="text" value="{{$maintenance->facture}}" required name="facture" class="form-control" placeholder="Entrer le facture">
                  </div>

                  
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" value="{{$maintenance->description}}" required name="description" class="form-control" placeholder="Entrer la description">
                  </div>
                  
                  <div class="form-group">
                    <label>Frais de maintenance</label>
                    <input type="text" value="{{$maintenance->prix}}" required name="prix" class="form-control" placeholder="Entrer le prix">
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Mettre à jour</button>
                  <a href="{{route('adminShowMaintenances')}}" class="btn btn-secondary">Annuler</a>
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
  
