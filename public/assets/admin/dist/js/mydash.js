

function checkRadio(name) {
    if(name == "vpni"){

        document.getElementById("form1").style.display = "none";
        document.getElementById("form2").style.display = "none";
        document.getElementById("form02").style.display = "none";
        document.getElementById("http").checked = false;
        document.getElementById("socks4").checked = false;
        document.getElementById("socks4a").checked = false;
        document.getElementById("socks5").checked = false;

        document.getElementById('validing').style.display = "none";
        document.getElementById("vpni").checked = true;
        document.getElementById("singlei").checked = false;
        document.getElementById("listi").checked = false;
        document.getElementById("form0").style.display = "block";

        return false;

    }
    else if (name == "singlei"){

        document.getElementById("form1").style.display = "none";
        document.getElementById("form0").style.display = "none";
        document.getElementById("http").checked = false;
        document.getElementById("socks4").checked = false;
        document.getElementById("socks4a").checked = false;
        document.getElementById("socks5").checked = false;

        document.getElementById('validing').style.display = "none";
        document.getElementById("singlei").checked = true;
        document.getElementById("listi").checked = false;
        document.getElementById("vpni").checked = false;
        //document.getElementById("form2").style.display = "block";
        document.getElementById("form02").style.display = "block";

        return false;

    } else if (name == "listi"){

        document.getElementById("listi").checked = true;
        document.getElementById("singlei").checked = false;
        document.getElementById("vpni").checked = false;

        document.getElementById("http").checked = false;
        document.getElementById("socks4").checked = false;
        document.getElementById("socks4a").checked = false;
        document.getElementById("socks5").checked = false;

        document.getElementById("form2").style.display = "none";
        document.getElementById("form0").style.display = "none";
        //document.getElementById("form1").style.display = "block";
        document.getElementById("form02").style.display = "block";

        return false;
    }else{
        document.getElementById("vpni").checked = false;
        document.getElementById("singlei").checked = false;
        document.getElementById("listi").checked = false;
        document.getElementById("socks5").checked = false;
    }
}

function checkPtype(name) {
    if(name == "http"){
        document.getElementById("http").checked = true;
        document.getElementById("socks4").checked = false;
        document.getElementById("socks4a").checked = false;
        document.getElementById("socks5").checked = false;
        if(document.getElementById("singlei").checked === true){
            //document.getElementById("form02").style.display = "none";
            document.getElementById("form1").style.display = "none";
            document.getElementById("form0").style.display = "none";

            document.getElementById("form2").style.display = "block";
        }
        if(document.getElementById("listi").checked === true){
            //document.getElementById("form02").style.display = "none";
            document.getElementById("form2").style.display = "none";
            document.getElementById("form0").style.display = "none";

            document.getElementById("form1").style.display = "block";
        }
        if(document.getElementById("vpni").checked === true){
            //document.getElementById("form02").style.display = "none";
            document.getElementById("form2").style.display = "none";
            document.getElementById("form1").style.display = "none";

            document.getElementById("form0").style.display = "block";
        }

        return false;

    }
    else if (name == "socks4"){
        document.getElementById("http").checked = false;
        document.getElementById("socks4").checked = true;
        document.getElementById("socks4a").checked = false;
        document.getElementById("socks5").checked = false;
        if(document.getElementById("singlei").checked === true){
            //document.getElementById("form02").style.display = "none";
            document.getElementById("form1").style.display = "none";
            document.getElementById("form0").style.display = "none";

            document.getElementById("form2").style.display = "block";
        }
        if(document.getElementById("listi").checked === true){
            //document.getElementById("form02").style.display = "none";
            document.getElementById("form2").style.display = "none";
            document.getElementById("form0").style.display = "none";

            document.getElementById("form1").style.display = "block";
        }
        if(document.getElementById("vpni").checked === true){
            //document.getElementById("form02").style.display = "none";
            document.getElementById("form2").style.display = "none";
            document.getElementById("form1").style.display = "none";

            document.getElementById("form0").style.display = "block";
        }

        return false;

    }
    else if (name == "socks4a"){
        document.getElementById("http").checked = false;
        document.getElementById("socks4").checked = false;
        document.getElementById("socks4a").checked = true;
        document.getElementById("socks5").checked = false;
        if(document.getElementById("singlei").checked === true){
            //document.getElementById("form02").style.display = "none";
            document.getElementById("form1").style.display = "none";
            document.getElementById("form0").style.display = "none";

            document.getElementById("form2").style.display = "block";
        }
        if(document.getElementById("listi").checked === true){
            //document.getElementById("form02").style.display = "none";
            document.getElementById("form2").style.display = "none";
            document.getElementById("form0").style.display = "none";

            document.getElementById("form1").style.display = "block";
        }
        if(document.getElementById("vpni").checked === true){
            //document.getElementById("form02").style.display = "none";
            document.getElementById("form2").style.display = "none";
            document.getElementById("form1").style.display = "none";

            document.getElementById("form0").style.display = "block";
        }

        return false;

    }
    else if (name == "socks5"){
        document.getElementById("http").checked = false;
        document.getElementById("socks4").checked = false;
        document.getElementById("socks4a").checked = false;
        document.getElementById("socks5").checked = true;
        if(document.getElementById("singlei").checked === true){
            //document.getElementById("form02").style.display = "none";
            document.getElementById("form1").style.display = "none";
            document.getElementById("form0").style.display = "none";

            document.getElementById("form2").style.display = "block";
        }
        if(document.getElementById("listi").checked === true){
            //document.getElementById("form02").style.display = "none";
            document.getElementById("form2").style.display = "none";
            document.getElementById("form0").style.display = "none";

            document.getElementById("form1").style.display = "block";
        }
        if(document.getElementById("vpni").checked === true){
            //document.getElementById("form02").style.display = "none";
            document.getElementById("form2").style.display = "none";
            document.getElementById("form1").style.display = "none";

            document.getElementById("form0").style.display = "block";
        }

        return false;
    }
    else{
        document.getElementById("http").checked = false;
        document.getElementById("socks4").checked = false;
        document.getElementById("socks4a").checked = false;
        document.getElementById("socks5").checked = false;
    }
}

function myFunction() {

    var x = document.forms["form1"]['customtext'].value;
    if (x.length == 0) {
        alert('Please paste IP lists');
        return false;
    }else{
        document.getElementById('form1').submit();
        return false;
    }

}

function mySave() {
    var w = document.forms["form2"]['siingle'].value;
    if (w.length == 0) {
        alert('Please Enter Proxy with Port');
        return false;
    }else{
        document.getElementById('form2').submit();
        return false;
    }
}

function deleteRow(btn) {
    var row = btn.parentNode.parentNode;
    row.parentNode.removeChild(row);
}
