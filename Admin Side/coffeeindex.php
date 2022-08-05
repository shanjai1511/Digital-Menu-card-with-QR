<!DOCTYPE html>
<html>
    <head>
        <title>Coffee - sip chat cafe</title>
        <link rel = "icon" href = "logo.jpg" type = "image/x-icon">
        <link rel="stylesheet" href="edit.css">
    </head>
    <body>
        <form action="coffeeinsert.php" method="post">
        	<h3>Edit your Coffee menu;?</h3>
        	<fieldset>
				<legend>Enter Coffee to add on menu</legend>   
				<label for="item">Item :</label>
            	<input type="text" name="item" id="item">
	            <label for="price">Price :</label>
    	        <input type="text" name="price" id="price">
        	    <label for="id">Id:</label>
            	<input type="text" name="id" id="id">
	            <input type="submit" value="insert" class="button">
			</fieldset>
		</form>
		<form action="coffeedelete.php" method="post">
        	<fieldset>
				<legend>Enter the id of the item to remove</legend>
		        <label for="id">DelId:</label>
        	    <input type="text" name="delid" id="delid">
            	<input type="submit" value="delete" class="button">
			</fieldset>
        </form>
        <button><a href="selection.html">Backtoselection</a></button>
    </body>
</html>