
  @include ('header')
@include ('tableHeader')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Composant de materiel</h1>
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

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <a href="{{route('adminAddMateriel')}}" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i> Ajouter un materiel </a>
                  
              </div>
               
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
       <thead>           
      <tr>
        <th>id</th>
        <th>id_scat</th>
        <th>nom</th>
        <th>Catégories</th>
        <th>marque</th>
        <th>etat</th>
        <th>date_achat</th>
        <th>date_fin_garantie</th>
        <th>date_vie_estimé</th>
        <th>manuel_maintenance</th>   
         <th>Quantité de stock</th>
</tr>
</thead>
<tbody>
       @foreach ($materiels as $materiel)
      <tr> 
      <td>{{$materiel->id}}</td>
         <td>{{$materiel->id_scat}}</td>
         <td>{{$materiel->nom}}</td>
         <td><a href="{{route('adminShowMateriel',$materiel->categorie_id)}}">@if (isset($materiel->categorie)) {{$materiel->categorie->nom}} @endif</a></td>
         <td>{{$materiel->marque}}</td>
        <td>{{$materiel->etat}}</td>
        <td>{{$materiel->date_achat}}</td>
        <td>{{$materiel->date_fin_garantie }}</td>
        <td>{{$materiel->date__vie_estimé}}</td>
        <td>{{$materiel->manuel_maintenance}}</td>  
        <td>{{$materiel->quantite_stock}}</td>
      <td>
                       <div class="btn-group">
                      <button type="button" class="btn btn-primary">actions</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only"> toggle dropdown</span>
                       </button> 
                       <div class:="dropdown-menu" role="menu">
                        <a href="{{route('adminShowMateriel',$materiel->id)}}" class="droptown-item" > Détails <i class="fas fa-add"></i> </a>
                        <a href="{{route('adminShowMateriels_composant',$materiel->id)}}" class="droptown-item"> composant <i class="fas fa-add"></i> </a>
                        <a href= "{{route('adminEditMateriel',$materiel->id)}}"class="droptown-item"> Editer <i class="fas fa-add"></i> </a>
                        <a href="{{route('adminDeleteMateriel',$materiel->id)}}" class="droptown-item"> Supprimer <i class="fas fa-add"></i> </a>
                        <a href="{{route('adminReserverMateriel',$materiel->id)}}" class="droptown-item"> Réserver <i class="fas fa-add"> </i> </a>
       </div>
       </div>
                      </td>
</tr>
       @endforeach
         
       </tbody>
                  <tfoot>
                  <tr>
        <th>id</th>
        <th>id_scat</th>
        <th>nom</th>
        <th>Catégories</th>
        <th>marque</th>
        <th>etat</th>
        <th>date_achat</th>
        <th>date_fin_garantie</th>
        <th>date_vie_estimé</th>
        <th>manuel_maintenance</th>   
        <th>Quantité de stock</th>
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
