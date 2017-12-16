$(document).ready(function () {
    var validator = $("#addpost").validate({
        ignore: '',
        rules: {
            title: {
                required: true
            },
            date: {
                required: true
            },
            category: {
                required: true
            },
            content: {
                required: true,
            }
        }
    });
});