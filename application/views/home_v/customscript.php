<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>

<script>
    $( document ).ready(function() {
        $("#sortable").sortable();
        $("#sortable").disableSelection();

    });
</script>

<script>
    $(function() {
        $( ".column" ).sortable({
            connectWith: ".column",
            handle: ".portlet-header",
            cancel: ".portlet-toggle",
            placeholder: "portlet-placeholder ui-corner-all"
        });
    });
</script>


