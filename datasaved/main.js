//Código para Datables 

//$('#example').DataTable(); //Para inicializar datatables de la manera más simple

$(document).ready(function() {
    $('#mainTable').DataTable({
    //para cambiar el lenguaje a español
        "languaje": {
            "lenghtMenu": "Mostrar_MENU_registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de un _MAX_ registros)",
            "sSearch": "Buscar:", 
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious":"Anterior"
            },
            "sProcessing":"Procesando...",

        }
    });


});

