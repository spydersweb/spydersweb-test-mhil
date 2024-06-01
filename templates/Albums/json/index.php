<?php
foreach ($albums as $album) {
    unset($album->generated_html);
}
echo json_encode(compact('albums'));