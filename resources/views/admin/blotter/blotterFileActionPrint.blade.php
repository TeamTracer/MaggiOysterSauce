<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Letter of File Action Print</title>

    

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
                    <h1 class="page-header">Letter of File Action</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Blotter Details
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-6">
                                <label class="control-label">Case Title</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{$fileaction['case_title']}}" readonly="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6">
                                <label class="control-label">Complainant Name</label>
                                <input type="text" name="cname" class="form-control" id="cname" value="{{$fileaction['complainant_fullname']}}" readonly="">
                            </div>
                            <div class="form-group col-md-6">


                                <label class="control-label">Defendant Name</label>
                                <input type="text" name="dname" class="form-control" id="dname" value="{{$fileaction['defendant_fullname']}}" readonly="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Reasons:</label>
                                <div class="col-md-12">
                                  <div class="radio">
                                      <input type="radio" value="Obey summons or to appear for hearing" name="reasons">
                                      <label class="control-label">Obey summons or to appear for hearing</label>
                                  </div>
                                  <div class="radio">
                                      <input type="radio" value="No settlement/conciliation was reached" name="reasons">
                                      <label class="control-label">No settlement/conciliation was reached</label>
                                  </div>
                                   <div class="radio">
                                      <input type="radio" value="Settlement has been repudiated" name="reasons">
                                      <label class="control-label">Settlement has been repudiated</label>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="pull-right">
                        <button id="print" type="submit" name="tryy" class="btn btn-danger"><span class="glyphicon glyphicon-print"> </span> Print</button>
                    </div>

                        
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>        
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
    <script src="../assets/js/bootstrap-toggle.js"></script>

</body>

</html>
