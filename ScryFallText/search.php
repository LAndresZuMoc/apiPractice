<?php 
if (!empty($_GET["cardName"])){
    $scryfall_Url="https://api.scryfall.com/cards/search?order=name&q=".($_GET["cardName"]);
    $scryfall_json = file_get_contents($scryfall_Url);
    $scryfall_array = json_decode($scryfall_json,true);
    
    
    
    
}
?>
<HTML>
   <head>
     <title>Search</title>
   </head>
   <body style="background-color:black">
   <font color="white">
   <center>
      <form action="">
       <input type="text" name="cardName">
       <button type="submit">Search</button>
       <br>
       <?php 
       
       foreach ($scryfall_array["data"] as $image){
           
          echo "Card Name: ". $image["name"];
           
          echo "<br>";
          echo '<img src="'.$image['image_uris']['small'].'"alt=""./>';
          echo "<br>";
          echo "Price: ". $image["prices"]["usd"];
          echo "<br>";
           
           
           
       }
       
       ?>
      
         
      </form>
   </center>
</font>
   </body>
</HTML>
