<div class="team">
    <h3>RBG1</h3>
    <table id="vanguard1">
        <thead>
            <th>Slot</th>
            <th>Character</th>
            <th>iLvl</th>
            <th>Resil</th>
        </thead>
        <tbody>
            <tr>
                <td><strong>Tank</strong></td>
                <?php $name = 'Amgpoptarts';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>Heal</strong></td>
                <?php $name = 'Tamerlane';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>Heal</strong></td>
                <?php $name = 'Phaethe';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>Heal</strong></td>
                <?php $name = 'Buyakha';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <td class="Priest"><em>Shadow Priest</em></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <?php $name = 'Gangbusta';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <?php $name = 'Gobage';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <?php $name = 'Dinanur';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <?php $name = 'Cruizelol';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <td class="Rogue"><em>Subtlety Rogue</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="clear"></div>
<div class="team">
    <h3>RBG2</h3>
    <table id="legion1" class="tablesorter">
        <thead>
            <th>Slot</th>
            <th>Character</th>
            <th>iLvl</th>
            <th>Resil</th>
        </thead>
        <tbody>
            <tr>
                <td><strong>Tank</strong></td>
                <?php $name = 'Garlzakdor';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>Heal</strong></td>
                <?php $name = 'Vaxas';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $mresil = $stats['resil'];
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td><td class="resil">'.$mresil.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>Heal</strong></td>
                <td class="Priest"><em>Discipline Priest</em></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Heal</strong></td>
                <td class="Shaman"><em>Restoration Shaman</em></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <td class="Priest"><em>Shadow Priest</em></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <td class="DeathKnight"><em>Frost Death Knight</em></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <td class="Mage"><em>Fire Mage</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <td class="Warlock"><em>Affliction Warlock</em></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <td class="Druid"><em>Balance Druid</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <td class="Rogue"><em>Subtlety Rogue</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="clear"></div>
<div class="team">
    <h3>Raid1</h3>
    <table id="avengers1">
        <thead>
            <th>Slot</th>
            <th>Character</th>
            <th>iLvl</th>
        </thead>
        <tbody>
            <tr>
                <td><strong>Tank</strong></td>
                <td class="DeathKnight"><em>Blood Death Knight</em></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Tank</strong></td>
                <td class="Warrior"><em>Prot Warrior</em></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Heal</strong></td>
                <td class="Priest"><em>Holy Priest</em></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Heal</strong></td>
                <?php $name = 'Freshmaker';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <?php $name = 'Tamerlane';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <?php $name = 'Dinanur';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <?php $name = 'Cruizex';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <?php $name = 'Gobage';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <?php $name = 'Aethelis';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td>'); ?>
            </tr>
            <tr>
                <td><strong>DPS</strong></td>
                <?php $name = 'Drotara';
                    $character = $armory->getCharacter($name);
                    $thumbnailurl = $character->getThumbnailURL();
                    $gear = $character->getGear();
                    $milevel = $gear['averageItemLevelEquipped'];
                    $stats = $character->getStats();
                    $classname=$character->getClassName();
                        if($classname=='Death Knight') {
                            $classname='DeathKnight';
                        }
                    echo('<td class="'.$classname.'"><img class="thumb" src="'.$thumbnailurl.'" align="left" /><strong><a href="http://us.battle.net/wow/en/character/illidan/'.$name.'/simple" class="'.$classname.'">'.$name.'</a></strong></td><td class="ilvl">'.$milevel.'</td>'); ?>
            </tr>
        </tbody>
    </table>
</div>