<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';


// Sans Auth
Route::get('/contact', 'App\Http\Controllers\WelcomeController@contact')
     ->name('contact');

Route::get('/', 'App\Http\Controllers\WelcomeController@welcome')
     ->name('welcome');
    


//auth route  
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/alerts/{type}', 'App\Http\Controllers\DashboardController@alerts')->name('alerts');
    Route::get('/goAlert/{id}', 'App\Http\Controllers\DashboardController@goAlert')->name('goAlert');
    Route::get('/profile', 'App\Http\Controllers\DashboardController@profile')->name('profile');
    Route::post('/profilePost', 'App\Http\Controllers\DashboardController@profilePost')->name('profilePost');
    Route::post('/addSecurites', 'App\Http\Controllers\SecuriteController@addSecurites')->name('addSecurites');
    Route::get('/posteclients/{projet_id}/{user_id}', 'App\Http\Controllers\PointageController@posteclients')->name('posteclients');
    Route::get('/note/{file}', 'App\Http\Controllers\DashboardController@gofile')->name('gofile');
});



// for Admin
Route::group(['middleware' => ['auth', 'role:admin']], function() { 

//Securite
    Route::get('/admin/securites', 'App\Http\Controllers\SecurityController@adminShowSecurites')->name('adminShowSecurites');
    Route::get('/admin/editSecurite/{id}', 'App\Http\Controllers\SecurityController@adminEditSecurite')->name('adminEditSecurite');
    Route::post('/admin/editSecuritePost', 'App\Http\Controllers\SecurityController@adminEditSecuritePost')->name('adminEditSecuritePost');
    Route::get('/admin/scheduleDateContrat', 'App\Http\Controllers\SecurityController@schedule')->name('scheduleDateContrat');

//Users
    Route::get('/admin/users', 'App\Http\Controllers\AdminUserController@adminShowUsers')->name('adminShowUsers');
    Route::get('/admin/user/{id}', 'App\Http\Controllers\AdminUserController@adminShowUser')->name('adminShowUser');
    Route::get('/admin/adminAddUser', 'App\Http\Controllers\AdminUserController@adminAddUser')->name('adminAddUser');
    Route::POST('/admin/adminAddUserPost', 'App\Http\Controllers\AdminUserController@adminAddUserPost')->name('adminAddUserPost');
    Route::get('/admin/adminEditUser/{id}', 'App\Http\Controllers\AdminUserController@adminEditUser')->name('adminEditUser');
    Route::POST('/admin/adminEditUserPost', 'App\Http\Controllers\AdminUserController@adminEditUserPost')->name('adminEditUserPost');
    //Route::get('/admin/adminDeleteUser/{id}', 'App\Http\Controllers\AdminUserController@adminDeleteUser')->name('adminDeleteUser');
    //Route::POST('/admin/adminDeleteUserPost', 'App\Http\Controllers\AdminUserController@adminDeleteUserPost')->name('adminDeleteUserPost');

//Roles    
    Route::get('/admin/roles', 'App\Http\Controllers\AdminUserController@adminShowRoles')->name('adminShowRoles');
    Route::get('/admin/adminAddRole', 'App\Http\Controllers\AdminUserController@adminAddRole')->name('adminAddRole');
    Route::POST('/admin/adminAddRolePost', 'App\Http\Controllers\AdminUserController@adminAddRolePost')->name('adminAddRolePost');
    Route::get('/admin/adminEditRole/{id}', 'App\Http\Controllers\AdminUserController@adminEditRole')->name('adminEditRole');
    Route::POST('/admin/adminEditRolePost', 'App\Http\Controllers\AdminUserController@adminEditRolePost')->name('adminEditRolePost');
    Route::get('/admin/adminDeleteRole/{id}', 'App\Http\Controllers\AdminUserController@adminDeleteRole')->name('adminDeleteRole');
    Route::POST('/admin/adminDeleteRolePost', 'App\Http\Controllers\AdminUserController@adminDeleteRolePost')->name('adminDeleteRolePost');
    
//Permission
    Route::get('/admin/permissions', 'App\Http\Controllers\AdminUserController@adminShowPermissions')->name('adminShowPermissions');
    Route::get('/admin/adminAddPermission', 'App\Http\Controllers\AdminUserController@adminAddPermission')->name('adminAddPermission');
    Route::POST('/admin/adminAddPermissionPost', 'App\Http\Controllers\AdminUserController@adminAddPermissionPost')->name('adminAddPermissionPost');
    Route::get('/admin/adminEditPermission/{id}', 'App\Http\Controllers\AdminUserController@adminEditPermission')->name('adminEditPermission');
    Route::POST('/admin/adminEditPermissionPost', 'App\Http\Controllers\AdminUserController@adminEditPermissionPost')->name('adminEditPermissionPost');
    Route::get('/admin/adminDeletePermission/{id}', 'App\Http\Controllers\AdminUserController@adminDeletePermission')->name('adminDeletePermission');
    Route::POST('/admin/adminDeletePermissionPost', 'App\Http\Controllers\AdminUserController@adminDeletePermissionPost')->name('adminDeletePermissionPost');

  //CRUD Notes
    Route::get('/admin/notes', 'App\Http\Controllers\ConfigurationController@adminShowNotes')->name('adminShowNotes');
    Route::get('/admin/note/{id}', 'App\Http\Controllers\ConfigurationController@adminShowNote')->name('adminShowNote');
    Route::get('/admin/adminAddNote', 'App\Http\Controllers\ConfigurationController@adminAddNote')->name('adminAddNote');
    Route::POST('/admin/adminAddNotePost', 'App\Http\Controllers\ConfigurationController@adminAddNotePost')->name('adminAddNotePost');
    Route::get('/admin/adminEditNote/{id}', 'App\Http\Controllers\ConfigurationController@adminEditNote')->name('adminEditNote');
    Route::POST('/admin/adminEditNotePost', 'App\Http\Controllers\ConfigurationController@adminEditNotePost')->name('adminEditNotePost');
    Route::get('/admin/adminDeleteNote/{id}', 'App\Http\Controllers\ConfigurationController@adminDeleteNote')->name('adminDeleteNote');
    Route::POST('/admin/adminDeleteNotePost', 'App\Http\Controllers\ConfigurationController@adminDeleteNotePost')->name('adminDeleteNotePost');

//CRUD Produits
    //Afficher un ou tous les produits
    Route::get('/admin/produits','App\Http\Controllers\ProduitController@adminShowProduits')->name('adminShowProduits');
    Route::get('/admin/produit/{id}','App\Http\Controllers\ProduitController@adminShowProduit')->name('adminShowProduit');
    
    Route::get('/admin/adminAddProduit','App\Http\Controllers\ProduitController@adminAddProduit')->name('adminAddProduit');
    Route::Post('/admin/adminAddProduitPost','App\Http\Controllers\ProduitController@adminAddProduitPost')->name('adminAddProduitPost');
   
    Route::get('/admin/adminEditProduit/{id}','App\Http\Controllers\ProduitController@adminEditProduit')->name('adminEditProduit');
    Route::Post('/admin/adminEditProduitPost','App\Http\Controllers\ProduitController@adminEditProduitPost')->name('adminEditProduitPost');
   
    Route::get('/admin/adminDeleteProduit/{id}','App\Http\Controllers\ProduitController@adminDeleteProduit')->name('adminDeleteProduit');
    Route::Post('/admin/adminDeleteProduitPost','App\Http\Controllers\ProduitController@adminDeleteProduitPost')->name('adminDeleteProduitPost');
//CRUD Materiels
    //Afficher un ou tous les materiels
    Route::get('/admin/Materiels','App\Http\Controllers\MaterielsController@adminShowMateriels')->name('adminShowMateriels');

     Route::get('/admin/Materiels/{composant_id}','App\Http\Controllers\MaterielsController@adminShowMateriels_composant')->name('adminShowMateriels_composant');
    
     Route::get('/admin/Materiel/{id}','App\Http\Controllers\MaterielsController@adminShowMateriel')->name('adminShowMateriel');
    //Ajouter un ou des materiels 
    Route::get('/admin/adminAddMateriel','App\Http\Controllers\MaterielsController@adminAddMateriel')->name('adminAddMateriel');
    Route::Post('/admin/adminAddMaterielPost','App\Http\Controllers\MaterielsController@adminAddMaterielPost')->name('adminAddMaterielPost');
   //Editer 
   Route::get('/admin/adminEditMateriel/{id}','App\Http\Controllers\MaterielsController@adminEditMateriel')->name('adminEditMateriel');
   Route::Post('/admin/adminEditMaterielPost','App\Http\Controllers\MaterielsController@adminEditMaterielPost')->name('adminEditMaterielPost');
   //Delet 
   Route::get('/admin/adminDeleteMateriel/{id}','App\Http\Controllers\MaterielsController@adminDeleteMateriel')->name('adminDeleteMateriel');
   Route::Post('/admin/adminDeleteMaterieltPost','App\Http\Controllers\MaterielsController@adminDeleteMaterielPost')->name('adminDeleteCategoriePost');
   //Réserver un ou plusieurs materiels 
   Route::get('/admin/adminReserverMateriel','App\Http\Controllers\MaterielsController@adminReserverMateriel')->name('adminReserverMateriel');
   Route::Post('/admin/adminReserverMaterielPost','App\Http\Controllers\MaterielsController@adminReserverMaterielPost')->name('adminReserverMaterielPost');
    
   //CRUD Categories
    //Afficher un ou tous les Categories
    Route::get('/admin/Categories','App\Http\Controllers\CategorieController@adminShowCategories')->name('adminShowCategories');
    Route::get('/admin/adminShowMaterielCategorie/{id}','App\Http\Controllers\MaterielsController@adminShowMateriel')->name('adminShowMateriel');
    //Ajouter un ou des Categories 
    Route::get('/admin/adminAddCategorie','App\Http\Controllers\CategorieController@adminAddCategorie')->name('adminAddCategorie');
    Route::Post('/admin/adminAddCategoriePost','App\Http\Controllers\CategorieController@adminAddCategoriePost')->name('adminAddCategoriePost');
   //Editer 
   Route::get('/admin/adminEditCategorie/{id}','App\Http\Controllers\CategorieController@adminEditCategorie')->name('adminEditCategorie');
   Route::Post('/admin/adminEditCategoriePost','App\Http\Controllers\CategorieController@adminEditCategoriePost')->name('adminEditCategoriePost');
   //Delet 
   Route::get('/admin/adminDeleteCategorie/{id}','App\Http\Controllers\CategorieController@adminDeleteCategorie')->name('adminDeleteCategorie');
   Route::Post('/admin/adminDeleteCategorietPost','App\Http\Controllers\CategorieController@adminDeleteCategoriePost')->name('adminDeleteCategoriePost');
   
   //CRUD Maintenances

   //Afficher un ou tous les maintenances
   Route::get('/admin/Maintenances','App\Http\Controllers\MaintenanceController@adminShowMaintenances')->name('adminShowMaintenances');
   Route::get('/admin/Maintenance/{id}','App\Http\Controllers\MaintenanceController@adminShowMaintenance')->name('adminShowMaintenance');
   
   Route::get('/admin/adminAddMaintenance','App\Http\Controllers\MaintenanceController@adminAddMaintenance')->name('adminAddMaintenance');
   Route::Post('/admin/adminAddMaintenancePost','App\Http\Controllers\MaintenanceController@adminAddMaintenancePost')->name('adminAddMaintenancePost');
  
   Route::get('/admin/adminEditMaintenance/{id}','App\Http\Controllers\MaintenanceController@adminEditMaintenance')->name('adminEditMaintenance');
   Route::Post('/admin/adminEditMaintenancePost','App\Http\Controllers\MaintenanceController@adminEditMaintenancePost')->name('adminEditMaintenancePost');
  
   Route::get('/admin/adminDeleteMaintenance/{id}','App\Http\Controllers\MaintenanceController@adminDeleteMaintenance')->name('adminDeleteMaintenance');
   Route::Post('/admin/adminDeleteMaintenancePost','App\Http\Controllers\MaintenanceController@adminDeleteMaintenancePost')->name('adminDeleteMaintenancePost');

    //CRUD Reservations
    //Afficher un ou tous les Reservations
    Route::get('/admin/Reservations','App\Http\Controllers\ReservationController@adminShowReservations')->name('adminShowReservations');
    Route::get('/admin/Reservation/{id}','App\Http\Controllers\ReservationController@adminShowReservation')->name('adminShowReservation');
    
    Route::get('/admin/adminAddReservation','App\Http\Controllers\ReservationController@adminAddReservation')->name('adminAddReservation');
    Route::Post('/admin/adminAddReservationPost','App\Http\Controllers\ReservationController@adminAddReservationPost')->name('adminAddReservationPost');
   
    Route::get('/admin/adminEditReservation/{id}','App\Http\Controllers\ReservationController@adminEditReservation')->name('adminEditReservation');
    Route::Post('/admin/adminEditReservationPost','App\Http\Controllers\ReservationController@adminEditReservationPost')->name('adminEditReservationPost');

    Route::get('/admin/adminDeleteReservation/{id}','App\Http\Controllers\ReservationController@adminDeleteReservation')->name('adminDeleteReservation');
    Route::Post('/admin/adminDeleteReservationPost','App\Http\Controllers\ReservationController@adminDeleteReservationPost')->name('adminDeleteReservationPost');
   
    //CRUD Composants
    //Afficher un ou tous les Composants
    Route::get('/admin/Composants','App\Http\Controllers\ComposantController@adminShowComposants')->name('adminShowComposants');
    Route::get('/admin/Composant/{id}','App\Http\Controllers\ComposantController@adminShowComposant')->name('adminShowComposant');
    
    Route::get('/admin/adminAddComposant','App\Http\Controllers\ComposantController@adminAddComposant')->name('adminAddComposant');
    Route::Post('/admin/adminAddComposantPost','App\Http\Controllers\ComposantController@adminAddComposantPost')->name('adminAddComposantPost');
   
    Route::get('/admin/adminEditComposant/{id}','App\Http\Controllers\ComposantController@adminEditComposant')->name('adminEditComposant');
    Route::Post('/admin/adminEditComposantPost','App\Http\Controllers\ComposantController@adminEditComposantPost')->name('adminEditComposantPost');
});

//for employee
Route::group(['middleware' => ['auth', 'role:user']], function() { 
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('myprofile');
    //Crud materiel
      //Afficher un ou tous les materiels
      Route::get('/user/Materiels','App\Http\Controllers\MaterielsController@userShowMateriels')->name('userShowMateriels');
      Route::get('/user/Materiel/{id}','App\Http\Controllers\MaterielsController@userShowMateriel')->name('userShowMateriel');
      
    //CRUD Reservations
    //Afficher un ou tous les Reservations

      Route::get('/user/Reservations','App\Http\Controllers\ReservationController@userShowReservations')->name('userShowReservations');
      Route::get('/user/Reservation/{id}','App\Http\Controllers\ReservationController@userShowReservation')->name('userShowReservation');
      
      Route::get('/user/userAddReservation','App\Http\Controllers\ReservationController@userAddReservation')->name('userAddReservation');
      Route::Post('/user/userAddReservationPost','App\Http\Controllers\ReservationController@userAddReservationPost')->name('userAddReservationPost');
     
      Route::get('/user/userEditReservation/{id}','App\Http\Controllers\ReservationController@userEditReservation')->name('userEditReservation');
      Route::Post('/user/userEditReservationPost','App\Http\Controllers\ReservationController@userEditReservationPost')->name('userEditReservationPost');
  
      Route::get('/user/userDeleteReservation/{id}','App\Http\Controllers\ReservationController@userDeleteReservation')->name('userDeleteReservation');
      Route::Post('/user/userDeleteReservationPost','App\Http\Controllers\ReservationController@userDeleteReservationPost')->name('userDeleteReservationPost');
     // Agent Matderiel
     Route::group(['middleware' => ['auth', 'role:agent']], function() { 

        //Securite
            Route::get('/agent/securites', 'App\Http\Controllers\SecurityController@agentShowSecurites')->name('agentShowSecurites');
            Route::get('/agent/editSecurite/{id}', 'App\Http\Controllers\SecurityController@agentEditSecurite')->name('agentEditSecurite');
            Route::post('/agent/editSecuritePost', 'App\Http\Controllers\SecurityController@agentEditSecuritePost')->name('agentEditSecuritePost');
            Route::get('/agent/scheduleDateContrat', 'App\Http\Controllers\SecurityController@schedule')->name('scheduleDateContrat');
        
        
            
        //Permission
            Route::get('/agent/permissions', 'App\Http\Controllers\agentUserController@agentShowPermissions')->name('agentShowPermissions');
            Route::get('/agent/agentAddPermission', 'App\Http\Controllers\agentUserController@agentAddPermission')->name('agentAddPermission');
            Route::POST('/agent/agentAddPermissionPost', 'App\Http\Controllers\agentUserController@agentAddPermissionPost')->name('agentAddPermissionPost');
            Route::get('/agent/agentEditPermission/{id}', 'App\Http\Controllers\agentUserController@agentEditPermission')->name('agentEditPermission');
            Route::POST('/agent/agentEditPermissionPost', 'App\Http\Controllers\agentUserController@agentEditPermissionPost')->name('agentEditPermissionPost');
            Route::get('/agent/agentDeletePermission/{id}', 'App\Http\Controllers\agentUserController@agentDeletePermission')->name('agentDeletePermission');
            Route::POST('/agent/agentDeletePermissionPost', 'App\Http\Controllers\agentUserController@agentDeletePermissionPost')->name('agentDeletePermissionPost');
        
          //CRUD Notes
            Route::get('/agent/notes', 'App\Http\Controllers\ConfigurationController@agentShowNotes')->name('agentShowNotes');
            Route::get('/agent/note/{id}', 'App\Http\Controllers\ConfigurationController@agentShowNote')->name('agentShowNote');
            Route::get('/agent/agentAddNote', 'App\Http\Controllers\ConfigurationController@agentAddNote')->name('agentAddNote');
            Route::POST('/agent/agentAddNotePost', 'App\Http\Controllers\ConfigurationController@agentAddNotePost')->name('agentAddNotePost');
            Route::get('/agent/agentEditNote/{id}', 'App\Http\Controllers\ConfigurationController@agentEditNote')->name('agentEditNote');
            Route::POST('/agent/agentEditNotePost', 'App\Http\Controllers\ConfigurationController@agentEditNotePost')->name('agentEditNotePost');
            Route::get('/agent/agentDeleteNote/{id}', 'App\Http\Controllers\ConfigurationController@agentDeleteNote')->name('agentDeleteNote');
            Route::POST('/agent/agentDeleteNotePost', 'App\Http\Controllers\ConfigurationController@agentDeleteNotePost')->name('agentDeleteNotePost');
        
       
        //CRUD Materiels
            //Afficher un ou tous les materiels
            Route::get('/agent/Materiels','App\Http\Controllers\MaterielsController@agentShowMateriels')->name('agentShowMateriels');
        
             Route::get('/agent/Materiels/{composant_id}','App\Http\Controllers\MaterielsController@agentShowMateriels_composant')->name('agentShowMateriels_composant');
            
             Route::get('/agent/Materiel/{id}','App\Http\Controllers\MaterielsController@agentShowMateriel')->name('agentShowMateriel');
            //Ajouter un ou des materiels 
            Route::get('/agent/agentAddMateriel','App\Http\Controllers\MaterielsController@agentAddMateriel')->name('agentAddMateriel');
            Route::Post('/agent/agentAddMaterielPost','App\Http\Controllers\MaterielsController@agentAddMaterielPost')->name('agentAddMaterielPost');
           //Editer 
           Route::get('/agent/agentEditMateriel/{id}','App\Http\Controllers\MaterielsController@agentEditMateriel')->name('agentEditMateriel');
           Route::Post('/agent/agentEditMaterielPost','App\Http\Controllers\MaterielsController@agentEditMaterielPost')->name('agentEditMaterielPost');
           //Delet 
           Route::get('/agent/agentDeleteMateriel/{id}','App\Http\Controllers\MaterielsController@agentDeleteMateriel')->name('agentDeleteMateriel');
           Route::Post('/agent/agentDeleteMaterieltPost','App\Http\Controllers\MaterielsController@agentDeleteMaterielPost')->name('agentDeleteCategoriePost');
           //Réserver un ou plusieurs materiels 
           Route::get('/agent/agentReserverMateriel','App\Http\Controllers\MaterielsController@agentReserverMateriel')->name('agentReserverMateriel');
           Route::Post('/agent/agentReserverMaterielPost','App\Http\Controllers\MaterielsController@agentReserverMaterielPost')->name('agentReserverMaterielPost');
            
           //CRUD Categories
            //Afficher un ou tous les Categories
            Route::get('/agent/Categories','App\Http\Controllers\CategorieController@agentShowCategories')->name('agentShowCategories');
            Route::get('/agent/agentShowMaterielCategorie/{id}','App\Http\Controllers\MaterielsController@agentShowMateriel')->name('agentShowMateriel');
            //Ajouter un ou des Categories 
            Route::get('/agent/agentAddCategorie','App\Http\Controllers\CategorieController@agentAddCategorie')->name('agentAddCategorie');
            Route::Post('/agent/agentAddCategoriePost','App\Http\Controllers\CategorieController@agentAddCategoriePost')->name('agentAddCategoriePost');
           //Editer 
           Route::get('/agent/agentEditCategorie/{id}','App\Http\Controllers\CategorieController@agentEditCategorie')->name('agentEditCategorie');
           Route::Post('/agent/agentEditCategoriePost','App\Http\Controllers\CategorieController@agentEditCategoriePost')->name('agentEditCategoriePost');
           //Delet 
           Route::get('/agent/agentDeleteCategorie/{id}','App\Http\Controllers\CategorieController@agentDeleteCategorie')->name('agentDeleteCategorie');
           Route::Post('/agent/agentDeleteCategorietPost','App\Http\Controllers\CategorieController@agentDeleteCategoriePost')->name('agentDeleteCategoriePost');
           
           //CRUD Maintenances
        
           //Afficher un ou tous les maintenances
           Route::get('/agent/Maintenances','App\Http\Controllers\MaintenanceController@agentShowMaintenances')->name('agentShowMaintenances');
           Route::get('/agent/Maintenance/{id}','App\Http\Controllers\MaintenanceController@agentShowMaintenance')->name('agentShowMaintenance');
           
           Route::get('/agent/agentAddMaintenance','App\Http\Controllers\MaintenanceController@agentAddMaintenance')->name('agentAddMaintenance');
           Route::Post('/agent/agentAddMaintenancePost','App\Http\Controllers\MaintenanceController@agentAddMaintenancePost')->name('agentAddMaintenancePost');
          
           Route::get('/agent/agentEditMaintenance/{id}','App\Http\Controllers\MaintenanceController@agentEditMaintenance')->name('agentEditMaintenance');
           Route::Post('/agent/agentEditMaintenancePost','App\Http\Controllers\MaintenanceController@agentEditMaintenancePost')->name('agentEditMaintenancePost');
          
           Route::get('/agent/agentDeleteMaintenance/{id}','App\Http\Controllers\MaintenanceController@agentDeleteMaintenance')->name('agentDeleteMaintenance');
           Route::Post('/agent/agentDeleteMaintenancePost','App\Http\Controllers\MaintenanceController@agentDeleteMaintenancePost')->name('agentDeleteMaintenancePost');
        
            //CRUD Reservations
            //Afficher un ou tous les Reservations
            Route::get('/agent/Reservations','App\Http\Controllers\ReservationController@agentShowReservations')->name('agentShowReservations');
            Route::get('/agent/Reservation/{id}','App\Http\Controllers\ReservationController@agentShowReservation')->name('agentShowReservation');
            
            Route::get('/agent/agentAddReservation','App\Http\Controllers\ReservationController@agentAddReservation')->name('agentAddReservation');
            Route::Post('/agent/agentAddReservationPost','App\Http\Controllers\ReservationController@agentAddReservationPost')->name('agentAddReservationPost');
           
            Route::get('/agent/agentEditReservation/{id}','App\Http\Controllers\ReservationController@agentEditReservation')->name('agentEditReservation');
            Route::Post('/agent/agentEditReservationPost','App\Http\Controllers\ReservationController@agentEditReservationPost')->name('agentEditReservationPost');
        
            Route::get('/agent/agentDeleteReservation/{id}','App\Http\Controllers\ReservationController@agentDeleteReservation')->name('agentDeleteReservation');
            Route::Post('/agent/agentDeleteReservationPost','App\Http\Controllers\ReservationController@agentDeleteReservationPost')->name('agentDeleteReservationPost');
           
            //CRUD Composants
            //Afficher un ou tous les Composants
            Route::get('/agent/Composants','App\Http\Controllers\ComposantController@agentShowComposants')->name('agentShowComposants');
            Route::get('/agent/Composant/{id}','App\Http\Controllers\ComposantController@agentShowComposant')->name('agentShowComposant');
            
            Route::get('/agent/agentAddComposant','App\Http\Controllers\ComposantController@agentAddComposant')->name('agentAddComposant');
            Route::Post('/agent/agentAddComposantPost','App\Http\Controllers\ComposantController@agentAddComposantPost')->name('agentAddComposantPost');
           
            Route::get('/agent/agentEditComposant/{id}','App\Http\Controllers\ComposantController@agentEditComposant')->name('agentEditComposant');
            Route::Post('/agent/agentEditComposantPost','App\Http\Controllers\ComposantController@agentEditComposantPost')->name('agentEditComposantPost');
        });
        
});
