<?php
function staff_extension($extensionNumber) {
    static $staff_numbers = array (
        1111 => "Mike Crabb",
        2222 => "John Isaacs",
        3333 => "Robert McDermott"
    );
}

foreach ($staff_numbers as $key => $value) {

    if ($extensionNumber == $key) {
        $staffName = $value;
    }
    if (empty($staffName)) {
        echo "No user at this extension";
    } else {
        echo "The user at this extension is " . $staffName;
    }
}
