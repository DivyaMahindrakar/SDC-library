<?php
include_once('connect.php');
$query="select * from vote order by id desc";
$res=mysql_query($query);

?>

<html >
<head>
<title>Like page</title>
<link rel="stylesheet" type="text/css" href="style1.css" />
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
function changeLikeDislike(type,id){
      var dataString = 'id='+ id + '&type=' + type;
      $("#product_flash_"+id).show();
      $("#product_flash_"+id).fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: "changeLikeDislike.php",
      data: dataString,
      cache: false,
      success: function(result){
               if(result){
                    var position=result.indexOf("||");
                    var warningMessage=result.substring(0,position);
                    if(warningMessage=='success'){
                         var successMessage=result.substring(position+2);
                         $("#product_flash_"+id).html('&nbsp;');
                         $("#product_"+type+"_"+id).html(successMessage);
                    }else{
                         var errorMessage=result.substring(position+2);
                         $("#product_flash_"+id).html(errorMessage);
                    }
              }
      }
      });
}
</script>
</head>
<body>
  <div id="wrapper">
          <?php
          if(mysql_num_rows($res) >0){
             while($product=mysql_fetch_array($res)){
               echo '<div class="product_list">';
                      echo '<div class="product_name">'.$product['name'].'</div>';
                      echo '<div class="product_flash" id="product_flash_'.$product['id'].'">&nbsp;</div>';
                      echo '<div class="product_like"><img src="image/like.png" onclick=changeLikeDislike("like","'.$product['id'].'")> <span id="product_like_'.$product['id'].'">'.$product['pLike'].'</span></div>';
                      echo '<div class="product_dislike"><img src="image/dislike.png" onclick=changeLikeDislike("dislike","'.$product['id'].'")> <span id="product_dislike_'.$product['id'].'">'.$product['pDislike'].'</span></div>';

               echo '</div>';
             }
          }else{
               echo 'Data Not Found';
          }
          ?>
    </div>

   
</body>
</html>
