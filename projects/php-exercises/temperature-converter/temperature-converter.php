<?php

    $choice = '';
    $temp = '';
    $result = '';
    $error = '';

    if (isset($_POST['choice-submit'])) {
        
        if (isset($_POST['choice'])) {
            $choice = strtolower($_POST['choice']);
        }

        if ($choice != "c" && $choice != "f") {
            $error =  "<p style='color:red;''>I need either C or F as input</p>";
            $choice = '';
        } 
    }

    if (isset($_POST['temp-submit'])) {

        if (isset($_POST['choice'])) {
            $choice = strtolower($_POST['choice']);
        }

        if (isset($_POST['temp'])) {
            $temp = $_POST['temp'];

            if ($_POST['temp'] !== '') {

                if (($choice) == 'c') {
                    $result = round(($temp - 32) * 5 / 9, 1);
                } else {
                    $result = round(($temp * 9 / 5) + 32, 1);
                }
            }
        } 
    }

    if (isset($_POST['reset'])) {
        $choice = '';
        $temp = '';
        $result = '';
    }
?>

<a id='temp'></a>

<form action='index.php?ex=temperature-converter' method='POST'>

    <h3>Temperarture converter</h3>
    <p>Receives a temperature either in Celsius or Fahrenheit and converts it</p>

    <?php if ($error): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if (!$choice): ?>

        <div class='field'>
            <label for='choice'>Enter C to convert from Fahrenheit to Celsius.<br>Enter F to convert from Celsius to Fahrenheit.</label>
            <input id='choice' type='text' name='choice' maxlength='1' required>
        </div>

        <button type='submit' name='choice-submit'>Submit</button>

    <?php elseif ($result === ''): ?>

        <div class='field'>
            <label for='temp'>Please enter the temperature in <?php echo $choice == 'c' ? 'Fahrenheit:' : 'Celsius:'; ?> </label>
            <input id='temp' type='number' name='temp' step='0.1' required>
            <input type="hidden" name="choice" value="<?php echo $choice; ?>">
        </div>

        <button type='submit' name='temp-submit'>Submit</button>

    <?php else: ?>

        <p><em>The temperature in <?php echo $choice == 'c' ? ' Celsius is: ' : ' Fahrenheit is: ' ?> <?php echo $result ?> degrees.</em></p>
        <button type="submit" name="reset">Start over</button>

    <?php endif; ?>

</form>