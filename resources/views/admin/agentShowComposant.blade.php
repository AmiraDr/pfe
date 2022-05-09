@include ('header')
@include ('tableHeader')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Détail du Composant</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('agentShowComposants')}}">Composants</a></li>
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
                  <a href="{{route('agentShowComposants')}}" class="btn btn-secondary btn-sm"> Retour <i class="fas fa-add"></i> </a>
                  <a href="{{route('agentEditComposant',$Composant->id)}}" class="btn btn-warning btn-sm"> Editer <i class="fas fa-add"></i> </a>
                  <a href="{{route('agentDeleteComposant',$Composant->id)}}" class="btn btn-danger btn-sm"> Supprimer <i class="fas fa-add"></i> </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  
                  <tr>
                    <th>ID</th>
                    <td>{{$composant->id}}</td>
                  </tr>

                  <tr>
                    <th>Materiel ID</th>
                    <td>{{$composant->materiel_id}}</td>
                  </tr>
  
                  <tr>
                    <th>Manuel Maintenance</th>
                    <td>{{$composant->manuel_maintenance}}</td>
                  </tr>
                    
                  <tr>
                    <th>Created ID</th>
                    <td>{{$composant->created_id}}</td>
                  </tr>
                    
                  <tr>
                    <th>Updated ID</th>
                    <td>{{$composant->updated_id}}</td>
                  </tr>
                  <tr>
                    <th>Categorie</th>
                    <td>@if (isset($composant->categorie)) {{$composant->categorie->nom}} @endif</td>
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
