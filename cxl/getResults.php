
<?php
require 'class/Api.php';
if (isset($_POST['limit']) && isset($_POST['dateFrom']) && isset($_POST['dateTo'])){
     //call api etc
    $aff = "";
    if (isset($_POST['aff']) && $_POST['aff'] != ""){
        $aff = $_POST['aff'];
    }
    $api = new Api();
    $res = $api->Login("autotest", "trav2014");
    $json = $api->GetResults($_POST['limit'], $_POST['dateFrom'], $_POST['dateTo'], $aff);

    $dc = json_decode($json, true);
  //  file_put_contents('content.json', $json);
    ?>
    
<head>

    <title>CXL.Works</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body class="text-center">
</nav>
<div class="container h-100">
    <div class="h-100 justify-content-center align-items-center">
        <br/><br/>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Price Change</th>
                <th>Org Price</th>
                <th>New Price</th>
                <th>Org Tax</th>
                <th>New Tax</th>
                <th>Date</th>
                <th>App</th>
                <th>Supplier</th>
                <th>Contract</th>
                <th>Package</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($dc['fields'] as $field){
                echo '<tr>';
                echo '<td>'.$field['price_change'] . '%</td>';
                echo '<td>'.$field['price_change'] . '%</td>';
                echo '<td>'.$field['orig_price'] . '</td>';
                echo '<td>'.$field['new_price'] . '</td>';
                echo '<td>'.$field['orig_tax'] . '</td>';
                echo '<td>'.$field['new_tax'] . '</td>';
                echo '<td>'.$field['date'] . '</td>';
                echo '<td>'.$field['app'] . '</td>';
                echo '<td>'.$field['supplier'] . '</td>';
                echo '<td>'.$field['contract'] . '</td>';
                echo '<td>'.$field['package_id'] . '</td>';
                echo '</tr>';
            }

            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">



<script type="text/javascript">
$(document).ready(function() {
    var t = $('#example').DataTable( {
        // Default Length.
            "pageLength": 5000,
            // Add export options
            dom: 'Bfrtip',
            buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],

        // change search text
        "language": {
    "search": "Filter records:"
  },

        // ID tab
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
</script>

<script type="text/javascript">
function GetAverage(){
    var table = $('#example').DataTable();
    var supplier = $('#supplier').val();
    var count = 0;
    var total = 0;
    table.rows().every( function ( rowIdx, tableLoop, rowLoop ) {
        var data = table.row(rowIdx).data();
        if (data[8].toLowerCase() == supplier.toLowerCase()){
            total += parseFloat(data[4].replace('%', ''));
            count += 1;
            /*console.log('found supplier');
            console.log('total ' + total);
            console.log('count = ' + count);*/
        }
    } );
    var change = total / count;
    change = change.toFixed(2);
    alert('Average Price change from ' + supplier + ' is ' + change + "%");
}
</script>
<script type="text/javascript">

  </script>
<?php
}
else {
    header('Location: index.php');
    die();
}