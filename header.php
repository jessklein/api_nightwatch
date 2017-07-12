<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <title>Night Watch Guild Team/Roster Info</title>
    <?php
        //header added because I was still having issues with special characters on my server
        header('Content-type: text/html; charset=UTF-8') ;
        
        //set up Database - I'm still waiting for my keys so I've removed those lines for now
        include('connection.php');
        
        //include Thomas's library class
        include('BattlenetArmory.class.php');
        
        //Set up for server - I've altered cache values because with 807 toons in the guild, no matter what I did I was gonna hit the damn cap and as I said - still waiting on keys
        $armory = new BattlenetArmory('US','Illidan'); //ex. ('US', 'Exodar')
        $armory->setLocale('en_US'); //ex. ('en_US')
        $armory->setGuildsCacheTTL(600000);
        $armory->setCharactersCacheTTL(600000);
        $armory->UTF8(TRUE);
        
        //grab guild
        $guild=$armory->getGuild('Roadhouse');
        
        $guild_ranks = array('0'=>"Captain",
                     '1'=>"Captain",
                     '2'=>"Lieutenant",
                     '3'=>"Veteran",
                     '4'=>"Soldier",
                     '5'=>"Social",
                     '6'=>"Recruit",
					 '7'=>"");
        $guild->setGuildRankTitles($guild_ranks);

        //get roster
        $members = $guild->getMembers('name','asc'); // sorts asc by name
    ?>
    <link rel="stylesheet" href="../jquery/themes/blue/style.css" type="text/css" id="" media="print, projection, screen" />
    <link rel="stylesheet" href="default.css" type="text/css" id="" media="print, projection, screen" />
    <script type="text/javascript" src="../jquery/jquery-latest.js"></script>
    <script type="text/javascript" src="../jquery/jquery.tablesorter.js"></script>
    <script type="text/javascript" src="../jquery/picnet.table.filter.js"></script>
    <script type="text/javascript">
        $(document).ready(function()  { 
            $("#85s").tablesorter(); 
        } ); 
    </script>
</head>
<body>
    <div id="header">
        <img src="img/logo.png" alt="" />
    </div>