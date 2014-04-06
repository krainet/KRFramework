<?php
/*
 * Ajax Functions for Users CRUD
 */
?>

<script type="text/javascript">

    $(document).ready(function() {

        //Prepare jTable
        $('#submitButton').bind('click',function(){
            $.ajax({
                url: '/ajax/call',
                dataType: 'json',
                async: true,
                type: 'POST',
                data: {
                    'action': 'testAction',                    
                },
                success: function(data){
                        alert('ok!');
                }
               
            });           
        });        

    });

</script>

