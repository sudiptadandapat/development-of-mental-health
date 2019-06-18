<!DOCTYPE html>
<html>
    <head>
        <title> Mental Health Test</title>
        <link href ="quiz.css" rel="stylesheet" >
        <script>
      function results(){
          
       
       var imagetest1 = document.getElementById('imagetest1').value;
        document.write(imagetest1 + "</br>");
    
        
       
   }
            

     // document.getElementById("after_submit").style.visibility = "visible";
</script>

        
    </head>
    <body>
        <h1>Image Perception</h1>
        
        <form onsubmit="results();" method="post" id="quiz" style="width: 1000px;" name="quiz">
<!-- image section--->
 <img src="https://www.schweizer-illustrierte.ch/sites/default/files/styles/landscape-1280x854/public/teaser-images/web-sb10062916kk-001.jpg.jpg?itok=SFqtXUL0"  height="200" width="450" />

    <p>This made me:: </p><input id="imagetest1" type="text" value="" placeholder="write the emotion that you feel after seeing this img" size="63"/></br>
</form>
<!submit button---->


<input id="button" type="button" value="Submit!" onclick="check();"></br>
    
        </form>
<div id ="after_submit">
<p id ="message"></p>
    <p id ="number_correct"></p>

    </body>
</html>