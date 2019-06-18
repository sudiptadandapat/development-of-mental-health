      var images  = [];
      var imageInput  = document.getElementById("image");
      
      var messageBox  = document.getElementById("display");
      
      function insert ( ) {
            images.push( imageInput.value );
            clearAndShow();
            }
      function clearAndShow () {
             // Clear our fields
             imageInput.value = "";
  
             // Show our output
               messageBox.innerHTML = "";
               messageBox.innerHTML += "Values: " + images.join(", ") + "<br/>";
               }