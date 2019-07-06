document.addEventListener('DOMContentLoaded', function(){ 
    console.log(document.getElementById("js-timezone").value);
    document.getElementById("js-timezone").innerHTML = Intl.DateTimeFormat().resolvedOptions().timeZone;
});