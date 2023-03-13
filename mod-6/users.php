<?php
$file = fopen('users.csv', 'r');

echo '<table border="1">'; ?>
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Image</th>
</tr>
<?php while (($data = fgetcsv($file)) !== FALSE) {
    echo '<tr>';
    foreach ($data as $value) {
        echo "<td>$value</td>";
    }
    echo '</tr>';
}
echo '</table>';

fclose($file);