@include ('header')
@include ('tableHeader')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Détail du Materiel</h1>
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
                  <a href="{{route('adminShowMateriels')}}" class="btn btn-secondary btn-sm"> Retour <i class="fas fa-add"></i> </a>
                  <a href="{{route('adminEditMateriel',$materiel->id)}}" class="btn btn-warning btn-sm"> Editer <i class="fas fa-add"></i> </a>
                  <a href="{{route('adminDeleteMateriel',$materiel->id)}}" class="btn btn-danger btn-sm"> Supprimer <i class="fas fa-add"></i> </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                     
                  <tr>
                    <th>ID </th>
                    <td>{{$materiel->id}}</td>
                  </tr>
                  <tr>
                    <th>ID scat</th>
                    <td>{{$materiel->id_scat}}</td>
                  </tr>

                  <tr>
                    <th>Nom</th>
                    <td>{{$materiel->nom}}</td>
                  </tr>

                  <tr>
                    <th>Categorie</th>
                    <td>@if (isset($materiel->categorie)) {{$materiel->categorie->nom}} @endif</td>
                  </tr>
                  <tr>
                    <th>Marque</th>
                    <td>{{$materiel->marque}}</td>
                  </tr>
                  <tr>
                    <th>Etat</th>
                    <td>{{$materiel->etat}</td>
                  </tr>
                  <tr>
                    <th>Date d'achat</th>
                    <td>{{$materiel->date_achat}}</td>
                  </tr>
                  <tr>
                    <th>Date fin de garantie/th>
                    <td>{{$materiel->date_fin_garantie}}</td>
                  </tr>
                  <tr>
                    <th>Date de vie estimé</th>
                    <td>{{$materiel->date_vie_estime}}</td>
                  </tr>

                  <tr>
                    <th>Manuel Maintenance</th>
                    <td>{{$materiel->manuel_maintenance}}</td>
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
