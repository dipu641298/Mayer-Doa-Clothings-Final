
<?php require_once("../../config.php");

if(isset($_GET['id']))
{
    $query = query("DELETE FROM category WHERE cat_id = '".escape_string($_GET['id'])."' ");
    confirm($query);
    
    set_message("category Deleted");
    redirect("../../../public/admin/index.php?categories");
    
}

else
{
    redirect("../../../public/admin/index.php?categories");
}





?>