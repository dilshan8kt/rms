"use strict";
0 !== $("#data-table").length && $("#data-table").DataTable({
    responsive: !0,
    bLengthChange: !1
})

//view sub location modal
$('#view').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);

    var id = button.data('id');
    var name = button.data('name');
    var description = button.data('description');
    var is_order_location = button.data('is_order_location');
    var status = button.data('status');
    
    var modal = $(this);
    modal.find('#name').val(name);
    modal.find('#description').val(description);
    if(is_order_location){
        modal.find('#is_order_location').prop('checked', true);
    }else{
        modal.find('#is_order_location').prop('checked', false);
    }
    if(status){
        modal.find('#status').prop('checked', true);
    }else{
        modal.find('#status').prop('checked', false);
    }
});

$('#edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);

    var id = button.data('id');
    var name = button.data('name');
    var description = button.data('description');
    var is_order_location = button.data('is_order_location');
    var status = button.data('status');
    
    var modal = $(this);
    modal.find('#id').val(id);
    modal.find('#name').val(name);
    modal.find('#description').val(description);

    if(is_order_location){
        modal.find('#is_order_location').prop('checked', true);
    }else{
        modal.find('#is_order_location').prop('checked', false);
    }
    if(status){
        modal.find('#status').prop('checked', true);
    }else{
        modal.find('#status').prop('checked', false);
    }
});

//delete modal
$('#delete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)

    var id = button.data('id');
    
    var modal = $(this);
    modal.find('#id').val(id);
});