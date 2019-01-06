/**********************************


function validate() {

    var val1 = document.getElementsByClassName("mandatory");
    var val2 = document.getElementsByClassName("inputs_ans");

    var result = true;

    var alphanumericspecial = /^[0-9a-zA-Z,_\-*\/\\ @!#$%&().|?'":;]+$/;
    var x;
    for (x = 0; x < val1.length; x++) {
        if (val1[x].value.length == 0) {
            val1[x].addEventListener("focus", function () {
                this.style.backgroundColor = "#fffac9";
            });
            val1[x].focus();
            val1[x].addEventListener("input", function () {
                this.style.backgroundColor = "white";
            });
            val1[x].nextSibling.innerHTML = "<sup>*</sup> This is a mandatory field";
            val1[x].nextSibling.style.visibility = "visible";
            result = false;
        }
    }

    for (x = 0; x < val2.length; x++) {
        if (!(val2[x].value.match(alphanumericspecial)) && val2[x].value.length != 0) {
            val2[x].addEventListener("focus", function () {
                this.style.backgroundColor = "#fffac9";
            });
            val2[x].focus();
            val2[x].addEventListener("input", function () {
                this.style.backgroundColor = "white";
            });
            val2[x].nextSibling.innerHTML = "<sup>*</sup> This Field doesn't accept some characters you entered";
            val2[x].nextSibling.style.visibility = "visible";
            result = false;
        }
    }

    if (document.getElementById("img_mandatory")) {
        var img = document.getElementById("img_mandatory");
        if (img.value == "") {
            img.addEventListener("focus", function () {
                this.style.backgroundColor = "#fffac9";
            });
            img.focus();
            img.addEventListener("change", function () {
                this.style.backgroundColor = "white";
            });
            img.nextSibling.innerHTML = "<sup>*</sup> Uploading image is Mandatory";
            img.nextSibling.style.visibility = "visible";
            result = false;
        }
    }

    if (document.getElementById("pass_id")) {
        var dis = document.getElementById("pass_id");
        dis.disabled = false;
    }

    return result;

}



*********************************/
