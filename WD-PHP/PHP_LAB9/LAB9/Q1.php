<?php
// Include the Stack class definition
class Stack
{
    public $data = [];

    function push($value)
    {
        array_push($this->data, $value);
    }

    function pop()
    {
        return array_pop($this->data);
    }

    function __toString()
    {
        return json_encode($this);
    }
}

session_start();

$Browser = isset($_SESSION['STACK']) ? $_SESSION['STACK'] : new Stack();

if (isset($_POST['view'])) {
    // No need to set $_POST["visited"] here, instead set the textarea value below.
}

if (isset($_POST["visitBtn"])) {
    $Browser->push($_POST['visit']);
    $_SESSION['STACK'] = $Browser;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Enter Site Url:<input type="url" name="visit" id=""><br />
        <br>
        <button type="submit" name="visitBtn">Visit Site</button>
        <button type="submit" name="view">View History</button><br>
        <br>
        <textarea name="visited" id="" cols="30" rows="10" placeholder="last visited..."><?php echo implode("\n", $Browser->data); ?></textarea>
    </form>
</body>

</html>