<?php
// Display any form validation error messages
echo validation_errors();

// Using the form helper to help create the start of the form code
echo form_open("sitepointform");
?>
   <label for="first">First Name</label>
   <input type="text" name="first"><br>

   <label for="last">Last Name</label>
   <input type="text" name="last"><br>

   <label for="email">Email Address</label>
   <input type="text" name="email"><br>

   <input type="submit" name="submit" value="Submit">
 </form>
</html>