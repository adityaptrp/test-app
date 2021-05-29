
$('#datatable').DataTable({
    "dom": '<"data-table-top"lf><"data-table-body-wr overflow-y-hidden"t><"data-table-bottom"ip>',
    "order": [],
    'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': [0, -1]
    }]
});