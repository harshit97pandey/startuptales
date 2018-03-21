<!DOCTYPE html>
<script>
$(document).ready(function(){
	var skill_array=[];
	
    $('.search-box input[id="skills"]').on("keyup input", function(){
        var term = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(term.length){
            $.get("backend-search.php", {query: term}).done(function(data){
               
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
	
	
	$(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[id="skills"]').val($(this).text());
		skill_array.push($(this).text());
        $(this).parent(".result").empty();
		skill_array.toString();
		document.getElementById("demo").innerHTML = skill_array+skill_array.length;
		//document.getElementById("demo").innerHTML = skill_array;
		
		
    });
	
	});
</script>
<DIV class="product-item float-clear" style="clear:both;">
<DIV class="float-left"><input style="margin-left:15px" type="checkbox" name="item_index[]" /></DIV>
<!--<DIV class="float-left"><input type="text" name="item_name[]" /></DIV>-->
<div class="search-box" style="margin-right:170px">
        <input type="text" autocomplete="off" style="margin-left:50px; margin-top:-20px" name="item_name[]" placeholder="Search skill" id="skills"/>
        <div class="result"></div>
		<p id="demo"></p>
		
		</div>
<!--<DIV class="float-left"><input type="text" name="item_price[]" /></DIV>-->
</DIV>