<!DOCTYPE html>
<html lang="en">

<head>
<style type="">
@media print {
  #printPageButton {
    display: none;
  }
}
@media print {
    td {width: 1500%}
}


</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print" />


    <title>BRIMS - Barangay Profile Report</title>

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.nav')
        <div id="page-wrapper" style="padding-top: 0% ">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Barangay Profile Report</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="col-lg-12">
                    <div class="panel panel-success" id="printableArea" >
                    <img src="../assets/images/header.jpg" hidden>
                        <div class="panel-heading">
                            Graphical Representation / Barangay Profile
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="form-group">      
                                <div class='col-md-12'>
                                    <div class='card-box'>
                                      <input type="hidden" id="resident" value="{{$resident}}">
                                      <input type="hidden" id="male" value="{{$male}}">
                                      <input type="hidden" id="female" value="{{$female}}">
                                      <input type="hidden" id="senior" value="{{$senior}}">
                                      <input type="hidden" id="voter" value="{{$voter}}">
                                      <input type="hidden" id="household" value="{{$household['household_id']}}">
                                      <input type="hidden" id="family" value="{{$family['family_id']}}">
                                        <h4 class='text-dark header-title m-t-0'>Residents Population</h4>
                                        
                                    </div>

                                    <div class="col-lg-8">

                                        <div id="pie-chart"></div>
                                    </div>
                                    <div class="card-box pull-right" style="background-color: #eeeeee;">
                                        <table class="table table-hover mails m-0 table table-actions-bar" id="">
                                            <thead>
                                                <tr>
                                                    <th>Total number of</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Resident Population</strong></td>
                                                    <td><i>{{$resident}}</i></td>   
                                                </tr>
                                                <tr>
                                                    <td><strong>Male</strong></td>
                                                    <td><i>{{$male}}</i></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Female</strong></td>
                                                    <td><i>{{$female}}</i></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Senior Citizen</strong></td>
                                                    <td><i>{{$senior}}</i></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Voters</strong></td>
                                                    <td><i>{{$voter}}</i></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Number of Household</strong></td>
                                                    <td><i>{{$household['household_id']}}</i></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Number of Family</strong></td>
                                                    <td><i>{{$family['family_id']}}</i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" id="printPageButton" class="btn btn-danger" onclick="printDiv('printableArea')"><span class="glyphicon glyphicon-print"></span> Print</button>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div> 
      
        </div>
        <!-- /#page-wrapper -->

        

    </div>
    <!-- /#wrapper -->

    

    <!-- Morris Charts JavaScript -->
    <script src="../assets/raphael/raphael.min.js"></script>
    <script src="../assets/morrisjs/morris.min.js"></script>
    <!-- <script src="../assets/data/morris-data.js"></script> -->
    <script type="text/javascript"></script>
    <script type="text/javascript">
        function graphDonut(colors) {
                Morris.Donut({
                element: 'pie-chart',
                colors : colors,
                data: [{label: 'Residents',value: $('#resident').val()}, 
                {label: 'Male',value: $('#male').val()},
                {label: 'Female',value: $('#female').val()}, 
                {label: 'Seniors',value: $('#senior').val()}, 
                {label: 'Voters',value: $('#voter').val()},
                {label: 'Household',value: $('#household').val()},
                {label: 'Family',value: $('#family').val()}]
          
        });  

        }

        graphDonut( ['#5ea9e8', '#5ee89d', '#e5484f', '#ffc0c0', '#fff867', '#fba16c','#4eeed3'] );
    </script>
    <script type="text/javascript">
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;

        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            // history.go(0); 
            document.body.innerHTML = oldPage;
            window.location.reload();

          
        }
        
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        var t = $('#kkk').DataTable({
                    "dom": "lBfrtip",
            responsive: false,
            searchHighlight: false,
            "columnDefs": [
                { 
                  "sortable" : false, 
                  "searchable": false,
                  "targets": [0]
                }
            ],
            "order": [[ 1, 'asc' ]],
            buttons: 
            [
            {
              text: '<i class="fa fa-print"></i> PRINT ',
              extend: 'print',
                  exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                  },  
                customize: function ( win ) {
                    $(win.document.body)
                        .prepend(
                            
                          '<img src="{{ URL::asset("assets/images/header.jpg") }}" style="display: block; width:100%;" />'
                        ).find('table').addClass('printer');
      
                    // $(win.document.body).find( 'table' )
                    //     .addClass( 'compact' )
                    //     .removeClass('table-hover table-striped table-actions-bar')
                    //     .css( {'background-color': 'none', 'background': 'url("http://localhost:8000/assets/images/avatar.png")', });
                }

            }
            ],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        });
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();

      });
    </script>

</body>

</html>

