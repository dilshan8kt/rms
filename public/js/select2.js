
//////////////////////////////select2suggestion calls/////////////////
// GetSuggestionsForSelect2("#item_id",'name','items',0,'id');
// GetSuggestionsForSelect2("#supplier_id",'supplier_name','suppliers',0,'id');
GetSuggestionsForSelect2("#department_id",'name','departments',0,'id');
///////////////////////////eof selct2 suggestion cals//////////////////////

function GetSuggestionsForSelect2(select2_id,showingCol,table,no,id)
{
    console.log('call');
  $(select2_id).select2({
      minimumInputLength: 1,
      placeholder:"",
      allowClear: true,
      ajax: {
          url: '/get_suggestions_for_select2',
          dataType: 'json',
          data: function (params) {
              return {
                  id:no,
                  q: $.trim(params.term),
                  c:showingCol,
                  t:table,
                  cid:id
              };
          },
          processResults: function (data) {
              return {

                  results: $.map(data, function(obj)
                  {
                      return { id: obj.id, text: obj.value };
                  })
              };
          },
          cache: true
      }
    });
}


// function GetSuggestionsForSelect2(select2_id,showingCol,table,no) {

//   $(select2_id).select2({
//         //  theme: "bootstrap",
//           minimumInputLength: 1,
//           placeholder:"",
//           allowClear: true,
//           ajax: {
//               url: '/get_suggestions_for_select2',
//               dataType: 'json',
//               data: function (params) {
//                   return {
//                       id:no,
//                       q: $.trim(params.term),
//                       c:showingCol,
//                       t:table
//                   };
//               },
//               processResults: function (data) {
//                   return {
//                       results: $.map(data, function(obj)
//                       {

//                            return { id: obj.id, text: obj.value };

//                       })
//                   };
//               },
//               cache: true
//           }
//       });
// }
