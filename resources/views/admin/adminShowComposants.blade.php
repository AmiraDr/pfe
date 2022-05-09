@include ('header')
@include ('tableHeader')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Composants</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('adminShowComposants')}}">Composants</a></li>
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
                  <a href="{{route('adminAddComposant')}}" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i> Ajouter un Composant </a>
                  <a href="#" class="BtnFiltrer btn-sm btn btn-primary"> <i class="fas fa-filter"></i> Filtrer</a>
                  <a href="#" class="BtnExporter btn-sm btn btn-primary"> <i class="fas fa-file-export"></i> Exporter</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Materiel_ID</th>
                    <th>Manuel Maintenance</th>
                    <th>Created_id</th>          
                    <th>Updated_id</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($composants as $composant)
                    <tr>
                      <td>{{$composant->id}}</td>
                      <td>{{$composant->materiel_id}}</td>
                      <td>{{$composant->manuel_maintenance}}</td>
                      <td>{{$composant->created_id}}</td>
                      <td>{{$composant->updated_id}}</td>
                      <td>@if (isset($composant->categorie)) {{$composant->categorie->nom}} @endif</td>
                      <td>
                        <a href="{{route('adminShowComposant',$composant->id)}}" class="btn btn-info btn-sm"> Détails <i class="fas fa-add"></i> </a>
                        <a href="{{route('adminEditComposant',$composant->id)}}" class="btn btn-warning btn-sm"> Editer <i class="fas fa-add"></i> </a>
                        <a href="{{route('adminDeleteComposant',$composant->id)}}" class="btn btn-danger btn-sm"> Supprimer <i class="fas fa-add"></i> </a>
                      </td>
                    </tr>
                    @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>Materiel_ID</th>
                    <th>Manuel Maintenance</th>
                    <th>Created_id</th>          
                    <th>Updated_id</th>
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
