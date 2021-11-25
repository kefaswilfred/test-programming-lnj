<script type="text/javascript">
    $("#category").select2({
        placeholder: "Pilih Category",
        allowClear: true
    });

    $("#initiator_div").select2({
        placeholder: "Pilih Initiator Div",
        allowClear: true
    });

    $("#initiator_branch").select2({
        placeholder: "Pilih Initiator Branch",
        allowClear: true
    });

    $("#recipient_div").select2({
        placeholder: "Pilih Recipient Div",
        allowClear: true
    });

    $("#recipient_branch").select2({
        placeholder: "Pilih Recipient Branch",
        allowClear: true
    });

    $("#effectiveness").select2({
        placeholder: "Pilih Effectiveness",
        allowClear: true
    });

    $("#stage").select2({
        placeholder: "Pilih Stage",
        allowClear: true
    });

    $("#status").select2({
        placeholder: "Pilih Status",
        allowClear: true
    });

    var table;
    $(document).ready( function () {
        table = $('#example').DataTable({
            "scrollX": true,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": [
                {
                    "extend": 'copyHtml5',
                    "exportOptions": {
                      "columns": [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                },
                {
                    "extend": 'excelHtml5',
                    "exportOptions": {
                      "columns": [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                },
                {
                    "extend": 'csvHtml5',
                    "exportOptions": {
                      "columns": [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                },
                {
                    "extend": 'pdfHtml5',
                    "exportOptions": {
                      "columns": [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                }
            ],
            "order": [],
            "ajax": {
              "url": "<?php echo site_url('Data/getAll') ?>",
              "type": "POST",
            },
            "columnDefs": [
            {
              "targets": [0, -1],
              "orderable": false,
            },
            ],
        });
    });
    function edit(id) {
        $.ajax({
            url: "<?php echo site_url('Data/data_edit') ?>/" + id,
            type: "POST",
            dataType: "JSON",
            success:function(data){
                $('#carp_code').val(data.carp_code);
                $('#category').val(data.category).trigger('change');
                $('#initiator').val(data.initiator);
                $('#initiator_div').val(data.initiator_div).trigger('change');
                $('#initiator_branch').val(data.initiator_branch).trigger('change');
                $('#recipient').val(data.recipient);
                $('#recipient_div').val(data.recipient_div).trigger('change');
                $('#recipient_branch').val(data.recipient_branch).trigger('change');
                $('#verified_by').val(data.verified_by);
                $('#due_date').val(data.due_date);
                $('#effectiveness').val(data.effectiveness).trigger('change');
                $('#status_date').val(data.status_date);
                $('#stage').val(data.stage).trigger('change');
                $('#status').val(data.status).trigger('change');
                $('#id_data').val(id);
                $('#action').val("edit");
                $('#data_input_modal').modal('show');
            }
        })
    }

    function input(){
        $('#action').val("new");
        $('#data_input_modal').modal('show');
    }

    $('#data_input_form_modal').on('submit', function(event){
        event.preventDefault();
        if ($('#action').val() == 'new'){
            $.ajax({
                url:"<?php echo site_url('Data/data_insert_v2') ?>",
                type:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data)
                {
                    $('#data_input_form_modal')[0].reset();
                    Swal.fire({
                      type: 'success',
                      title: 'Success',
                      text: 'Berhasil input data!',
                      timer: 1000,
                      showConfirmButton: false
                    });
                    $('#data_input_modal').modal('hide');
                    $('#example').DataTable().ajax.reload();
                    createStageChart();
                    createStatusChart();
                    createEffectivenessChart();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    Swal.fire({
                        type: 'error',
                        title: 'Gagal input data!',
                        text: errorThrown,
                    });
                }
            });
        } else if ($('#action').val() == 'edit'){
            $.ajax({
                url:"<?php echo site_url('Data/data_update') ?>",
                type:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data)
                {
                    $('#data_input_form_modal')[0].reset();
                    Swal.fire({
                      type: 'success',
                      title: 'Success',
                      text: 'Berhasil edit data!',
                      timer: 1000,
                      showConfirmButton: false
                    });
                    $('#data_input_modal').modal('hide');
                    $('#example').DataTable().ajax.reload();
                    createStageChart();
                    createStatusChart();
                    createEffectivenessChart();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    Swal.fire({
                        type: 'error',
                        title: 'Gagal edit data!',
                        text: errorThrown,
                    });
                }
            });
        }
    });

    function hapus(id) {
        Swal.fire({
            title: 'Yakin untuk menghapus data?',
            text: "Data akan dihapus setelah anda klik Yes!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.value) {
            // ajax delete data to database
                $.ajax({
                    url: "<?php echo site_url('Data/data_delete') ?>/" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function (data)
                    {
                        //if success reload ajax table
                        $('#example').DataTable().ajax.reload();
                        createStageChart();
                        createStatusChart();
                        createEffectivenessChart();
                        Swal.fire({
                          title: 'Success!',
                          text: 'Berhasil delete data',
                          type: 'success'
                        });
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        // alert('Error deleting data');
                        alert(errorThrown);
                    }
                });
            }
        })
    }

    var statusChart;
    var effectivenessChart;
    var stageChart;
    var statusData = [];
    var recipientDiv = [];
    var effectiveValue = [];
    var notEffectiveValue = [];
    var stageData = [];

    createStageChart();
    createStatusChart();
    createEffectivenessChart();

    function createStageChart(){
        stageChart = $.ajax({
            url: "<?php echo site_url('Data/getStageData') ?>",
            type: "POST",
            dataType: "JSON",
            success: function(data){
                stageData = data.stage_data;
                if(stageData['Draft']){
                    $('#draft').text(stageData['Draft']);
                } else {
                    $('#draft').text('0');
                }
                if(stageData['Submitted']){
                    $('#submitted').text(stageData['Submitted']);
                } else {
                    $('#submitted').text('0');
                }
                if(stageData['Closed']){
                    $('#closed').text(stageData['Closed']);
                } else {
                    $('#closed').text('0');
                }
                if(stageData['Open']){
                    $('#open').text(stageData['Open']);
                } else {
                    $('#open').text('0');
                }
                if(stageData['Re-Open']){
                    $('#re-open').text(stageData['Re-Open']);
                } else {
                    $('#re-open').text('0');
                }
                if(stageData['Responded']){
                    $('#responded').text(stageData['Responded']);
                } else {
                    $('#responded').text('0');
                }
                if(stageData['Verified']){
                    $('#verified').text(stageData['Verified']);
                } else {
                    $('#verified').text('0');
                }
                if(stageData['Voided']){
                    $('#voided').text(stageData['Voided']);
                } else {
                    $('#voided').text('0');
                }
            }
        });
    }

    function createStatusChart(){
        statusChart = $.ajax({
            url: "<?php echo site_url('Data/getStatusData') ?>",
            type: "POST",
            dataType: "JSON",
            success: function (data){
                pieData = data.status_data;  
                Highcharts.chart('pie', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Chart by Status'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.y} ({point.percentage:.1f} %)</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.y} ({point.percentage:.1f} %)'
                            }
                        }
                    },
                    series: [{
                        name: 'Value',
                        colorByPoint: true,
                        data: pieData
                    }]
                });
            }
        });
    }

    function createEffectivenessChart(){   
        effectivenessChart = $.ajax({
            url: "<?php echo site_url('Data/getEffectivenessData') ?>",
            type: "POST",
            dataType: "JSON",
            success: function (data){
                recipientDiv = data.recipient_div;
                effectiveValue = data.effective;
                notEffectiveValue = data.not_effective;
                Highcharts.chart('column', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Chart by Effectiveness'
                    },
                    xAxis: {
                        categories: recipientDiv,
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Value'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:1f} </b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'Effective',
                        data: effectiveValue

                    }, {
                        name: 'Not Effective',
                        data: notEffectiveValue
                    }]
                });
            }
        })
    }


</script>