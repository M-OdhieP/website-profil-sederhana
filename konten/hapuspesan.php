<?php

mysqli_query($db, "DELETE FROM pesan WHERE
id='$_GET[id]'");

echo "<meta http-equiv='refresh' content='0; url=?tampil=pesanmasuk'>";
?>