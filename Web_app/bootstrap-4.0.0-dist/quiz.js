function check(){
    var question1=document.quiz.question1.value;
    var question2=document.quiz.question2.value;
    var question3=document.quiz.question3.value;
    var question4=document.quiz.question4.value;
    var question5=document.quiz.question5.value;
    var question6=document.quiz.question6.value;
    var question7=document.quiz.question7.value;
    var question8=document.quiz.question8.value;
    var question9=document.quiz.question9.value;
    var question10=document.quiz.question10.value;
    var correct = 0;
     
    if(question1 == "never"){
        correct++;
    }
    if (question2 == "not yet"){
        correct++;
    }
    if(question3 == "never ever")
        {
           correct++; 
        }
     if(question4 == "kind of"){
        correct++;
    }
     if(question5 == "much confident"){
        correct++;
    }
     if(question6 == "no"){
        correct++;
    }
     if(question7 == "yes"){
        correct++;
    }
     if(question8 == "not at all"){
        correct++;
    }
     if(question9 == "not at all"){
        correct++;
    }
     if(question10 == "not at all"){
        correct++;
    }
   
    var messages =[ "Great job", "it's okay", "Let's make you mentally sound"];

   function results(){
       
       var imagetest1 = document.getElementById('imagetest1').value;
       var imagetest1 = document.getElementById('imagetest2').value;
       var imagetest1 = document.getElementById('imagetest3').value;
       var imagetest1 = document.getElementById('imagetest4').value;
       var imagetest1 = document.getElementById('imagetest5').value;
       var imagetest1 = document.getElementById('imagetest6').value;
       
        document.write(imagetest1 + "</br>");
        document.write(imagetest2 + "</br>");
        document.write(imagetest3 + "</br>");
        document.write(imagetest4 + "</br>");
        document.write(imagetest5 + "</br>");
        document.write(imagetest6 + "</br>");
        
       
   } 
      document.getElementById("after_submit").style.visibility = "visible";
    
   
    var messages =[ "Great job", "it's okay", "Let's make you mentally sound"];
   
    /*function httpGet(theUrl)
    {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
}*/
   
    var range;
    if(correct<=3){
        range =2;
    }
    if(correct >3 && correct<7)
        {
            range = 1;
        }
    if (correct>=7){
        range = 0;
    }
    document.getElementById("after_submit").style.visibility = "visible";
    
    document.getElementById("message").innerHTML = messages[range];
    
    document.getElementById("number_correct").innerHTML = "You got " +correct + " correct.";
    
}