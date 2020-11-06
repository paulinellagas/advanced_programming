<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assign_one</title>
</head>

<style>
    .container 
    {
        position: absolute;
    }
    .topleft 
    {
        position: relative;
        top: 120px;
        left: 200px;
    }
    #ex2 
    {
        position: relative;
        height: 300px;
        top: 8px;
        left: 600px;
        top: -18px;
    }
    .topright
    {
        position: relative;
        height: 300px;
        top: -345px;
        left: 915px;
    }
</style>

<body>
    <div class="container">
        <div class="topleft">
            <h1>Pauline Jane S. Llagas</h1>
        </div>
        <div id="ex2">
            <h2>Calculator</h2>
            <form action="" method="post">
                <label for="fnum">Input first number:</label></br></br>
                <input type="number" name="fnum" required></br></br>
                
                <label for="snum">Input second number:</label></br></br>
                <input type="number" name="snum" required></br></br>

                <input type="submit" name="add" value="+">
                <input type="submit" name="sub" value="-">
                <input type="submit" name="mul" value="*">
                <input type="submit" name="div" value="/"></br></br>
            </form>

            <?php
                if(isset($_POST['add']))
                {
                    $fnum = $_POST['fnum'];
                    $snum = $_POST['snum'];
                    $add = $fnum + $snum;
                    echo "Answer: " . $add;
                }
                if(isset($_POST['sub']))
                {
                    $fnum = $_POST['fnum'];
                    $snum = $_POST['snum'];
                    $sub = $fnum - $snum;
                    echo "Answer: " . $sub;
                }
                if(isset($_POST['mul']))
                {
                    $fnum = $_POST['fnum'];
                    $snum = $_POST['snum'];
                    $mul = $fnum * $snum;
                    echo "Answer: " . $mul;
                }
                if(isset($_POST['div']))
                {
                    $fnum = $_POST['fnum'];
                    $snum = $_POST['snum'];
                    $div = $fnum / $snum;
                    echo "Answer: " . $div;
                }
            ?>
        </div>
        <div class="topright">
                <h2>Finding GCD</h2>
                <form action="" method="post">
                    <label for="fnum">Input first number:</label></br></br>
                    <input type="number" name="fnum" required></br></br>

                    <label for="snum">Input second number:</label></br></br>
                    <input type="number" name="snum" required></br></br>

                    <input type="submit" name="submit" value="Submit"></br></br>
                </form>
                
                <?php
                    if(isset($_POST['submit']))
                    {
                        $fnum = $_POST['fnum'];
                        $snum = $_POST['snum'];
                        $submit = $_POST['submit'];

                        while ($fnum != $snum) 
                        {
                            if($fnum > $snum)
                                $fnum -= $snum;
                            else
                                $snum -= $fnum;
                        }

                        echo "Answer: " . $fnum;
                    }
                ?>
        </div>
    </div>
    
</body>
</html>
