$(document).ready(function(){
    //AJAX INITIATE
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#view_request").on("click", function () {
        var id = $(this).data("value");
        $.ajax({
            type:'POST',
            url:'/ajax/view_request',
            data:{
                id: id
            },
            success:function(data){
                var response = JSON.parse(data);
                console.log(response);
                $("#requestby").text(response[0]["name"])
                $("#badgeid").text(response[0]["id"])
                $("#dateofrequest").text(response[0]["daterequest"])
                $("#title").text(response[0]["applicationtitle"])
                $("#details").text(response[0]["request_text"])
                $("#Modal").modal("show")
            }
        });
    })
})