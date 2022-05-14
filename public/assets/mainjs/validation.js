$(document).ready(function (e) {
    $(".emailspecialvalidation, .sizespecialvalidation, .specialvalidationdot, .specialvalidation, .addressspecialvalidation, .letters, .numeric, .headeremailspecialvalidation, .artwork_name, .specialcharacter, .allownumeric, .textareavalidation").bind("paste", function (e) {
        e.preventDefault();
    });

    //$().UItoTop({easingType: 'easeOutQuart'});

    $(document).on('keypress',".alphaspecialvalidation",function (e) {
        //allowed charters alpha characters only;
        var keyCode = e.which;
        //alert(keyCode);
        if (!((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122))  && keyCode != 8 && keyCode != 32) {
            return false;
        }
    });
    $(document).on('keypress',".numericpecialvalidation",function (e) {
        //allowed charters Numeric characters only;
        var keyCode = e.which;
        // alert(keyCode);
        if (!((keyCode >= 48 && keyCode <= 57))  && keyCode != 8) {
            return false;
        }
    });
    $(document).on('keypress',".specialvalidation",function (e) {
    	//allowed charters alph and Numeric characters;
        var keyCode = e.which;
        if (!((keyCode >= 48 && keyCode <= 57)  || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122))  && keyCode != 8 && keyCode != 32) {
            return false;
        }
    });
    $(document).on('keypress',".dashspecialvalidation",function (e) {
        //allowed charters alph Numeric and - characters ;
        var keyCode = e.which;
        if (!((keyCode >= 48 && keyCode <= 57)  || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122)) && keyCode!=45  && keyCode != 8 && keyCode == 32) {
            return false;
            if(keyCode == 32){
                return false;
            }
        }
    });
    $(document).on('keypress',".dashspecialnamevalidation",function (e) {
        //allowed charters alph Numeric and - characters ;
        var keyCode = e.which;
        if (!((keyCode >= 48 && keyCode <= 57)  || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122)) && keyCode!=45  && keyCode != 8 && keyCode != 32) {
            return false;
        }
    });
    $(document).on('keypress',".descriptionvalidation",function (e) {
        //allowed charters alph Numeric - / and . characters ;
        var keyCode = e.which;
        var keyCode = e.which;
        // alert(keyCode);
        if (!((keyCode >= 46 && keyCode <= 57)  || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122)) && keyCode!=45  && keyCode != 8 && keyCode != 32) {
            return false;
        }
    });
    
    
    $(".addressspecialvalidation, .sizespecialvalidation").keypress(function (e) {
        var keyCode = e.which;
        if (keyCode == 46 || keyCode == 35) {
            return true;
        } else if (!((keyCode >= 48 && keyCode <= 57)
            || (keyCode >= 65 && keyCode <= 90)
            || (keyCode >= 97 && keyCode <= 122))
            && keyCode != 8 && keyCode != 32) {
            return false;
        }
    });
    $(document).on('keypress',".number",function (e) {
          if ((event.which != 46 || $(this).val().indexOf('.') != -1) &&
            ((event.which < 48 || event.which > 57) &&
              (event.which != 0 && event.which != 8))) {
            event.preventDefault();
          }

          var text = $(this).val();

          if ((text.indexOf('.') != -1) &&
            (text.substring(text.indexOf('.')).length > 2) &&
            (event.which != 0 && event.which != 8) &&
            ($(this)[0].selectionStart >= text.length - 2)) {
            event.preventDefault();
          }
    });
}); 
$(document).on("keypress", ".emailspecialvalidation", function (e) {
    var keyCode = e.which;
    if (keyCode == 46 || keyCode == 64 || keyCode == 95 || keyCode == 45) {
        return true;
    } else if (!((keyCode >= 48 && keyCode <= 57)
        || (keyCode >= 65 && keyCode <= 90)
        || (keyCode >= 97 && keyCode <= 122))
        && keyCode != 8 && keyCode != 32) {
        return false;
    }
});

$(document).on("keypress", ".specialvalidationdot", function (e) {
    var keyCode = e.which;
    if (((keyCode < 48 || keyCode > 57)) && keyCode != 46) {
        event.preventDefault();
    }
});

$(document).on("keypress keyup blur", ".numeric", function (e) {
    $(this).val($(this).val().replace(/[^\d].+/, ""));
    if ((event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
});