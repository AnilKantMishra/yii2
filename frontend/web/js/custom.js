function myfun() {
    document.getElementById('display').innerHTML = document.getElementById('fname').value;
    document.getElementById('display2').innerHTML = document.getElementById('lname').value;
    console.log(var1)
    console.log(var2)
}

$("#exportbutton").hide();
$(".select-on-check-all").click(function () {
    console.log('selected');
    if ($(this).is(":checked")) {
        $("#exportbutton").show();
    }
    else if ($(this).is(':not(:checked)')) {
        $("#exportbutton").hide();
    }
    else {
        $("#exportbutton").hide();
    }
});

$(document).ready(function () {
    var checkbox = $("input[name='selection[]']");
    var chkId;
    var arr = [];
    $('input').on('click', function () {
        if (checkbox.is(':checked')) {
            $("input[name='selection[]']:checked")
            chkId = $(this).val();

            arr.push(chkId);
            localStorage.setItem("checkarray", arr);
            console.log(arr);
            console.log(localStorage.getItem("checkarray"));
        }

    });
});


