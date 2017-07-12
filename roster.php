<h3>Night Watch Guild Roster (85s Only)</h3>
        <table id="85s" class="tablesorter">
            <thead>
                <tr>
                    <th filter-type="ddl">Character</th>
                    <th filter-type="ddl">Class</th>
                    <th filter-type="ddl">Spec 1</th>
                    <th filter-type="ddl">Spec 2</th>
                    <th filter-type="ddl">iLvl</th>
                    <th filter-type="ddl">Resil</th>
                    <th filter-type="ddl">RBG</th>
                    <th filter-type="ddl">HKs</th>
                    <th filter-type="ddl">Rank</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    //setting up a count because of the way I'm generating the table - the sorter wouldn't band the rows for me otherwise
                    $count=0;
                    //for each character in the roster...
                    foreach ($members as $member) {
                        //get character name
                        $mname = $member['character']['name'];
                        //get guild rank
                        $guildrank   = $member['rank'];
                        $grank = $guild_ranks[$guildrank];
                        //get character data
                        $membero = $armory->getCharacter($mname);
                        //get ilvl
                        $gear = $membero->getGear();
                        $milevel = $gear['averageItemLevelEquipped'];
                        // Retrieve stats such as HP,mana,AP,AGIhit,parry etc.
                        $stats = $membero->getStats();
                        /* $mresil = $stats['resil']; */
                        // Returns the complete URL for a character thumbnail
                        $thumbnailurl = $membero->getThumbnailURL();
                        //get character lvl
                        $level = $membero->getLevel();
                        // Get the pvp personal ratings
                        $battlegroundPersonalrating = $membero->getBattlegroundRating();
                        $honorkills = $membero->getHonorKills();
                        //if character is 85
                        if($level==100) {
                            //if character data isn't valid - indicate data not available
                            if(!$membero->isValid()) {
                                echo('<tr><td>Character Data Not Available</td></tr>');
                            } else {
                                //get character class (altered for css)
                                $classname=$membero->getClassName();
                                if($classname=='Death Knight') {
                                    $classname='DeathKnight';
                                }
                                //get character class to display
                                $charclass=$membero->getClassName();
                                //get their active spec name		
                                $primaryTree=$membero->getActiveTalents();
                                /* $primarySpec=$primaryTree['name']; */
                                //get their inactive spec name
                                if($membero->getInactiveTalents()) {
                                    $secondaryTree=$membero->getInactiveTalents();
                                    /* $secondarySpec=$secondaryTree['name']; */
                                } else {
                                    $secondarySpec='';
                                }
                                //print out relevant data
                                if($count%2==0) { 
                                    echo('<tr class="even"><td class='.$classname.'><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$mname.'/simple" class='.$classname.'>'.$mname.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td class="grank">'.$grank.'</td></tr>');
                                } else {
                                    echo('<tr class="odd"><td class='.$classname.'><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$mname.'/simple" class='.$classname.'>'.$mname.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td class="grank">'.$grank.'</td></tr>');
                                }
                            }
                            //increment count
                            $count++;
                        }
                    }
                ?>
            </tbody>
        </table>
    <div id="alts">
        <h4>Alts</h4>
        <table id="85salts" class="tablesorter">
            <thead>
                <tr>
                    <th filter-type="ddl">Character</th>
                    <th filter-type="ddl">Class</th>
                    <th filter-type="ddl">Spec 1</th>
                    <th filter-type="ddl">Spec 2</th>
                    <th filter-type="ddl">iLvl</th>
                    <th filter-type="ddl">Resil</th>
                    <th filter-type="ddl">RBG</th>
                    <th filter-type="ddl">HKs</th>
                    <th filter-type="ddl">Main</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $name = 'Aethelis';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    // Get the pvp personal ratings
                    $battlegroundPersonalrating = $character->getBattlegroundRating();
                    $honorkills = $character->getHonorKills();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    //get their active spec name		
                    $primaryTree=$character->getActiveTalents();
                    $primarySpec=$primaryTree['name'];
                    //get their inactive spec name
                    if($membero->getInactiveTalents()) {
                        $secondaryTree=$character->getInactiveTalents();
                        $secondarySpec=$secondaryTree['name'];
                    } else {
                        $secondarySpec='';
                    }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td>Vaxas</td></tr>'); ?>
                </tr>
                <tr>
                    <?php $name = 'Cruizex';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    // Get the pvp personal ratings
                    $battlegroundPersonalrating = $character->getBattlegroundRating();
                    $honorkills = $character->getHonorKills();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    //get their active spec name		
                    $primaryTree=$character->getActiveTalents();
                    $primarySpec=$primaryTree['name'];
                    //get their inactive spec name
                    if($membero->getInactiveTalents()) {
                        $secondaryTree=$character->getInactiveTalents();
                        $secondarySpec=$secondaryTree['name'];
                    } else {
                        $secondarySpec='';
                    }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td>Cruizelol</td></tr>'); ?>
                </tr>
                <tr>
                    <?php $name = 'Dulari';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    // Get the pvp personal ratings
                    $battlegroundPersonalrating = $character->getBattlegroundRating();
                    $honorkills = $character->getHonorKills();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    //get their active spec name		
                    $primaryTree=$character->getActiveTalents();
                    $primarySpec=$primaryTree['name'];
                    //get their inactive spec name
                    if($membero->getInactiveTalents()) {
                        $secondaryTree=$character->getInactiveTalents();
                        $secondarySpec=$secondaryTree['name'];
                    } else {
                        $secondarySpec='';
                    }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td>Vaxas</td></tr>'); ?>
                </tr>
                <tr>
                    <?php $name = 'Garlzakdor';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    // Get the pvp personal ratings
                    $battlegroundPersonalrating = $character->getBattlegroundRating();
                    $honorkills = $character->getHonorKills();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    //get their active spec name		
                    $primaryTree=$character->getActiveTalents();
                    $primarySpec=$primaryTree['name'];
                    //get their inactive spec name
                    if($membero->getInactiveTalents()) {
                        $secondaryTree=$character->getInactiveTalents();
                        $secondarySpec=$secondaryTree['name'];
                    } else {
                        $secondarySpec='';
                    }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td>Gobage</td></tr>'); ?>
                </tr>
                <tr>
                    <?php $name = 'Kipsterr';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    // Get the pvp personal ratings
                    $battlegroundPersonalrating = $character->getBattlegroundRating();
                    $honorkills = $character->getHonorKills();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    //get their active spec name		
                    $primaryTree=$character->getActiveTalents();
                    $primarySpec=$primaryTree['name'];
                    //get their inactive spec name
                    if($membero->getInactiveTalents()) {
                        $secondaryTree=$character->getInactiveTalents();
                        $secondarySpec=$secondaryTree['name'];
                    } else {
                        $secondarySpec='';
                    }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td>Gobage</td></tr>'); ?>
                </tr>
                <tr>
                    <?php $name = 'Lassirra';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    // Get the pvp personal ratings
                    $battlegroundPersonalrating = $character->getBattlegroundRating();
                    $honorkills = $character->getHonorKills();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    //get their active spec name		
                    $primaryTree=$character->getActiveTalents();
                    $primarySpec=$primaryTree['name'];
                    //get their inactive spec name
                    if($membero->getInactiveTalents()) {
                        $secondaryTree=$character->getInactiveTalents();
                        $secondarySpec=$secondaryTree['name'];
                    } else {
                        $secondarySpec='';
                    }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td>Vaxas</td></tr>'); ?>
                </tr>
                <tr>
                    <?php $name = 'Markmarmot';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    // Get the pvp personal ratings
                    $battlegroundPersonalrating = $character->getBattlegroundRating();
                    $honorkills = $character->getHonorKills();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    //get their active spec name		
                    $primaryTree=$character->getActiveTalents();
                    $primarySpec=$primaryTree['name'];
                    //get their inactive spec name
                    if($membero->getInactiveTalents()) {
                        $secondaryTree=$character->getInactiveTalents();
                        $secondarySpec=$secondaryTree['name'];
                    } else {
                        $secondarySpec='';
                    }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td>Amgpoptarts</td></tr>'); ?>
                </tr>
                <tr>
                    <?php $name = 'Phaethe';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    // Get the pvp personal ratings
                    $battlegroundPersonalrating = $character->getBattlegroundRating();
                    $honorkills = $character->getHonorKills();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    //get their active spec name		
                    $primaryTree=$character->getActiveTalents();
                    $primarySpec=$primaryTree['name'];
                    //get their inactive spec name
                    if($membero->getInactiveTalents()) {
                        $secondaryTree=$character->getInactiveTalents();
                        $secondarySpec=$secondaryTree['name'];
                    } else {
                        $secondarySpec='';
                    }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td>Vaxas</td></tr>'); ?>
                </tr>
                <tr>
                    <?php $name = 'Radeachar';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    // Get the pvp personal ratings
                    $battlegroundPersonalrating = $character->getBattlegroundRating();
                    $honorkills = $character->getHonorKills();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    //get their active spec name		
                    $primaryTree=$character->getActiveTalents();
                    $primarySpec=$primaryTree['name'];
                    //get their inactive spec name
                    if($membero->getInactiveTalents()) {
                        $secondaryTree=$character->getInactiveTalents();
                        $secondarySpec=$secondaryTree['name'];
                    } else {
                        $secondarySpec='';
                    }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td>Vaxas</td></tr>'); ?>
                </tr>
                <tr>
                    <?php $name = 'Razznik';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    // Get the pvp personal ratings
                    $battlegroundPersonalrating = $character->getBattlegroundRating();
                    $honorkills = $character->getHonorKills();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    //get their active spec name		
                    $primaryTree=$character->getActiveTalents();
                    $primarySpec=$primaryTree['name'];
                    //get their inactive spec name
                    if($membero->getInactiveTalents()) {
                        $secondaryTree=$character->getInactiveTalents();
                        $secondarySpec=$secondaryTree['name'];
                    } else {
                        $secondarySpec='';
                    }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td>Vaxas</td></tr>'); ?>
                </tr>
                <tr>
                    <?php $name = 'Soleste';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    // Get the pvp personal ratings
                    $battlegroundPersonalrating = $character->getBattlegroundRating();
                    $honorkills = $character->getHonorKills();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    //get their active spec name		
                    $primaryTree=$character->getActiveTalents();
                    $primarySpec=$primaryTree['name'];
                    //get their inactive spec name
                    if($membero->getInactiveTalents()) {
                        $secondaryTree=$character->getInactiveTalents();
                        $secondarySpec=$secondaryTree['name'];
                    } else {
                        $secondarySpec='';
                    }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td>Vaxas</td></tr>'); ?>
                </tr>
                <tr>
                    <?php $name = 'Trypnotix';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    // Get the pvp personal ratings
                    $battlegroundPersonalrating = $character->getBattlegroundRating();
                    $honorkills = $character->getHonorKills();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    //get their active spec name		
                    $primaryTree=$character->getActiveTalents();
                    $primarySpec=$primaryTree['name'];
                    //get their inactive spec name
                    if($membero->getInactiveTalents()) {
                        $secondaryTree=$character->getInactiveTalents();
                        $secondarySpec=$secondaryTree['name'];
                    } else {
                        $secondarySpec='';
                    }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td>'.$classname.'</td><td class="name">'.$primarySpec.'</td><td class="name">'.$secondarySpec.'</td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td><td class="rbg">'.$battlegroundPersonalrating.'</td><td class="hks">'.$honorkills.'</td><td>Vaxas</td></tr>'); ?>
                </tr>
            </tbody>
        </table>
    </div>