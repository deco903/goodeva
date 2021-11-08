$(function(){
    $('#value1').keyup(function(){
        var value1 = parseFloat($('#value1').val()) || 0;
        $('#sum').val(value1);
    });


    $('#stockFinal2').keyup(function() {
        updateStock2();
    });
});


function updateStock2() {
    if ($('#mathState2').val() == "-") {
        var minStock2 = $('#stockInit2').val() - $('#stockFinal2').val();
        $('#totalStock2').val(minStock2);
    } else if ($('#mathState2').val() == "+") {
        var addStock2 = parseInt($('#stockInit2').val()) + parseInt($('#stockFinal2').val());
        $('#totalStock2').val(addStock2);
    }
};

function closeModal() {
    $('#modalUpdate').modal('toggle');
};


