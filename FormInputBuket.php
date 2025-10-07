<?php
class FormInputBuket {
    private $action;
    private $method;

    public function __construct($action, $method="POST") {
        $this->action = $action;
        $this->method = $method;
    }

    public function open() {
        echo "<form action='{$this->action}' method='{$this->method}'>";
    }

    public function close() {
        echo "</form>";
    }

    // Input text
    public function inputText($name, $label, $value="") {
        echo "<label>$label: <input type='text' name='$name' value='$value'></label><br>";
    }

    // Radio button
    public function inputRadio($name, $label, $options = []) {
        echo "<label>$label:</label><br>";
        foreach($options as $value => $text) {
            echo "<input type='radio' name='$name' value='$value'> $text<br>";
        }
    }

    // Checkbox
    public function inputCheckbox($name, $label, $options = []) {
        echo "<label>$label:</label><br>";
        foreach($options as $value => $text) {
            echo "<input type='checkbox' name='{$name}[]' value='$value'> $text<br>";
        }
    }

    // Select / dropdown
    public function select($name, $label, $options = []) {
        echo "<label>$label: <select name='$name'>";
        foreach($options as $value => $text) {
            echo "<option value='$value'>$text</option>";
        }
        echo "</select></label><br>";
    }

    // Textarea
    public function textarea($name, $label) {
        echo "<label>$label: <textarea name='$name'></textarea></label><br>";
    }

    // Submit button
    public function submit($value="Submit") {
        echo "<input type='submit' value='$value'>";
    }
}
?>
