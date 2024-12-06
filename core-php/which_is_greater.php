<!-- agar hume $a  aur $b  dea ho   -->



        <!-- method 1 -->
        <?php
            $a = 10;
            $b = 30;

            echo $a > $b ? "$a is greater" : "$b is greater";
        ?>



        <!-- method 2 -->
        <?php
            $a = 10;
            $b = 30;

            $greater = max($a, $b);

            echo "$greater is greater";
        ?>


        <!-- method 3  -->
        <?php
        $a = 10;
        $b = 30;

        if ($a > $b) {
            echo "$a is greater than $b";
        } elseif ($a < $b) {
            echo "$b is greater than $a";
        } else {
            echo "Both values are equal";
        }
        ?>
