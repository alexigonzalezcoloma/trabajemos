

function Ajax(url, divRes, param) {
    //alert(param);
    $.ajax({
        type: "POST",
        cache: 'false',
        url: url,
        data: {'param': param},
        success: function(data) {
            //alert(data);
            $(divRes).html(data);
        }
    });
}