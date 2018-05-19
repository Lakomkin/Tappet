<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 

   <script>
     function before (){
        $("#info").text ("waiting");
     }

      function success (data){
        $("#info").text (data);
     }

     $(document).ready (function (){
        $("#load").blind("click", function() {
          var fio = "lol";
            $.ajax({ 
              url :"IniMarcker.php",
              type : "POST",
              data : ({name : fio, number : 5}),
              dataType : "html",
              beforeSend : before ,
              success: success

            });
        });
     });
   </script>  

  <title>lol</title>
</head>
<body>
  <div id="load" style=" cursor: pointer;">down</div>
  <div id="info"></div>
</body>
</html>