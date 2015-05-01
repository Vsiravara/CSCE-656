$( document ).ready(function() {
	 $.scoreIncrement = function()
    {
       var score = 0;
     score++;
     document.getElementById("score").innerText="<strong>Score: </strong>" + score; 
    }
 
    /*$( "a" ).click(function( event ) {
 
        alert( "Thanks for visiting!" );
 
    });*/
 
});
	
// $(document).ready(

 // scoreIncrement : function(){
	// var score = 0;
    // score++;
    // document.getElementById("score").innerText="<strong>Score: </strong>" + score; 
// }​
	 // });