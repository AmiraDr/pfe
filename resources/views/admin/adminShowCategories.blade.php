@include ('header')
@include ('tableHeader')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Catégories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('adminShowMateriels')}}">Catégories</a></li>
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
                  <a href="{{route('adminAddMateriel')}}" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i> Ajouter un Materiel </a>
                  <a href="#" class="BtnFiltrer btn-sm btn btn-primary"> <i class="fas fa-filter"></i> Filtrer</a>
                  <a href="#" class="BtnExporter btn-sm btn btn-primary"> <i class="fas fa-file-export"></i> Exporter</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
        <th>id</th>
        <th>Nom</th> 
        <th>Nombre Materiel</th>  
        <th>action</th>    
</tr>
                  </thead>
                  <tbody>
                  @foreach ($categories as $categorie)
         <tr>
         <td>{{$categorie->id}}</td>
         <td>{{$categorie->nom}}</td>
         <td>{{$categorie->nombre_materiel}}</td>
         <td>{{$categorie->actions}}</td>
         <td> @if (isset($categorie->materiels)) {{$categorie->materiel->count()}} @endif </td>
         <td>
          <a href="{{route('adminShowMaterielCategorie',$categorie->id)}}" class="btn btn-info btn-sm"> Materiels <i class="fas fa-add"></i> </a>
          <a href="{{route('adminEditCategorie',$categorie->id)}}" class="btn btn-warning btn-sm"> Editer <i class="fas fa-add"></i> </a>
          <a href="{{route('adminDeleteCategorie',$categorie->id)}}" class="btn btn-danger btn-sm"> Supprimer <i class="fas fa-add"></i> </a>
                      </td>
                      </tr>
                    @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Categorie</th>
                    <th>Prix</th>
                    <th>Actions</th>
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
