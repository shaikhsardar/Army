<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Welcome to Military</title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
    </div>
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td bgcolor="#C6F3FF">
                <div align="center">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td height="20">
                                <image src="logo.jpg" width="1366" height="100"> 
                             
                            </td>
                        </tr>
                    </table>
                </div>
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>
                            <div align="center">
                                <strong><font face="Verdana" size="5">INDIAN MILITATRY INFORMATION SYSTEM</font></strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table align="center" border="1" bordercolor="#006699" cellpadding="0" 
                    cellspacing="0" width="100%">
                    <tr bgcolor="#00CCFF" bordercolor="#006699">
                        <td>
                            <div align="center">
                                <font face="Verdana " size="3"><strong><a href="airforce1.html">Indian Airforce</a></strong></font></div>
                        </td>
                        <td>
                            <div align="center">
                                <font face="Verdana" size="3"><strong><a href="IndianArmy.html">Indian Army</a></strong></font></div>
                        </td>
                        <td>
                            <div align="center">
                                <font face="Verdana" size="3"><strong><a href="navy1.html">Indian Navy</a></strong></font></div>
                        </td>
			<td><div align="center">Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a><div></td>
                    </tr>
                </table>
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td class="Tagpage">
                            <div align="center">
                                Home
                            </div>
                        </td>
                    </tr>
                </table>
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td valign="top" width="25%">
                            <table border="1" bordercolor="#FF9900" cellpadding="0" cellspacing="0" 
                                width="100%">
                                <tr>
                                    <td background="images/btBullet2.jpg" height="20" width="20">
                                        <img height="1" src="images/btBullet2.jpg" width="20" /></td>
                                    <td bgcolor="#FFD75B" height="20" valign="middle" width="100%">
                                        <ul>
                                            <li>
                                                <div align="left">
                                                    <strong><font face="Verdana" size="1"><a href="NCCHome.html">NCC Entry</a></font></strong></div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td background="images/btBullet2.jpg" height="20" width="20">
                                        <img height="1" src="images/btBullet2.jpg" width="20" /></td>
                                    <td bgcolor="#FFD75B" height="20" valign="middle" width="100%">
                                        <ul>
                                            <li>
                                                <div align="left">
                                                    <strong><font face="Verdana" size="1"><a href="Service.html">SSB Interview</a></font></strong></div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td background="images/btBullet2.jpg" height="20" width="20">
                                        <img height="1" src="images/btBullet2.jpg" width="20" /></td>
                                    <td bgcolor="#FFD75B" height="20" valign="middle" width="100%">
                                        <ul>
                                            <li>
                                                <div align="left">
                                                    <strong><font face="Verdana" size="1"><a href="application%20for%20navy.doc">
                                                    Form</a></font></strong></div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                  
                                <tr>
                                    <td background="images/btBullet2.jpg" height="20" width="20">
                                        <img height="1" src="images/btBullet2.jpg" width="20" /></td>
                                    <td bgcolor="#FFD75B" height="20" valign="middle" width="100%">
                                        <ul>
                                            <li>
                                                <div align="left">
                                                    <strong><font face="Verdana" size="1"><a href="About.html">About Us</a></font></strong></div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                        </table>
                        </td>
                        <td bgcolor="#FFFFFF" bordercolor="#000000" valign="top" width="75%">
                            <table border="1" bordercolor="#000000" cellpadding="0" cellspacing="0" 
                                width="100%">
                                <tr>
                                    <td bgcolor="#FFFFFF">
                                        <font color="#0066FF" face="Verdana" size="4">Introduction</font></td>
                                </tr>
                            </table>
                            <table align="center" border="0" bordercolor="#000000" cellpadding="5" 
                                cellspacing="0" width="100%">
                                <tr>
                                    <td bgcolor="#FFFFFF" height="92" valign="top">
                                        <div align="justify">
                                            <p>
                                                <font face="Verdana " size="2">The Indian Air Force was officially established 
                                                on 8 October 1932.Its first ac flight came into being on 01 Apr 1933. It 
                                                possessed a strength of six RAF-trained officers and 19 Havai Sepoys (literally, 
                                                air soldiers). The aircraft inventory comprised of four Westland Wapiti IIA army 
                                                co-operation biplanes at Drigh Road as the &quot;A&quot; Flight nucleus of the planned 
                                                No.1 (Army Co- operation) Squadron.</font></p>
                                            <p>
                                                <font face="Verdana" size="2">Four-and-a-half years later, &quot;A&quot; Flight was in 
                                                action for the first time from Miranshah, in North Waziristan, to support Indian 
                                                Army operations against insurgent Bhittani tribesmen. Meanwhile, in April 1936, 
                                                a &quot;B&quot; Flight had also been formed on the vintage Wapiti. But, it was not until 
                                                June 1938 that a &quot;C&quot; Flight was raised to bring No. 1 Squadron ostensibly to 
                                                full strength, and this remained the sole IAF formation when World War II began, 
                                                although personnel strength had by now risen to 16 officers and 662 men.</font></p>
                                            <p>
                                                <font face="Verdana " size="2">
                                                <img height="512" src="images/untitled.JPG" width="640" /></font></p>
                                            <p>
                                                <font face="Verdana " size="2">Problems concerning the defence of India were 
                                                reassessed in 1939 by the Chatfield Committee. It proposed the re-equipment of 
                                                RAF (Royal Air Force) squadrons based in lndia but did not make any suggestions 
                                                for the accelerating the then painfully slow growth of IAF except for a scheme 
                                                to raise five flights on a voluntary basis to assist in the defence of the 
                                                principal ports. An IAF Volunteer Reserve was thus authorised, although 
                                                equipping of the proposed Coastal Defence Flights (CDFs) was somewhat inhibited 
                                                by aircraft availability. Nevertheless, five such flights were established with 
                                                No. 1 at Madras, No. 2 at Bombay, No. 3 at Calcutta, No. 4 at Karachi and No. 5 
                                                at Cochin. No. 6 was laterformed at Vizagapatanam. Built up around a nucleus of 
                                                regular IAF and RAF personnel, these flights were issued with both ex-RAF 
                                                Wapitis and those relinquished by No. 1 Squadron IAF after its conversion to the 
                                                Hawker Hart. In the event, within a year, the squadron was to revert back to the 
                                                Wapiti because of spares shortages, the aged Westland biplanes being 
                                                supplemented by a flight of Audaxes.</font></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFFF" height="92" valign="top">
                                        &nbsp;</td>
                                </tr>
                            </table>
                        </td>
                        <td valign="top" width="100">
                            <img height="100" src="images/logo1.jpg" width="100" /></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </form>
    </body>
</html>
