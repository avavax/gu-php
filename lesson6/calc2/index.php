<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   <input type="number" id="val1" value="">
   <button class='action' value='+'> + </button>
   <button class='action' value='-'> - </button>
   <button class='action' value='*'> * </button>
   <button class='action' value='/'> / </button>
   <input type="number" id="val2" value="">
   <span > = </span>
   <input type="text" id="val3" value=""><br>

<script>
$(document).ready(function() {

    $(".action").on('click', function(item) {
        var operand1 = $("#val1").val();
        var operand2 = $("#val2").val();
        var operation = item.target.value;

        $.ajax({
            url: "add.php",
            type: "POST",
			dataType : "json",
            data:{
                operand1: operand1,
                operand2: operand2,
                operation: operation
            },
            error: function() {alert("Что-то пошло не так...");},
            success: function(answer){
           	  $('#val3').val(answer.result);				
            }
            
        })
    });

});
</script>

	