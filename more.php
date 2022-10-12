<!DOCTYPE html>

<html>
    <body>

        <button>press</button>
        <?php
            $r = mail("s22261@lsc.hk", "Subject", "<h1>Message</h1>")
            if ($r == true) {
                echo "Message sent successfully...";
             } else {
                echo "Message could not be sent...";
             }
        ?>

    </body>
<script>
    const button = document.querySelector("button")

</script>
</html>