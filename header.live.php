<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <title>Night Watch Guild Team/Roster Info</title>
    <?php
        //header added because I was still having issues with special characters on my server
        header('Content-type: text/html; charset=UTF-8') ;
        
        //set up Database - I'm still waiting for my keys so I've removed those lines for now
        include('connection2.php');
        
        //include Thomas's library class
        include('BattlenetArmory.class.php');
        
        //Set up for server - I've altered cache values because with 807 toons in the guild, no matter what I did I was gonna hit the damn cap and as I said - still waiting on keys
        $armory = new BattlenetArmory('US','Illidan'); //ex. ('US', 'Exodar')
        $armory->setLocale('en_US'); //ex. ('en_US')
        $armory->setGuildsCacheTTL(600000);
        $armory->setCharactersCacheTTL(600000);
        
        //grab guild
        $guild=$armory->getGuild('Night Watch');

        //get roster
        $members = $guild->getMembers('name','asc'); // sorts asc by name

        //adding the jquery libraries I'm using - this page uses jquery + two plugins - tablesorter and table filter
        echo ('<script type="text/javascript" id="js">
            //javascript function to load plugins
            $(document).ready(function() {
                $("#85s").tablesorter();
                var options = {
                    clearFiltersControls: [$("#cleanfilters")],            
                };
                $("#85s").tableFilter(options);
            });
        </script>');
    ?>
    <link rel="stylesheet" href="../jquery/themes/blue/style.css" type="text/css" id="" media="print, projection, screen" />
    <link rel="stylesheet" href="default.css" type="text/css" id="" media="print, projection, screen" />
    <script type="text/javascript" src="../jquery/jquery-latest.js"></script>
    <script type="text/javascript" src="../jquery/jquery.tablesorter.js"></script>
    <script type="text/javascript" src="../jquery/picnet.table.filter.js"></script>
</head>
<body>
    <div id="header">
        <img src="img/logo.png" alt="" />
    </div>