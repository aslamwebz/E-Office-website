<?php
require_once 'config.php';
include 'templates/admin-header.php';


?>

<style>

#search-form{
    padding:50px;
    margin:50px 50px;
}

#searchResult{
    padding:50px;
    margin:50px 50px;
}

</style>

<div id="search-form">
    <div class="container">
        <h2 class="text-center">Search...</h2>
        <div class="col-md-12 text-center">
             <!-- <form action="" class="input-group" method="post">  -->
            <div class="input-group">
            <input type="text" class="form-control" id="keyword" name="keyword">
            <div class="input-group-append">
                <button class="btn btn-primary" onClick="search()">
                <i class="fas fa-search"></i>
                </button>
             </div>
</div>
             <!-- </form>  -->
        </div>
    </div>
</div>


<div id="searchResult">
    <div class="container">
        <div id="theContent"></div>
    </div>
</div>



<?php include 'templates/footer_scripts.php'; ?>


<script>
function search(){
    keyword = $("#keyword").val();
    $.ajax({
        type:'post',
        url:'templates/search.php',
        data: {'keyword':keyword, 'submit':'submit'},
        success: function(response){
            $('#theContent').html(response);
        }
    })
    
}
</script>


