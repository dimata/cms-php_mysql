<div id="console-debug">
    <?php
        $all_vars = get_defined_vars();

    ?>

    <h1> All variables</h1>

        <pre>
            <?php print_r($all_vars);?>
        </pre>

    <h1>Page Array</h1>
        <pre>
            <?php print_r($page);    ?>
        </pre>

    <h1>GET</h1>
        <pre>
            <?php print_r($_GET);    ?>
        </pre>

    <h1>POST</h1>
        <pre>
            <?php print_r($_POST);    ?>
        </pre>






</div>