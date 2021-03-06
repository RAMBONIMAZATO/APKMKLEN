<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pourcentage retard mensuel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/select.bootstrap4.css"/>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
       <?php include('../config/template/header.php'); ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php include('../config/template/leftbar_ret.php'); ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Résultat sur le retard mensuel </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Département</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Retard journalier</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Résultat retard journalier</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- page body -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- Chart departement  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Graphe d'absence journalier </h5>
                            </div>
                            <div class="card-body">
                                <canvas id="graph_ret"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end Chart  -->
                    <!-- ============================================================== -->
                </div>
                <div class="row">
                    
                <!-- ============================================================== -->
                <!-- table retard journalier -->
                <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Pourcentage retard mensuel</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="row mb-4 input-daterange">
                                            <div class="col-sm-6">
                                                <input type="text" name="start_date" id="start_date" class="form-control" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="end_date" id="end_date" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="button" name="search" id="search" value="Search" class="btn btn-info" />
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="order_data" class="table table-striped table-bordered second" style="text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th>Departement</th>
                                                    <th>Effectif</th>
                                                    <th>Nb retard</th>
                                                    <th>Plage</th>
                                                    <th>Dates</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                <!-- ============================================================== -->
                <!-- end table retard journalier-->
                <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end page body -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include('../config/template/footer.php'); ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- chartjs js-->
    <script src="../assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="../assets/vendor/charts/charts-bundle/chartjs.js"></script>
    
    <!-- filter date -->
    <!-- <script src="../assets/libs/js/main-js.js"></script> -->
    <!-- <script src="../assets/lib-range/jquery-1.12.4.js"></script> -->


    <script src="../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="../assets/lib-range/bootstrap-datepicker.css" />
    <script src="../assets/lib-range/bootstrap-datepicker.js"></script>
    <script src="../assets/vendor/datepicker/moment.js"></script>
    <link rel="stylesheet" href="../assets/vendor/daterangepicker/daterangepicker.css" />
    <script src="../assets/vendor/datepicker/datepicker.js"></script>
    <!-- Print data -->
    <script type="text/javascript" src="../assets/vendor/datatables/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="../assets/vendor/datatables/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="../assets/vendor/datatables/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="../assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="../assets/vendor/datatables/js/jszip.min.js"></script>
    <script type="text/javascript" src="../assets/print/datatables.min.js"></script>
    <script type="text/javascript" src="../assets/vendor/datatables/js/pdfmake.min.js"></script>
    <script type="text/javascript" src="../assets/vendor/datatables/js/vfs_fonts.js"></script>
    <!-- css datatable-->
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/buttons.dataTables.min.css">
    <!-- chartjs js-->
    <script src="../assets/charts/Chart.bundle.js"></script>
    <script src="../assets/charts/chartjs.js"></script>
    <script type="text/javascript" language="javascript" >
        $(document).ready(function(){
            $('.input-daterange').datepicker({
                todayBtn:'linked',
                format: "yyyy-mm-dd",
                autoclose: true
            });
            fetch_data('no');
            function fetch_data(is_date_search, start_date='', end_date='')
            {
                var dataTable = $('#order_data').DataTable({
                    "processing" : true,
                    "serverSide" : true,
                    "order" : [],
                    "ajax" : {
                        url:"../config/connection/res_ret_m.php",
                        type:"POST",
                        data:{
                            is_date_search:is_date_search, start_date:start_date, end_date:end_date
                        }
                    },
                    dom: 'lBfrtip',
                    buttons: ['excel', 'csv', 'pdf', 'print']
                });
            }
        $('#search').click(function(){
            var start_date = $('#start_date').val();
            var end_date = $('#end_date').val();
            if(start_date != '' && end_date !='')
            {
                $('#order_data').DataTable().destroy();
                fetch_data('yes', start_date, end_date);
            }else
            {
                alert("Both Date is Required");
            }
        });
        showGraph();
    });
        function showGraph()
        {
            {
                $.post("../config/graph/graph_ret_m.php",
                function (data)
                {
                    console.log(data);
                    var name = [];
                    var effectif = [];

                    for (var i in data) {
                        name.push(data[i].Code);
                        effectif.push(data[i].Nb_ret);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Departement Effectif',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: effectif
                            }
                        ]
                    };
                    var graphTarget = $("#graph_ret");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
    </script>

</body>
 
</html>