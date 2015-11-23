<?php require_once "../layout/master-page-header.php" ?>
    
    <br />

    <div id="messages"></div>

    <div id="tbllocal"></div>

    <br />

    <div id="tblclientes"></div>

    <script type="text/javascript">

        $(function() {
            console.log( "ready!" );

            $('#tbllocal').puidatatable({
                caption: 'Local Datasource',
                paginator: {
                    rows: 5
                },
                columns: [
                    {field:'vin', headerText: 'Vin', sortable:true},
                    {field:'brand', headerText: 'Brand', sortable:true},
                    {field:'year', headerText: 'Year', sortable:true},
                    {field:'color', headerText: 'Color', sortable:true}
                ],
                datasource: [
                    {'brand':'Volkswagen','year': 2012, 'color':'White', 'vin':'dsad231ff'},
                    {'brand':'Audi','year': 2011, 'color':'Black', 'vin':'gwregre345'},
                    {'brand':'Renault','year': 2005, 'color':'Gray', 'vin':'h354htr'},
                    {'brand':'Bmw','year': 2003, 'color':'Blue', 'vin':'j6w54qgh'},
                    {'brand':'Mercedes','year': 1995, 'color':'White', 'vin':'hrtwy34'},
                    {'brand':'Opel','year': 2005, 'color':'Black', 'vin':'jejtyj'},
                    {'brand':'Honda','year': 2012, 'color':'Yellow', 'vin':'g43gr'},
                    {'brand':'Chevrolet','year': 2013, 'color':'White', 'vin':'greg34'},
                    {'brand':'Opel','year': 2000, 'color':'Black', 'vin':'h54hw5'},
                    {'brand':'Mazda','year': 2013, 'color':'Red', 'vin':'245t2s'}
                ],
                selectionMode: 'single',
                rowSelect: function(event, data) {
                    $('#messages').puigrowl('show', [{severity:'info', summary: 'Row Selected', detail: (data.brand + ' ' + data.vin)}]);
                    
                },
                rowUnselect: function(event, data) {
                    $('#messages').puigrowl('show', [{severity:'info', summary: 'Row Unselected', detail: (data.brand + ' ' + data.vin)}]);
                }
            });

            $('#tblclientes').puidatatable({
                caption: 'Remote Restful Webservice',
                paginator: {
                    rows: 5
                },
                columns: [
                    {field:'id', headerText: 'Id', sortable:true},
                    {field:'nome', headerText: 'Nome', sortable:true},
                    {field:'idade', headerText: 'Idade', sortable:true},
                ],

                datasource: function(callback) {
                    $.ajax({
                        type: "GET",
                        url: 'rest.php',
                        dataType: "json",
                        context: this,
                        success: function(response) {
                            callback.call(this, response);
                        }
                    });
                },

                selectionMode: 'multiple',
                rowSelect: function(event, data) {
                    //$('#messages').puigrowl('show', [{severity:'info', summary: 'Row Selected', detail: (data.nome + ' ' + data.idade)}]);
                    window.location = 'datatable.php?id=' + data.id;
                },

                rowUnselect: function(event, data) {
                    $('#messages').puigrowl('show', [{severity:'info', summary: 'Row Unselected', detail: (data.nome + ' ' + data.idade)}]);
                }
            });
            
            $('#messages').puigrowl();
        });

    </script>

<?php require_once "../layout/master-page-footer.php" ?>    