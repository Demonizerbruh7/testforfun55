<?php 
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $video = "{https://12-str04-3201-prod.tv.cetin.cz/bpk-token/2AE@5ahr51uk2e4pdgiazrufzoc5xbhyj25g5grrjwaa/bpk-tv/2023/output0/manifest.mpd?bkm-query $id}";
    echo "<video controls><source src='{$video}' type='application/dash+xml'></video>";

} else {
    echo "File not found.";
}
?>
