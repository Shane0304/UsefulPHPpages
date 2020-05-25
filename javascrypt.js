function val() {

    var e = document.forms["myform"]["email"].value;
    if (e.search(/\S+@\S+\.\S+/)) {
        alert("email must be filled out");
        return false;
    }

}