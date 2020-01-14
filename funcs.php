<?php
function clear(){
    global $link;
    foreach ($_POST as $key => $value) {
        $_POST[key] = mysqli_real_escape_string($link,$value);
    }

}

function save_comm () {
    global $link;
    clear();
    extract($_POST);
    $query = "INSERT INTO comments (name, comment) VALUES ('$name','$comment')";
    mysqli_query($link, $query);
}

function get_comm() {
    global $link;
    $query = "SELECT * FROM comments ORDER BY id DESC";
    $res = mysqli_query($link, $query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);

}

?>
