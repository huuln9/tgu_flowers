<h2>page2</h2>

<?php
while ($row = $data["sv"]->fetch_assoc()) {
    echo $row["hoten"];
}
?>