<?php
include "ascon.php";

$sid = $_POST["stateid"];
$q = mysqli_query($conn, "SELECT * FROM city WHERE stateid = $sid");

// if (!$q) {
//     die("Error: " . mysqli_error($conn)); // Print the error message
// }

?>
<select id="city" class="form-control">
<option>Select City</option>
    <?php
    while ($state = mysqli_fetch_assoc($q)) {
    ?>
        <option value="<?php echo $state['city_id']; ?>"><?php echo $state['city_name']; ?></option>
    <?php
    }
    ?>
</select>
