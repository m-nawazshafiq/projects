$(document).ready(function () {

    $('#upload-img').on('change', function (this) {
        if (this.files) {
            var filesAmount = this.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function (event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo('img-preview');
                }

                reader.readAsDataURL(input.files[i]);
            }
        }
    });
});