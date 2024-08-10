
    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?=base_url('assets/')?>plugins/common/common.min.js"></script>
    <script src="<?=base_url('assets/')?>js/custom.min.js"></script>
    <script src="<?=base_url('assets/')?>js/settings.js"></script>
    <script src="<?=base_url('assets/')?>js/gleek.js"></script>
    <script src="<?=base_url('assets/')?>js/styleSwitcher.js"></script>
    <script src="<?=base_url('assets/')?>plugins/flot/js/jquery.flot.min.js"></script>
    <script src="<?=base_url('assets/')?>plugins/flot/js/jquery.flot.pie.js"></script>
    <script src="<?=base_url('assets/')?>plugins/flot/js/jquery.flot.resize.js"></script>
    <script src="<?=base_url('assets/')?>plugins/flot/js/jquery.flot.spline.js"></script>
    <script src="<?=base_url('assets/')?>plugins/flot/js/jquery.flot.init.js"></script>
    <script src="<?= base_url('assets/')?>vendor/chart.js/Chart.min.js"></script>
        <script src="<?= base_url('assets/')?>vendor/chart.js/Chart.min.js"></script>
    <script>
        $('.custom-file-input').on('change', function(){
            let fileName = $($this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        })
        $(document).ready(function(){
            $("#jumlah").on('keydown keyup change blur', function() {
                var harga = $("#harga").val();
                var jumlah = $("#jumlah").val();

                var total = parseInt(harga) * parseInt(jumlah);
                $("#total").val(total);
                if (paseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
                    alert('stok tidak tersedia! stok tersedia! : ' + parseInt($('input[name="stok"]').val()))
                    reset()
                }
            });

            function reset() {
                $('input[name="jumlah"]').val('')
                $('input[name="total"]').val('')
            }
        })
    </script>
    <script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                foreach ($totalb as $data) {
                    echo "'" . $data['hijab'] . "',";
                }
                ?>
            ],
            datasets: [{
                label: 'Jumlah hijab Terjual',
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                data: [
                    <?php
                    foreach ($totalb as $data) {
                        echo $data['jum'] . ", ";
                    }
                    ?>
                ]
            }]
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'hijab'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 20
                    },
                    maxBarThickness: 50,
                }],
                yAxes: [{
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
        }
    });
</script>

</body>

</html>