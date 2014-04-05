<?php
/*
 * Ajax Functions for Users CRUD
 */
?>

<script type="text/javascript">

    $(document).ready(function() {

        //Prepare jTable
        $('#frond_users_crud').jtable({
            title: 'Usuarios',
            paging: true,
            pageSize: 2,
            sorting: true,
            defaultSorting: 'Name ASC',
            actions: {
                listAction: 'public/test_actions.php?action=list',
                createAction: 'public/test_actions.php?action=create',
                updateAction: 'public/test_actions.php?action=update',
                deleteAction: 'public/test_actions.php?action=delete'
            },
            fields: {
                PersonId: {
                    key: true,
                    create: false,
                    edit: false,
                    list: false
                },
                Name: {
                    title: 'Author Name',
                    width: '40%'
                },
                Age: {
                    title: 'Age',
                    width: '20%'
                },
                RecordDate: {
                    title: 'Record date',
                    width: '30%',
                    type: 'date',
                    create: false,
                    edit: false
                }
            }
        });

        //Load person list from server
        $('#frond_users_crud').jtable('load');

    });

</script>

