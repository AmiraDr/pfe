@include ('header')
@include ('tableHeader')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ajouter un Reservation</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('adminShowReservations')}}">Reservations</a></li>
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
                <h3 class="card-title">Ajouter un Reservation</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{route('adminAddReservationPost')}}">
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
                    <label>ID</label>
                    <input type="text" required name="id" class="form-control" placeholder="id">
                  </div>
                  
                  <div class="form-group">
                    <label>employee-id</label>
                    <input type="text" required name="employee_id" class="form-control" placeholder="employee_id">
                  </div>
                  <div class="form-group">
                    <label>Remarque</label>
                    <input type="text" required name="remarque" class="form-control" placeholder="remarque">
                  </div>
                  <div class="form-group">
                    <label>Date début de réservation</label>
                    <input type="Date" required name="date_debut_reservation" class="form-control" placeholder="date_debut_reservation">
                  </div>
                  <div class="form-group">
                    <label>Date fin de réservation</label>
                    <input type="Date" required name="date_fin_reservation" class="form-control" placeholder="date_fin_reservation">
                  </div>
                 
                  <div class="form-group">
                    <label> cayégorie ID</label>
                    <input type="text" required name="categorie_id" class="form-control" placeholder="categorie_id">
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Ajouter</button>
                  <a href="{{route('adminShowReservations')}}" class="btn btn-secondary">Annuler</a>
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
  
