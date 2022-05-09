@include ('header')
@include ('tableHeader')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Maintenances</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('agentShowMaintenances')}}">Maintenances</a></li>
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
                  <a href="{{route('agentAddMaintenance')}}" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i> Ajouter un Maintenance </a>
                  <a href="#" class="BtnFiltrer btn-sm btn btn-primary"> <i class="fas fa-filter"></i> Filtrer</a>
                  <a href="#" class="BtnExporter btn-sm btn btn-primary"> <i class="fas fa-file-export"></i> Exporter</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Materiel_id</th>
                    <th>Agent_id</th>
                    <th>Maintenance</th>
                    <th>Facture</th>
                    <th>Frais de maintenance</th>
                    <th>Description</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($maintenances as $maintenance)
                    <tr>
                    <td>{{$maintenance->id}}</td>
                    <td>{{$maintenance->materiel_id}}</td>
                    <td>{{$maintenance->agent_id}}</td>
                    <td>{{$maintenance->maintenance}}</td>
                    <td>{{$maintenance->facture}}</td>
                    <td>{{$maintenance->description}}</td>>
                      <td>{{$maintenance->prix}}</td> 
</tr>

                      <td>
                        <a href="{{route('agentShowMaintenance',$maintenance->id)}}" class="btn btn-info btn-sm"> Détails <i class="fas fa-add"></i> </a>
                        <a href="{{route('agentEditMaintenance',$maintenance->id)}}" class="btn btn-warning btn-sm"> Editer <i class="fas fa-add"></i> </a>
                        <a href="{{route('agentDeleteMaintenance',$maintenance->id)}}" class="btn btn-danger btn-sm"> Supprimer <i class="fas fa-add"></i> </a>
                      </td>
                    </tr>
                    @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>Materiel_id</th>
                    <th>Agent_id</th>
                    <th>Maintenance</th>
                    <th>Facture</th>
                    <th>Frais de maintenance</th>
                    <th>Description</th>
                  </tr>
                  </tfoot>
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
