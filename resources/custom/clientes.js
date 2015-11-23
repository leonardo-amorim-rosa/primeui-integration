$(function() {

	$('#pnlCadastroCliente').puipanel();

	$('#txtNome').puiinputtext();

	$('#txtIdade').puiinputtext();

	$('#btnSalvar').puibutton({
	    icon: 'fa-save',
        click: function(event) {
        	$('#formCliente').submit();
        }	
	});

    $('#tblClientes').puidatatable({
        paginator: {
            rows: 5
        },
        columns: [
            //{field:'id', headerText: 'Id', sortable:true},
            {field:'nome', headerText: 'Nome', sortable:true},
            {field:'idade', headerText: 'Idade', sortable:true},
        ],

        datasource: function(callback) {
            $.ajax({
                type: "GET",
                url: '../../services/clientes/get-all-json.php',
                dataType: "json",
                context: this,
                success: function(response) {
                    callback.call(this, response);
                }
            });
        },

        selectionMode: 'multiple',
        rowSelect: function(event, data) {
            window.location = 'cadastro.php?id=' + data.id;
        },
    });

});