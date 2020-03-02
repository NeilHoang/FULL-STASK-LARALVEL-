$(document).ready(function () {
    $('#hide-image').click(function () {
        $('.image-customer').toggle();
    });
    $('#image-thumbnail-customer').change(function () {
        let sizeImage = $(this).val();
        let elementImage = $('.image-size');
        if (sizeImage > 0 && sizeImage<=10) {
            elementImage.each(function (index, item) {
                item.width = sizeImage * 50;
            })
        } else {
            alert("gia tri nhap ko hop le");
        }
    });

    $('#check').click(function() {
        // console.log('a');
        if ($('#test-input').attr('type') == 'text') {
            $('#test-input').attr('type', 'password');
        } else {
            $('#test-input').attr('type', 'text');
        }
    });
});
