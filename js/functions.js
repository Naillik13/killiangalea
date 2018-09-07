focusOut("email");
focusOut("name");
focusOut("message");
$(".black_wall").click(function() {
  $(this).fadeOut(500);
});
$(".cross").click(function() {
  $(".black_wall").fadeOut(500);
});
$("#send").click(function(e) {
  if (!testInput("email") || !testInput("name") || !testInput("message")){
    testInput("email");
    testInput("name");
    testInput("message");
    e.preventDefault();
    $(".black_wall").fadeIn(500);
    $(".msg").html("Le formulaire n'est pas valide, merci de vérifier que vous avez bien tout rempli !")
  }
});
function focusOut(name) {

    $('[name=' + name + ']').focusout(function () {
        testInput($(this).attr("name"));
    });

}

function testInput(name) {
    var elmt = $('[name=' + name + ']');
    var val = $('[name=' + name + ']').val();
    if (name == "email") {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if (val == null || val == '' || !emailReg.test(val)) {
            if (elmt.hasClass("true")) {
                elmt.removeClass("true");
            }
            elmt.addClass("false");
            return false;
        } else if (elmt.hasClass("false")) {
            elmt.removeClass("false").addClass("true");
            console.log(val);
            return true;
        } else {
            elmt.addClass("true");
            console.log(val);
            return true;
        }
    } else if (name == "tel") {
        var telReg = /^0[1-6]\d{8}$/;
        if (val == null || val == '' || !telReg.test(val)) {
            if (elmt.hasClass("true")) {
                elmt.removeClass("true");
            }
            elmt.addClass("false");
            return false;
        } else if (elmt.hasClass("false")) {
            elmt.removeClass("false").addClass("true");
            console.log(val + "mdr");
            return true;
        } else {
            elmt.addClass("true");
            console.log(val + "mdr");
            return true;
        }
    } else {
        if (val == "" || val == null) {
            if (elmt.hasClass("true")) {
                elmt.removeClass("true");
            }
            elmt.addClass("false");
            return false;
            console.log(val);
        } else if (elmt.hasClass("false")) {
            elmt.removeClass("false").addClass("true");
            console.log(val);
            return true;
        } else {
            elmt.addClass("true");
            console.log(val);
            return true;
        }
    }
}
