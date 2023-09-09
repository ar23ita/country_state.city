<?php
include "ascon.php";

$cid = $_POST["counid"];
$q = mysqli_query($conn, "SELECT * FROM state WHERE countryid = $cid");

?>
<select id="state" class="form-control">
<option>Select state</option>
    <?php
    while ($state = mysqli_fetch_assoc($q)) {
    ?>
        <option value="<?php echo $state['state_id']; ?>"><?php echo $state['state_name']; ?></option>
    <?php
    }
    ?>
</select>



