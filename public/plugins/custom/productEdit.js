$(document).ready(function () {
    $('#FrmProduct').validate({
        rules: {
            name: "required",
            brand: "required",
            category: "required",
            unit: "required",
            price: "required"
        },
        messages: {
            name: "Please enter product name",
            brand: "Please enter product brand",
            category: "Please choose category",
            unit: "Please enter unit",
            price: "Please enter price"
        },
        submitHandler: function (form) {
            form.submit();
            return false;
        }
    });
});
