<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function mostrar(id) {

    if (id == "Licenciatura") {
        $("#licenciatura").show();
        $("#posgrado").hide();
    }

   if (id == "Posgrado") {
        $("#licenciatura").hide();
        $("#posgrado").show();
    }

   else {
        $("#licenciatura").hide();
        $("#posgrado").hide();
    }
}
</script>