$text = $_POST['myText'];

$prev = file_get_contents('sjiraffen.js');
$prev = json_decode($prev);

$prev[]['tekst'] = $text;

$prev = json_encode($prev);

file_put_contents('sjiraffen.js', $prev);

header('Location: sjiraffen.php');
