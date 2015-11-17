$(document).ready(function () {
    $('#FrmuserEdit').validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            gender: "required",
            contact:  {
                number: true
            }
        },
        messages: {
            name: "Please enter user name",
            email: "Please enter valid email address",
            gender: "Please choose gender",
            contact: "Please enter valid contact number"
        },
        submitHandler: function (form) {
            form.submit();
            return false;
        }
    });
});
