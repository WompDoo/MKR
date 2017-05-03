<?php
if (!file_exists('./../admin/uploads')) {
    mkdir('./../admin/uploads', 0777, true);
}
$total = count($_FILES['file']['name']);
for ($i = 0; $i < $total; $i++) {
    echo ".";
    if (file_exists('./../admin/uploads/' . $_FILES['file']['name'])) {
    } else {
        move_uploaded_file($_FILES['file']['tmp_name'], './../admin/uploads/' . $_FILES['file']['name']);
    }
}
