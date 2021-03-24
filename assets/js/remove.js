$(document).ready(function(){

    $(".remove").click(function () {
        $(".flash").hide();
    });

    setTimeout(function () {
        $(".flash").fadeOut("slow");
    }, 5000);

    $(document).on("change", ".change-img", function () {
        var image_path = $(".change-img").val();
        var image_name = image_path.split("\\").pop();
        $("#change-image-label").html(image_name)
        
    })

})