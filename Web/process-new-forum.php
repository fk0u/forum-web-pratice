<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $forumTitle = $_POST["forum-title"];
    $forumDescription = $_POST["forum-description"];

    // Simulasi penyimpanan data ke array (bisa diganti dengan database)
    $newForum = array("title" => $forumTitle, "description" => $forumDescription);
    $forumList = json_decode(file_get_contents("forum-data.json"), true);
    array_push($forumList, $newForum);
    file_put_contents("forum-data.json", json_encode($forumList));

    // Simulasi kembali ke halaman utama atau dashboard
    header("Location: index.html");
    exit();
}
?>
