<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('js/adminlte.js')}}"></script>

<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.25/sb-1.1.0/datatables.min.js"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>


<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/fullcalendar/main.js')}}"></script>


<script>

   


  $(function () {

 //Initialize Select2 Elements

    
     $('.select2').select2()

     //Initialize Select2 Elements
    
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })


    $('.select2bs4Tag').select2({
      theme: 'bootstrap4'
    })


    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": true,
      "pageLength": 50,
      "autoWidth": false,
      "order": [],

       stateSave: true,
       stateDuration: 60 * 10,
   
  

      searchBuilder: {   },
      dom: 'QBlftpi',
      "buttons": [
                    {
                        extend: 'copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                   
                    "colvis"
                ],
      "language": 
                      {
                    "emptyTable": "Aucune donn??e disponible dans le tableau",
                    "lengthMenu": "Afficher _MENU_ ??l??ments",
                    "loadingRecords": "Chargement...",
                    "processing": "Traitement...",
                    "zeroRecords": "Aucun ??l??ment correspondant trouv??",
                    "paginate": {
                        "first": "Premier",
                        "last": "Dernier",
                        "previous": "Pr??c??dent",
                        "next": "Suiv"
                    },
                    "aria": {
                        "sortAscending": ": activer pour trier la colonne par ordre croissant",
                        "sortDescending": ": activer pour trier la colonne par ordre d??croissant"
                    },
                    "select": {
                        "rows": {
                            "_": "%d lignes s??lectionn??es",
                            "1": "1 ligne s??lectionn??e"
                        },
                        "cells": {
                            "1": "1 cellule s??lectionn??e",
                            "_": "%d cellules s??lectionn??es"
                        },
                        "columns": {
                            "1": "1 colonne s??lectionn??e",
                            "_": "%d colonnes s??lectionn??es"
                        }
                    },
                    "autoFill": {
                        "cancel": "Annuler",
                        "fill": "Remplir toutes les cellules avec <i>%d<\/i>",
                        "fillHorizontal": "Remplir les cellules horizontalement",
                        "fillVertical": "Remplir les cellules verticalement"
                    },
                    "searchBuilder": {
                        "conditions": {
                            "date": {
                                "after": "Apr??s le",
                                "before": "Avant le",
                                "between": "Entre",
                                "empty": "Vide",
                                "equals": "Egal ??",
                                "not": "Diff??rent de",
                                "notBetween": "Pas entre",
                                "notEmpty": "Non vide"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vide",
                                "equals": "Egal ??",
                                "gt": "Sup??rieur ??",
                                "gte": "Sup??rieur ou ??gal ??",
                                "lt": "Inf??rieur ??",
                                "lte": "Inf??rieur ou ??gal ??",
                                "not": "Diff??rent de",
                                "notBetween": "Pas entre",
                                "notEmpty": "Non vide"
                            },
                            "string": {
                                "contains": "Contient",
                                "empty": "Vide",
                                "endsWith": "Se termine par",
                                "equals": "Egal ??",
                                "not": "Diff??rent de",
                                "notEmpty": "Non vide",
                                "startsWith": "Commence par"
                            },
                            "array": {
                                "equals": "Egal ??",
                                "empty": "Vide",
                                "contains": "Contient",
                                "not": "Diff??rent de",
                                "notEmpty": "Non vide",
                                "without": "Sans"
                            }
                        },
                        "add": "Ajouter une condition",
                        "button": {
                            "0": "Recherche avanc??e",
                            "_": "Recherche avanc??e (%d)"
                        },
                        "clearAll": "Effacer tout",
                        "condition": "Condition",
                        "data": "Donn??e",
                        "deleteTitle": "Supprimer la r??gle de filtrage",
                        "logicAnd": "Et",
                        "logicOr": "Ou",
                        "title": {
                            "0": "Recherche avanc??e",
                            "_": "Recherche avanc??e (%d)"
                        },
                        "value": "Valeur"
                    },
                    "searchPanes": {
                        "clearMessage": "Effacer tout",
                        "count": "{total}",
                        "title": "Filtres actifs - %d",
                        "collapse": {
                            "0": "Volet de recherche",
                            "_": "Volet de recherche (%d)"
                        },
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Pas de volet de recherche",
                        "loadMessage": "Chargement du volet de recherche..."
                    },
                    "buttons": {
                        "copyKeys": "Appuyer sur ctrl ou u2318 + C pour copier les donn??es du tableau dans votre presse-papier.",
                        "collection": "Collection",
                        "colvis": "Visibilit?? colonnes",
                        "colvisRestore": "R??tablir visibilit??",
                        "copy": "Copier",
                        "copySuccess": {
                            "1": "1 ligne copi??e dans le presse-papier",
                            "_": "%ds lignes copi??es dans le presse-papier"
                        },
                        "copyTitle": "Copier dans le presse-papier",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Afficher toutes les lignes",
                            "_": "Afficher %d lignes"
                        },
                        "pdf": "PDF",
                        "print": "Imprimer"
                    },
                    "decimal": ",",
                    "info": "Affichage de _START_ ?? _END_ sur _TOTAL_ ??l??ments",
                    "infoEmpty": "Affichage de 0 ?? 0 sur 0 ??l??ments",
                    "infoThousands": ".",
                    "search": "Rechercher:",
                    "thousands": ".",
                    "infoFiltered": "(filtr??s depuis un total de _MAX_ ??l??ments)",
                    "datetime": {
                        "previous": "Pr??c??dent",
                        "next": "Suivant",
                        "hours": "Heures",
                        "minutes": "Minutes",
                        "seconds": "Secondes",
                        "unknown": "-",
                        "amPm": [
                            "am",
                            "pm"
                        ]
                    },
                    "editor": {
                        "close": "Fermer",
                        "create": {
                            "button": "Nouveaux",
                            "title": "Cr??er une nouvelle entr??e",
                            "submit": "Envoyer"
                        },
                        "edit": {
                            "button": "Editer",
                            "title": "Editer Entr??e",
                            "submit": "Modifier"
                        },
                        "remove": {
                            "button": "Supprimer",
                            "title": "Supprimer",
                            "submit": "Supprimer"
                        },
                        "error": {
                            "system": "Une erreur syst??me s'est produite"
                        },
                        "multi": {
                            "title": "Valeurs Multiples",
                            "restore": "R??tablir Modification"
                        }
                    }
      }

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    




$('.BtnFiltrer').on('click', function (event) {
            $('.dtsb-searchBuilder').toggle();
});

$('.BtnExporter').on('click', function (event) {
            $('.dt-buttons').toggle();
});



$("#example2").DataTable({
      "responsive": true,
      "lengthChange": true,
      "pageLength": 100,
      "autoWidth": false,
      "order": [],

      stateSave: true,
       stateDuration: 60 * 10,
   
      searchBuilder: {   },
      dom: 'QBlftpi',
      "buttons": [
                     {
                        extend: 'copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                   
                    "colvis"

                    ],
      "language": 
                      {
                    "emptyTable": "Aucune donn??e disponible dans le tableau",
                    "lengthMenu": "Afficher _MENU_ ??l??ments",
                    "loadingRecords": "Chargement...",
                    "processing": "Traitement...",
                    "zeroRecords": "Aucun ??l??ment correspondant trouv??",
                    "paginate": {
                        "first": "Premier",
                        "last": "Dernier",
                        "previous": "Pr??c??dent",
                        "next": "Suiv"
                    },
                    "aria": {
                        "sortAscending": ": activer pour trier la colonne par ordre croissant",
                        "sortDescending": ": activer pour trier la colonne par ordre d??croissant"
                    },
                    "select": {
                        "rows": {
                            "_": "%d lignes s??lectionn??es",
                            "1": "1 ligne s??lectionn??e"
                        },
                        "cells": {
                            "1": "1 cellule s??lectionn??e",
                            "_": "%d cellules s??lectionn??es"
                        },
                        "columns": {
                            "1": "1 colonne s??lectionn??e",
                            "_": "%d colonnes s??lectionn??es"
                        }
                    },
                    "autoFill": {
                        "cancel": "Annuler",
                        "fill": "Remplir toutes les cellules avec <i>%d<\/i>",
                        "fillHorizontal": "Remplir les cellules horizontalement",
                        "fillVertical": "Remplir les cellules verticalement"
                    },
                    "searchBuilder": {
                        "conditions": {
                            "date": {
                                "after": "Apr??s le",
                                "before": "Avant le",
                                "between": "Entre",
                                "empty": "Vide",
                                "equals": "Egal ??",
                                "not": "Diff??rent de",
                                "notBetween": "Pas entre",
                                "notEmpty": "Non vide"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vide",
                                "equals": "Egal ??",
                                "gt": "Sup??rieur ??",
                                "gte": "Sup??rieur ou ??gal ??",
                                "lt": "Inf??rieur ??",
                                "lte": "Inf??rieur ou ??gal ??",
                                "not": "Diff??rent de",
                                "notBetween": "Pas entre",
                                "notEmpty": "Non vide"
                            },
                            "string": {
                                "contains": "Contient",
                                "empty": "Vide",
                                "endsWith": "Se termine par",
                                "equals": "Egal ??",
                                "not": "Diff??rent de",
                                "notEmpty": "Non vide",
                                "startsWith": "Commence par"
                            },
                            "array": {
                                "equals": "Egal ??",
                                "empty": "Vide",
                                "contains": "Contient",
                                "not": "Diff??rent de",
                                "notEmpty": "Non vide",
                                "without": "Sans"
                            }
                        },
                        "add": "Ajouter une condition",
                        "button": {
                            "0": "Recherche avanc??e",
                            "_": "Recherche avanc??e (%d)"
                        },
                        "clearAll": "Effacer tout",
                        "condition": "Condition",
                        "data": "Donn??e",
                        "deleteTitle": "Supprimer la r??gle de filtrage",
                        "logicAnd": "Et",
                        "logicOr": "Ou",
                        "title": {
                            "0": "Recherche avanc??e",
                            "_": "Recherche avanc??e (%d)"
                        },
                        "value": "Valeur"
                    },
                    "searchPanes": {
                        "clearMessage": "Effacer tout",
                        "count": "{total}",
                        "title": "Filtres actifs - %d",
                        "collapse": {
                            "0": "Volet de recherche",
                            "_": "Volet de recherche (%d)"
                        },
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Pas de volet de recherche",
                        "loadMessage": "Chargement du volet de recherche..."
                    },
                    "buttons": {
                        "copyKeys": "Appuyer sur ctrl ou u2318 + C pour copier les donn??es du tableau dans votre presse-papier.",
                        "collection": "Collection",
                        "colvis": "Visibilit?? colonnes",
                        "colvisRestore": "R??tablir visibilit??",
                        "copy": "Copier",
                        "copySuccess": {
                            "1": "1 ligne copi??e dans le presse-papier",
                            "_": "%ds lignes copi??es dans le presse-papier"
                        },
                        "copyTitle": "Copier dans le presse-papier",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Afficher toutes les lignes",
                            "_": "Afficher %d lignes"
                        },
                        "pdf": "PDF",
                        "print": "Imprimer"
                    },
                    "decimal": ",",
                    "info": "Affichage de _START_ ?? _END_ sur _TOTAL_ ??l??ments",
                    "infoEmpty": "Affichage de 0 ?? 0 sur 0 ??l??ments",
                    "infoThousands": ".",
                    "search": "Rechercher:",
                    "thousands": ".",
                    "infoFiltered": "(filtr??s depuis un total de _MAX_ ??l??ments)",
                    "datetime": {
                        "previous": "Pr??c??dent",
                        "next": "Suivant",
                        "hours": "Heures",
                        "minutes": "Minutes",
                        "seconds": "Secondes",
                        "unknown": "-",
                        "amPm": [
                            "am",
                            "pm"
                        ]
                    },
                    "editor": {
                        "close": "Fermer",
                        "create": {
                            "button": "Nouveaux",
                            "title": "Cr??er une nouvelle entr??e",
                            "submit": "Envoyer"
                        },
                        "edit": {
                            "button": "Editer",
                            "title": "Editer Entr??e",
                            "submit": "Modifier"
                        },
                        "remove": {
                            "button": "Supprimer",
                            "title": "Supprimer",
                            "submit": "Supprimer"
                        },
                        "error": {
                            "system": "Une erreur syst??me s'est produite"
                        },
                        "multi": {
                            "title": "Valeurs Multiples",
                            "restore": "R??tablir Modification"
                        }
                    }
      }

    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    

    $("#example3").DataTable({
      "responsive": true,
      "lengthChange": true,
      "pageLength": 100,
      "autoWidth": false,
      "order": [],

      stateSave: true,
       stateDuration: 60 * 10,
   
      searchBuilder: {   },
      dom: 'QBlftpi',
      "buttons": [
                     {
                        extend: 'copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                   
                    "colvis"

                    ],
      "language": 
                      {
                    "emptyTable": "Aucune donn??e disponible dans le tableau",
                    "lengthMenu": "Afficher _MENU_ ??l??ments",
                    "loadingRecords": "Chargement...",
                    "processing": "Traitement...",
                    "zeroRecords": "Aucun ??l??ment correspondant trouv??",
                    "paginate": {
                        "first": "Premier",
                        "last": "Dernier",
                        "previous": "Pr??c??dent",
                        "next": "Suiv"
                    },
                    "aria": {
                        "sortAscending": ": activer pour trier la colonne par ordre croissant",
                        "sortDescending": ": activer pour trier la colonne par ordre d??croissant"
                    },
                    "select": {
                        "rows": {
                            "_": "%d lignes s??lectionn??es",
                            "1": "1 ligne s??lectionn??e"
                        },
                        "cells": {
                            "1": "1 cellule s??lectionn??e",
                            "_": "%d cellules s??lectionn??es"
                        },
                        "columns": {
                            "1": "1 colonne s??lectionn??e",
                            "_": "%d colonnes s??lectionn??es"
                        }
                    },
                    "autoFill": {
                        "cancel": "Annuler",
                        "fill": "Remplir toutes les cellules avec <i>%d<\/i>",
                        "fillHorizontal": "Remplir les cellules horizontalement",
                        "fillVertical": "Remplir les cellules verticalement"
                    },
                    "searchBuilder": {
                        "conditions": {
                            "date": {
                                "after": "Apr??s le",
                                "before": "Avant le",
                                "between": "Entre",
                                "empty": "Vide",
                                "equals": "Egal ??",
                                "not": "Diff??rent de",
                                "notBetween": "Pas entre",
                                "notEmpty": "Non vide"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vide",
                                "equals": "Egal ??",
                                "gt": "Sup??rieur ??",
                                "gte": "Sup??rieur ou ??gal ??",
                                "lt": "Inf??rieur ??",
                                "lte": "Inf??rieur ou ??gal ??",
                                "not": "Diff??rent de",
                                "notBetween": "Pas entre",
                                "notEmpty": "Non vide"
                            },
                            "string": {
                                "contains": "Contient",
                                "empty": "Vide",
                                "endsWith": "Se termine par",
                                "equals": "Egal ??",
                                "not": "Diff??rent de",
                                "notEmpty": "Non vide",
                                "startsWith": "Commence par"
                            },
                            "array": {
                                "equals": "Egal ??",
                                "empty": "Vide",
                                "contains": "Contient",
                                "not": "Diff??rent de",
                                "notEmpty": "Non vide",
                                "without": "Sans"
                            }
                        },
                        "add": "Ajouter une condition",
                        "button": {
                            "0": "Recherche avanc??e",
                            "_": "Recherche avanc??e (%d)"
                        },
                        "clearAll": "Effacer tout",
                        "condition": "Condition",
                        "data": "Donn??e",
                        "deleteTitle": "Supprimer la r??gle de filtrage",
                        "logicAnd": "Et",
                        "logicOr": "Ou",
                        "title": {
                            "0": "Recherche avanc??e",
                            "_": "Recherche avanc??e (%d)"
                        },
                        "value": "Valeur"
                    },
                    "searchPanes": {
                        "clearMessage": "Effacer tout",
                        "count": "{total}",
                        "title": "Filtres actifs - %d",
                        "collapse": {
                            "0": "Volet de recherche",
                            "_": "Volet de recherche (%d)"
                        },
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Pas de volet de recherche",
                        "loadMessage": "Chargement du volet de recherche..."
                    },
                    "buttons": {
                        "copyKeys": "Appuyer sur ctrl ou u2318 + C pour copier les donn??es du tableau dans votre presse-papier.",
                        "collection": "Collection",
                        "colvis": "Visibilit?? colonnes",
                        "colvisRestore": "R??tablir visibilit??",
                        "copy": "Copier",
                        "copySuccess": {
                            "1": "1 ligne copi??e dans le presse-papier",
                            "_": "%ds lignes copi??es dans le presse-papier"
                        },
                        "copyTitle": "Copier dans le presse-papier",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Afficher toutes les lignes",
                            "_": "Afficher %d lignes"
                        },
                        "pdf": "PDF",
                        "print": "Imprimer"
                    },
                    "decimal": ",",
                    "info": "Affichage de _START_ ?? _END_ sur _TOTAL_ ??l??ments",
                    "infoEmpty": "Affichage de 0 ?? 0 sur 0 ??l??ments",
                    "infoThousands": ".",
                    "search": "Rechercher:",
                    "thousands": ".",
                    "infoFiltered": "(filtr??s depuis un total de _MAX_ ??l??ments)",
                    "datetime": {
                        "previous": "Pr??c??dent",
                        "next": "Suivant",
                        "hours": "Heures",
                        "minutes": "Minutes",
                        "seconds": "Secondes",
                        "unknown": "-",
                        "amPm": [
                            "am",
                            "pm"
                        ]
                    },
                    "editor": {
                        "close": "Fermer",
                        "create": {
                            "button": "Nouveaux",
                            "title": "Cr??er une nouvelle entr??e",
                            "submit": "Envoyer"
                        },
                        "edit": {
                            "button": "Editer",
                            "title": "Editer Entr??e",
                            "submit": "Modifier"
                        },
                        "remove": {
                            "button": "Supprimer",
                            "title": "Supprimer",
                            "submit": "Supprimer"
                        },
                        "error": {
                            "system": "Une erreur syst??me s'est produite"
                        },
                        "multi": {
                            "title": "Valeurs Multiples",
                            "restore": "R??tablir Modification"
                        }
                    }
      }

    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
    

    $("#example4").DataTable({
      "responsive": true,
      "lengthChange": true,
      "pageLength": 100,
      "autoWidth": false,
      "order": [],

      stateSave: true,
       stateDuration: 60 * 10,
   
      searchBuilder: {   },
      dom: 'QBlftpi',
      "buttons": [
                     {
                        extend: 'copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                   
                    "colvis"

                    ],
      "language": 
                      {
                    "emptyTable": "Aucune donn??e disponible dans le tableau",
                    "lengthMenu": "Afficher _MENU_ ??l??ments",
                    "loadingRecords": "Chargement...",
                    "processing": "Traitement...",
                    "zeroRecords": "Aucun ??l??ment correspondant trouv??",
                    "paginate": {
                        "first": "Premier",
                        "last": "Dernier",
                        "previous": "Pr??c??dent",
                        "next": "Suiv"
                    },
                    "aria": {
                        "sortAscending": ": activer pour trier la colonne par ordre croissant",
                        "sortDescending": ": activer pour trier la colonne par ordre d??croissant"
                    },
                    "select": {
                        "rows": {
                            "_": "%d lignes s??lectionn??es",
                            "1": "1 ligne s??lectionn??e"
                        },
                        "cells": {
                            "1": "1 cellule s??lectionn??e",
                            "_": "%d cellules s??lectionn??es"
                        },
                        "columns": {
                            "1": "1 colonne s??lectionn??e",
                            "_": "%d colonnes s??lectionn??es"
                        }
                    },
                    "autoFill": {
                        "cancel": "Annuler",
                        "fill": "Remplir toutes les cellules avec <i>%d<\/i>",
                        "fillHorizontal": "Remplir les cellules horizontalement",
                        "fillVertical": "Remplir les cellules verticalement"
                    },
                    "searchBuilder": {
                        "conditions": {
                            "date": {
                                "after": "Apr??s le",
                                "before": "Avant le",
                                "between": "Entre",
                                "empty": "Vide",
                                "equals": "Egal ??",
                                "not": "Diff??rent de",
                                "notBetween": "Pas entre",
                                "notEmpty": "Non vide"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vide",
                                "equals": "Egal ??",
                                "gt": "Sup??rieur ??",
                                "gte": "Sup??rieur ou ??gal ??",
                                "lt": "Inf??rieur ??",
                                "lte": "Inf??rieur ou ??gal ??",
                                "not": "Diff??rent de",
                                "notBetween": "Pas entre",
                                "notEmpty": "Non vide"
                            },
                            "string": {
                                "contains": "Contient",
                                "empty": "Vide",
                                "endsWith": "Se termine par",
                                "equals": "Egal ??",
                                "not": "Diff??rent de",
                                "notEmpty": "Non vide",
                                "startsWith": "Commence par"
                            },
                            "array": {
                                "equals": "Egal ??",
                                "empty": "Vide",
                                "contains": "Contient",
                                "not": "Diff??rent de",
                                "notEmpty": "Non vide",
                                "without": "Sans"
                            }
                        },
                        "add": "Ajouter une condition",
                        "button": {
                            "0": "Recherche avanc??e",
                            "_": "Recherche avanc??e (%d)"
                        },
                        "clearAll": "Effacer tout",
                        "condition": "Condition",
                        "data": "Donn??e",
                        "deleteTitle": "Supprimer la r??gle de filtrage",
                        "logicAnd": "Et",
                        "logicOr": "Ou",
                        "title": {
                            "0": "Recherche avanc??e",
                            "_": "Recherche avanc??e (%d)"
                        },
                        "value": "Valeur"
                    },
                    "searchPanes": {
                        "clearMessage": "Effacer tout",
                        "count": "{total}",
                        "title": "Filtres actifs - %d",
                        "collapse": {
                            "0": "Volet de recherche",
                            "_": "Volet de recherche (%d)"
                        },
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Pas de volet de recherche",
                        "loadMessage": "Chargement du volet de recherche..."
                    },
                    "buttons": {
                        "copyKeys": "Appuyer sur ctrl ou u2318 + C pour copier les donn??es du tableau dans votre presse-papier.",
                        "collection": "Collection",
                        "colvis": "Visibilit?? colonnes",
                        "colvisRestore": "R??tablir visibilit??",
                        "copy": "Copier",
                        "copySuccess": {
                            "1": "1 ligne copi??e dans le presse-papier",
                            "_": "%ds lignes copi??es dans le presse-papier"
                        },
                        "copyTitle": "Copier dans le presse-papier",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Afficher toutes les lignes",
                            "_": "Afficher %d lignes"
                        },
                        "pdf": "PDF",
                        "print": "Imprimer"
                    },
                    "decimal": ",",
                    "info": "Affichage de _START_ ?? _END_ sur _TOTAL_ ??l??ments",
                    "infoEmpty": "Affichage de 0 ?? 0 sur 0 ??l??ments",
                    "infoThousands": ".",
                    "search": "Rechercher:",
                    "thousands": ".",
                    "infoFiltered": "(filtr??s depuis un total de _MAX_ ??l??ments)",
                    "datetime": {
                        "previous": "Pr??c??dent",
                        "next": "Suivant",
                        "hours": "Heures",
                        "minutes": "Minutes",
                        "seconds": "Secondes",
                        "unknown": "-",
                        "amPm": [
                            "am",
                            "pm"
                        ]
                    },
                    "editor": {
                        "close": "Fermer",
                        "create": {
                            "button": "Nouveaux",
                            "title": "Cr??er une nouvelle entr??e",
                            "submit": "Envoyer"
                        },
                        "edit": {
                            "button": "Editer",
                            "title": "Editer Entr??e",
                            "submit": "Modifier"
                        },
                        "remove": {
                            "button": "Supprimer",
                            "title": "Supprimer",
                            "submit": "Supprimer"
                        },
                        "error": {
                            "system": "Une erreur syst??me s'est produite"
                        },
                        "multi": {
                            "title": "Valeurs Multiples",
                            "restore": "R??tablir Modification"
                        }
                    }
      }

    }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
    
});






</script>

<style>

.dtsb-searchBuilder, .dt-buttons
{
    display: none;
}

#example1_filter
{
    display: inline-block;
    float: right;
}

#example2_filter
{
    display: inline-block;
    float: right;
}

#example3_filter
{
    display: inline-block;
    float: right;
}

#example4_filter
{
    display: inline-block;
    float: right;
}
.dataTables_length
{
    display: inline-block;
}

.dt-buttons
{
    padding-bottom: 15px;
}

.dataTables_paginate
{
    display: inline-block;
    float: right;
}

.dataTables_info
{
    display: inline-block;
}
</style>