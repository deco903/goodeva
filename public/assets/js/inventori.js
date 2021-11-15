$(function(){
    $('#value1').keyup(function(){
        var value1 = parseFloat($('#value1').val()) || 0;
        $('#sum').val(value1);
    });

    $('#stockFinal').keyup(function() {
        updateStock();
    });

    // $('#stockFinal2').keyup(function() {
    //     updateStock2();
    // });
});

function updateStock() {
    if ($('#mathState').val() == "-") {
        var minStock = $('#stockInit').val() - $('#stockFinal').val();
        $('#totalStock').val(minStock);
    } else if ($('#mathState').val() == "+") {
        var addStock = parseInt($('#stockInit').val()) + parseInt($('#stockFinal').val());
        $('#totalStock').val(addStock);
    }
};

// function updateStock2() {
//     if ($('#mathState2').val() == "-") {
//         var minStock = $('#stockInit2').val() - $('#stockFinal2').val();
//         $('#totalStock2').val(minStock);
//     } else if ($('#mathState2').val() == "+") {
//         var addStock = parseInt($('#stockInit2').val()) + parseInt($('#stockFinal2').val());
//         $('#totalStock2').val(addStock);
//     }
// };

function closeModal() {
    $('#modalStock').modal('toggle');
};


