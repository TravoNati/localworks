<head>
<?php include("login.php"); ?>
    <title>CXL.Works</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
</head>
<body class="text-center">
<nav class="navbar navbar-light bg-light">
<span class="navbar-brand mb-0 h1" >Price-Change Inspector</span>
</nav>
<div class="container h-100 col-sm-2">
    <div class="h-100 justify-content-center align-items-center">
        <form action="getResults.php" method="post">
            <div class="form-group">
                <br/><br/>
                Start Date
                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                    <input type="text" name="dateFrom" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                        <div class="input-group-text"></div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                End Date
                <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                    <input type="text" name="dateTo" class="form-control datetimepicker-input"  data-target="#datetimepicker2"/>
                    <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                        <div class="input-group-text"></div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Limit of results</label>
                <input type="text" class="form-control" name="limit" value="500" id="exampleInputPassword2" value="10" placeholder="Enter End Date">
                <small id="emailHelp2" class="form-text text-muted">Enter Limit of results</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Affiliate</label>
                <select class="form-control" name="aff">
                    <option selected="selected" value="">None</option>
                    <option value="17-Test">Test</option>
                </select>
                <small id="emailHelp2" class="form-text text-muted">Select affilate if needed</small>
            </div>

            <button type="submit" class="btn btn-primary" id="searchbtn"  onclick="getElementById('searchbtn').disabled = true;document.querySelector('form').submit()">
            Get Results
            </button>
        </form>
    </div>
</div>

    <footer class="mastfoot mt-auto">
        <div class="inner">
           Travolutionary
        </div>
    </footer>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    $(function () {
        //14-Jan-2020%2000:00
        var picker = $('#datetimepicker1').datetimepicker({
            format: 'DD-MMM-YYYY HH:MM:01'
        });
    });
    $(function () {
        var picker2 = $('#datetimepicker2').datetimepicker({
            format: 'DD-MMM-YYYY HH:MM:01'
        });
    });
</script>
            <script type="text/javascript">
$('#searchbtn').click(function() {
//   $(this).html('<Div style="margin-top:-20px" />; <img  src="loading1.svg" />');

    $('#searchbtn').html('<Div style="margin-top:-20px" /><br><img  src="loading1.svg" />');
 

})
</script>