@include ('header')
@include ('tableHeader')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Réserver votre matériels</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('agentShowReservations')}}">Reservations</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <a href="{{route('agentShowReservations')}}" class="btn btn-secondary btn-sm"> Retour <i class="fas fa-add"></i> </a>
                  <a href="{{route('agentEditReservation',$Reservation->id)}}" class="btn btn-warning btn-sm"> Editer <i class="fas fa-add"></i> </a>
                  <a href="{{route('agentDeleteReservation',$Reservation->id)}}" class="btn btn-danger btn-sm"> Supprimer <i class="fas fa-add"></i> </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  
                  <tr>
                    <th>ID</th>
                    <td>{{$reservation->id}}</td>
                  </tr>

                  <tr>
                    <th>Employée ID</th>
                    <td>{{$reservationt->employee_ID}}</td>
                  </tr>

                  <tr>
                    <th>Remarque</th>
                    <td>{{$reservation->remarque}}</td>
                  </tr>

                  <tr>
                    <th>Date de début de réservation</th>
                    <td>{{$reservation->date_debut_reservation}}</td>
                  </tr>
                  <tr>
                    <th>Date de fin de réservation</th>
                    <td>{{$reservation->date_fin_reservation}}</td>
                  </tr>
                  <tr>
                    <th> Catégorie ID</th>
                    <td>{{$reservation->categorie_id}}</td>
                  </tr>
                  <tr>
                    <th>Categorie</th>
                    <td>@if (isset($reservation->categorie)) {{$reservation->categorie->nom}} @endif</td>
                  </tr>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>


 
  </div>
  <!-- /.content-wrapper -->

  



  @include ('footer')
  @include ('tableFooter')
