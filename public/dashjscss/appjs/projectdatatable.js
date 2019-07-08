$(document).ready(function () {
    $('#ptable').DataTable({
        "processing": true,
        "stateSave": true,
        responsive: true,
        "order": [[2, "asc"]],
        "columnDefs": [
            {
                "targets": [0],
                "orderable": true,
            },
        ],dom: 'Blfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                footer: true,
                exportOptions: {
                    columns: [0,1,2, 3,4]
                }
            }
        ],

    });
    //Client Group
    $('#cgrtable').DataTable({responsive: true});
              
    //Account Table
    $('#acctable').DataTable({
        responsive: true,
         dom: 'Blfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                footer: true,
                exportOptions: {
                    columns: [0, 1, 2, 3]
                }
            }
        ],
    });

//Supplier
    $('#clientstable').DataTable({
        'processing': true,
        'stateSave': true,
        'columnDefs': [
            {
                'targets': [0],
                'orderable': false,
            },
        ],dom: 'Blfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    footer: true,
                    exportOptions: {
                        columns: [0,1,2, 3,4]
                    }
                }
            ],
    });
                //Support Ticket
                    $('#doctable').DataTable({
            
                        "processing": true,
                        responsive: true,
                        "columnDefs": [
                            {
                                "targets": [0],
                                "orderable": false,
                            },
                        ],
                        "order": [[2, "desc"]]
            
                    });
                    $('#ptable').DataTable({

                        "processing": true,
                        "stateSave": true,
                        responsive: true,
                        "order": [[2, "asc"]],
                        "columnDefs": [
                            {
                                "targets": [0],
                                "orderable": true,
                            },
                        ],dom: 'Blfrtip',
                        buttons: [
                            {
                                extend: 'excelHtml5',
                                footer: true,
                                exportOptions: {
                                    columns: [0,1,2, 3,4]
                                }
                            }
                        ],
                
                    });
                
                   
                //Product Category
                    $('#catgtable').DataTable({responsive: true,dom: 'Blfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            footer: true,
                            exportOptions: {
                                columns: [0,1, 2, 3, 4]
                            }
                        }
                    ],});
                    //Product Table
                        $('#productstable').DataTable({
                                    "processing": true, //Feature control the processing indicator.
                                    "order": [], //Initial no order.
                                    responsive: true,
                                    dom: 'Blfrtip',
                                     buttons: [
                                    {
                                        extend: 'excelHtml5',
                                        footer: true,
                                        exportOptions: {
                                            columns: [1, 2, 3, 4, 5,6]
                                        }
                                    }
                                ],
                
                                });
                                $('#invoices_st').DataTable({
                                    'processing': true,
                                    'stateSave': true,
                                    responsive: true,
                                    'columnDefs': [
                                        {
                                            'targets': [0],
                                            'orderable': false,
                                        },
                                    ],
                                    dom: 'Blfrtip',
                                    buttons: [
                                        {
                                            extend: 'excelHtml5',
                                            footer: true,
                                            exportOptions: {
                                                columns: [1, 2, 3, 4, 5]
                                            }
                                        }
                                    ],
                                });

});

