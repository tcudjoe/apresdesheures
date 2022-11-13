<?php
    class Functions {
        function titleName() {
            if (isset($_GET["content"])) {
            print($_GET["content"]);
            } else {
            print("home");
            }
        }
    }