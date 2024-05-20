<html>
    <head>
        <title>OVS - Admin Dashboard</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../css/icon.jpg">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <a href="../index.php"><button id="back-button"> Back</button></a>
            <a href="logout.php"><button id="logout-button">Logout</button></a>
            <!-- <h1>VoTe</h1>
            <h2>Dashboard</h2> -->
            </div><br><br><br>
            
            <hr>

            <div id="mainSection">
                <div id="profileSection">
                    <img src="../css/image2.png" height="100" width="100"><br><br>
                    <b>Name : Admin</b><br><br>
                    <b>Mobile : 0010020030</b><br><br>
                    <b>Address : none</b><br><br>
                </div>
                <div id="groupSection">
                    <?php

                    if(isset($_SESSION['groups'])){
                        $groups = $_SESSION['groups'];
                        for($i=0; $i<count($groups); $i++){
                            ?>
                                <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <img style="float: right" src="../uploads/<?php echo $groups[$i]['photo']?>" height="80" width="80">
                                <b>Group Name : </b><?php echo $groups[$i]['name']?><br><br>
                                <b>Votes :</b> <?php echo $groups[$i]['votes']?><br><br>
                                <!-- <form method="POST" action="../api/vote.php">
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                                <?php

                                if($_SESSION['status']==1){
                                    ?>
                                    <button disabled style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px;" type="button">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button style="padding: 5px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px;" type="submit">Vote</button>
                                    <?php
                                }
                                ?>
                                </form> -->
                                </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <b>No groups available right now.</b>    
                            </div>
                        <?php
                    }  
                    ?>
                </div>
            </div> 
            </center>
    </body>
</html>