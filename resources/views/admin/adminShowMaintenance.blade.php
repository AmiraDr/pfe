@include ('header')
@include ('tableHeader')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Détail du maintenance</h1>
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

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <a href="{{route('adminShowMaintenances')}}" class="btn btn-secondary btn-sm"> Retour <i class="fas fa-add"></i> </a>
                  <a href="{{route('adminEditMaintenance',$maintenance->id)}}" class="btn btn-warning btn-sm"> Editer <i class="fas fa-add"></i> </a>
                  <a href="{{route('adminDeleteMaintenance',$maintenance->id)}}" class="btn btn-danger btn-sm"> Supprimer <i class="fas fa-add"></i> </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  
                  <tr>
                    <th>ID</th>
                    <td>{{$maintenance->id}}</td>
                  </tr>

                  <tr>
                    <th>Materiel_id</th>
                    <td>{{$maintenance->materiel_id}}</td>
                  </tr>
                  <tr>
                    <th>Agent_id</th>
                    <td>{{$maintenance->agent_id}</td>
                  </tr>

                  <tr>
                    <th>Maintenance</th>
                    <td>{{$maintenance->maintenance}}</td>
                  </tr>
                  <tr>
                    <th>Facture</th>
                    <td>{{$maintenance->facture}}</td>
                  </tr>
                  <tr>
                    <th>Frais de maintenance</th>
                    <td>{{$maintenance->prix }}</td>
                  </tr>
                  <tr>
                    <th>Description</th>
                    <td>{{$maintenance->description}}</td>
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
