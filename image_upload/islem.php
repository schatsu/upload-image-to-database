<?php 

require 'baglan.php';
if ($_FILES['image_url']['error']==4) { 
    
   header("location:index.php?durum=dosya");

}else {

   
    if(is_uploaded_file($_FILES['image_url']['tmp_name'])){

        $gecerli_uzantilar=['image/jpeg','image/png'];
        $boyut=(1024*1024*5);
        $dosya_uzantisi=$_FILES['image_url']['type'];

        if (in_array($dosya_uzantisi,$gecerli_uzantilar)) {

            if ($boyut>=$_FILES['image_url']['size']) {
                
             $target='uploads/';
             $name = $_FILES['image_url']["name"];
             $tmp_name=$_FILES['image_url']['tmp_name'];   
             $upload= move_uploaded_file($tmp_name,"$target/$name");

             $kaydet=$db->prepare("INSERT INTO image  SET
             image_url=:image_url
             ");
             $ekle=$kaydet->execute(array(
             'image_url'=>$name

             ));

                if ($upload) {
                    header("location:index.php?durum=basarili");
                }else {
                    header("location:index.php?durum=basarisiz");
                }

            }
        
        }else {

            header("location:index.php?durum=gecersiz");
        }
                           
    }else {

        header("location:index.php?durum=hata");
      
    }    
}

?>