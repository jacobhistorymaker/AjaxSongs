<?php
header('Content-Type: text/xml');
$output = '<?xml version="1.0" encoding="UTF-8"?>';
$output .= "<catalog>";
$output .= "<song>";
$output .= "<title>I Want to Know What Love Is</title>";
$output .= "<artist>Foreigner</artist>";
$output .= "<rating>10</rating>";
$output .= "</song>";
$output .= "<song>";
$output .= "<title>Tragedy</title>";
$output .= "<artist>Bee Gees</artist>";
$output .= "<rating>6</rating>";
$output .= "</song>";
$output .= "<song>";
$output .= "<title>They Dance Alone</title>";
$output .= "<artist>Sting</artist>";
$output .= "<rating>10</rating>";
$output .= "</song>";
$output .= "<song>";
$output .= "<title>Biko</title>";
$output .= "<artist>Peter Gabriel</artist>";
$output .= "<rating>10</rating>";
$output .= "</song>";
$output .= "<song>";
$output .= "<title>Keep On Loving You</title>";
$output .= "<artist>REO Speedwagon</artist>";
$output .= "<rating>9</rating>";
$output .= "</song>";
$output .= "<song>";
$output .= "<title>Sailing</title>";
$output .= "<artist>Christopher Cross</artist>";
$output .= "<rating>9</rating>";
$output .= "</song>";
$output .= "<song>";
$output .= "<title>Beat It</title>";
$output .= "<artist>Michael Jackson</artist>";
$output .= "<rating>7</rating>";
$output .= "</song>";
$output .= "</catalog>";

echo($output);

?>
