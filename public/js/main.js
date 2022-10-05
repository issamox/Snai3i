$(document).ready(function() {
    $(".photo").click(function () {
        $(".input_file").click();
    });
    $(".input_file").change(function (event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
        $(".photo").fadeIn("slow").attr('src', URL.createObjectURL(event.target.files[0]));
    });

    /* Slider */
    $('.my-slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    /* Add new row */
    $(".add_new_row").on("click", function (e) {
        e.preventDefault();


        $("table.multiple-rows tbody").append('' +
            '<tr>' +
            '<td><input type="text" name="services[]" class="form-control"> </td>\n' +
            '<td class="delete_row"> <i class="btn btn-danger fa fa-trash"></i> </td>\n' +
            '</tr>');
    });

    $(document).on("click",".delete_row i",function () {
        $(this).parent().parent().empty(300);
    });
});
