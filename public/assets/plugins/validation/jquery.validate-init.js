jQuery(".form-valide").validate({
    ignore: [],
    errorClass: "invalid-feedback animated fadeInDown",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
    },
    rules: {
        "val-username": {
            required: !0,
            minlength: 3
        },
        "val-flowername": {
            required: !0
        },
        "val-topicname": {
            required: !0
        },
        "val-email": {
            required: !0,
            email: !0
        },
        "val-password": {
            required: !0,
            minlength: 5
        },
        "val-confirm-password": {
            required: !0,
            equalTo: "#val-password"
        },
        "val-select2": {
            required: !0
        },
        "val-select2-multiple": {
            required: !0,
            minlength: 2
        },
        "val-suggestions": {
            required: !0,
            minlength: 5
        },
        "val-skill": {
            required: !0
        },
        "val-currency": {
            required: !0,
            currency: ["$", !0]
        },
        "val-website": {
            required: !0,
            url: !0
        },
        "val-phoneus": {
            required: !0,
            phoneUS: !0
        },
        "val-digits": {
            required: !0,
            digits: !0
        },
        "val-soluong": {
            required: !0,
            digits: !0
        },
        "val-dongia": {
            required: !0,
            digits: !0
        },
        "val-kho": {
            required: !0,
            digits: !0
        },
        "val-number": {
            required: !0,
            number: !0
        },
        "val-range": {
            required: !0,
            range: [1, 5]
        },
        "val-terms": {
            required: !0
        }
    },
    messages: {
        "val-username": {
            required: "H??? v?? t??n l?? th??ng tin b???t bu???c",
            minlength: "H??? v?? t??n ph???i c?? ????? d??i ??t nh???t 3 k?? t???"
        },
        "val-flowername": {
            required: "Th??ng tin b???t bu???c kh??ng ???????c ????? tr???ng"
        },
        "val-topicname": {
            required: "Th??ng tin b???t bu???c kh??ng ???????c ????? tr???ng"
        },
        "val-email": "Vui l??ng nh???p email h???p l???",
        "val-password": {
            required: "M???t kh???u l?? th??ng tin b???t bu???c",
            minlength: "M???t kh???u ph???i c?? ????? d??i ??t nh???t 5 k?? t???"
        },
        "val-confirm-password": {
            required: "Vui l??ng x??c nh???n m???t kh???u",
            minlength: "M???t kh???u ph???i c?? ????? d??i ??t nh???t 5 k?? t???",
            equalTo: "M???t kh???u kh??ng tr??ng kh???p"
        },
        "val-select2": "Please select a value!",
        "val-select2-multiple": "Please select at least 2 values!",
        "val-suggestions": "What can we do to become better?",
        "val-skill": "Please select a skill!",
        "val-currency": "Please enter a price!",
        "val-website": "Please enter your website!",
        "val-phoneus": "Please enter a US phone!",
        "val-digits": "Please enter only digits!",
        "val-soluong": "Vui l??ng nh???p s???!",
        "val-dongia": "Vui l??ng nh???p s???!",
        "val-kho": "Vui l??ng nh???p s???!",
        "val-number": "Please enter a number!",
        "val-range": "Please enter a number between 1 and 5!",
        "val-terms": "You must agree to the service terms!"
    }
});