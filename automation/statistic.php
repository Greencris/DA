<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="./layout/sidebar.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./layout/sidebar.css">
</head>

<body id="body-pd" style="padding-left: 65px;">
    <?php
                include('./layout/sidebar.php');
            ?>
    <!-- partial -->
    <div class="container main-panel mt-5 w-100">
        <div class="content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-info m-0 mt-5">
                <div class="container-fluid">
                    <a class="navbar-brand fs-3 fw-bold text-decoration-none" href="#"><i class="fa fa-database"
                            aria-hidden="true"></i>Thống kê chi tiết</a>
                    <div class="d-flex ms-auto ">
                        <div id="showDate" class="fs-4 text-center mt-2"></div>
                        <i class="ms-3 fa fa-arrow-circle-up  fs-1 text-white" aria-hidden="true"></i>
                        <i class="ms-3 fa fa-arrow-circle-left fs-1 text-white" aria-hidden="true"></i>
                        <i class="ms-3 fa fa-arrow-circle-right fs-1 text-white" aria-hidden="true"></i>
                    </div>
                </div>
            </nav>
            <div class="row mt-3 m-0">
                <div class="col-10" style="overflow:scroll;">
                    <table id="example" class="table table-striped table-bordered" style="width:100%; ">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ngày</th>
                                <th>Giờ</th>
                                <th>Độ ẩm 1</th>
                                <th>Độ ẩm 2</th>
                                <th>Độ ẩm 3</th>
                                <th>Nhiệt độ 1</th>
                                <th>Nhiệt độ 2</th>
                                <th>Nhiệt độ 3</th>
                                <th>Ánh sáng 1</th>
                                <th>Ánh sáng 2</th>
                                <th>Ánh sáng 3</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Ngày</th>
                                <th>Giờ</th>
                                <th>Độ ẩm 1</th>
                                <th>Độ ẩm 2</th>
                                <th>Độ ẩm 3</th>
                                <th>Nhiệt độ 1</th>
                                <th>Nhiệt độ 2</th>
                                <th>Nhiệt độ 3</th>
                                <th>Ánh sáng 1</th>
                                <th>Ánh sáng 2</th>
                                <th>Ánh sáng 3</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-2">
                    <span>Filter by Date</span>
                    <input type="date" id="date" name="date">
                </div>
            </div>
        </div>
    </div>
    <!-- -end partial -->

    <!-- plugins:js -->

    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/chart.js"></script>
    <!-- End custom js for this page -->

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>
    <?php
        $myfile = fopen("data.txt", "r") or die("Unable to open file!");
        $control = fread($myfile,filesize("data.txt"));
 
        fclose($myfile);
    ?>
    <script>
    var t;
    $("#date").on("change", (e) => {
        var list = <?= $control; ?>;
        $.ajax({
            type: "POST",
            url: "getdata.php",
            data: {
                date: $("#date").val().toString()
            },
            datatype: 'json',
            success: function(data) {
                t.clear().draw();
                var result = list.filter(item => {
                    if (item.Date == data) {
                        console.log(item.Date)
                        return item
                    }
                })
                var counter = 1;
                $.each(result, (index, item) => {
                    t.row.add([counter, item.Date, item.Time, (parseFloat(item.DA_A1 /
                        10).toString()), (parseFloat(item.DA_A2 /
                        10).toString()), (parseFloat(item.DA_A3 /
                        10).toString()), (parseFloat(item.ND_A1 /
                        10).toString()), (parseFloat(item.ND_A2 /
                        10).toString()), (parseFloat(item.ND_A3 /
                        10).toString()), (parseFloat(item.AS_A1 /
                        10).toString()), (parseFloat(item.AS_A2 /
                        10).toString()), (parseFloat(item.AS_A3 /
                        10).toString())]).draw(false);
                    counter++;
                })
            }

        });
    })

    $(document).ready(function() {
        t = $('#example').DataTable();
        var counter = 1;

        $('#addRow').on('click', function() {
            t.row.add([counter + '.1', counter + '.2', counter + '.3', counter + '.4', counter + '.5'])
                .draw(false);

            counter++;
        });

        // Automatically add a first row of data
        $('#addRow').click();
    });
    $(document).ready(function() {
        $('.navbar-toggler').on('click', function() {
            $(".text_none").css("display", "none");
        });
    });
    </script>
</body>

</html>