<?php
        $userrole = array('customer', 'root', 'admin');
        include('security.php');
?>
<table class='simple'>
        <caption>Downloadpagina voor de game</caption>
        <tr>
                <th>Screenshot</th>
                <th colspan=2>Handleiding</th>
                <th>game</th>
        </tr>
        <tr>
                <td>
                        <img src='./pictures/screenshot.png' width=300/>
                </td>
                <td>
                        <a href='./pictures/Manual.txt'>
                                <img src='./pictures/eng_vlag.png' />
                        </a>
                </td>
                <td>
                        <a href='./pictures/Handleiding.txt'>
                                <img src='./pictures/ned_vlag.png' />
                        </a>
                </td>
                <td>
                        <a href='./pictures/EvilBabies.zip'>
                                <img src='./pictures/download.png' />
                        </a>
                </td>
        </tr>
</table>