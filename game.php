<?php
$dice = 1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dice = rand(1, 6);
}
?>

<div class="dice-container">
    <img id="dice" src="dice<?php echo $dice; ?>.png" alt="Dice">
</div>
<p>Hasil: <span id="result"><?php echo $dice; ?></span></p>
<form method="post" id="diceForm">
    <input type="hidden" id="diceValue" name="diceValue" value="<?php echo $dice; ?>">
    <button type="submit">Lempar Dadu</button>
</form>

<script>
    document.getElementById("diceForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting immediately
        let diceImage = document.getElementById("dice");
        diceImage.classList.add("roll");

        setTimeout(() => {
            // Get new dice value
            let newDiceValue = Math.floor(Math.random() * 6) + 1;

            // Update hidden input value
            document.getElementById("diceValue").value = newDiceValue;

            // Update the result span
            document.getElementById("result").innerText = newDiceValue;

            // Update the dice image
            diceImage.src = "dice" + newDiceValue + ".png";
            diceImage.classList.remove("roll");

            // Submit the form
            document.getElementById("diceForm").submit();
        }, 2000); // Delay for animation duration (2s)
    });
</script>
