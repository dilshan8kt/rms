"use strict";
0 !== $("#data-table").length && $("#data-table").DataTable({
    responsive: !0,
    bLengthChange: !1
})

$('#category_id').prop('disabled', true);

$('#department_id').on('change', function(){
    var returnContent;
    $.ajax( {
        url: "/get_category",
        type: "get",
        // dataType: 'json',
        delay: 250,
        data:  {
            department_id:$(this).val()
        }
    }).done(function( data ) {
        $("#category_id").html(data);
        $('#category_id').prop('disabled', false);
    });
});

$('#if-hide').hide();

$('#is_reorder').change(function(){
    if($(this).is(":checked")){
        $('#if-hide').show();
    }else{
        $('#if-hide').hide();
    }
});