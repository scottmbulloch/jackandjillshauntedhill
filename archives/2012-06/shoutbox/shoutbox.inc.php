<?
/*
 +-------------------------------------------------------------------+
 |                      S H O U T B O X   (v3.12)                    |
 |                                                                   |
 | Copyright Gerd Tentler                www.gerd-tentler.de/tools   |
 | Created: Jun. 1, 2004                 Last modified: Mar. 7, 2010 |
 +-------------------------------------------------------------------+
 | This program may be used and hosted free of charge by anyone for  |
 | personal purpose as long as this copyright notice remains intact. |
 |                                                                   |
 | Obtain permission before selling the code for this program or     |
 | hosting this software on a commercial website or redistributing   |
 | this software over the Internet or in any other medium. In all    |
 | cases copyright must remain intact.                               |
 +-------------------------------------------------------------------+
*/
  error_reporting(E_WARNING);

//========================================================================================================
// Set variables, if they are not registered globally; needs PHP 4.1.0 or higher
//========================================================================================================

  if(isset($_SERVER['HTTP_HOST'])) $HTTP_HOST = $_SERVER['HTTP_HOST'];

//========================================================================================================
// Includes
//========================================================================================================

  include('config_main.inc.php');
  include('lang_en.inc');
  include('smilies.inc');

//========================================================================================================
// Set session variables (message ID); needs PHP 4.1.0 or higher
//========================================================================================================

  if($enableIDs && !$_SESSION['msgID']) {
    srand((double) microtime() * 1000000);
    $_SESSION['msgID'] = md5(uniqid(rand()));
  }

//========================================================================================================
// Main
//========================================================================================================

  if($boxFolder && !ereg('/$', $boxFolder)) $boxFolder .= '/';
?>
<script  type="text/javascript"> <!--
var shout_popup = 0;

function newWindow(url, w, h, x, y, scroll, menu, tool, resizable) {
  if(shout_popup && !shout_popup.closed) shout_popup.close();
  if(!x && !y) {
    x = Math.round((screen.width - w) / 2);
    y = Math.round((screen.height - h) / 2);
  }
  shout_popup = window.open(url, "shout_popup", "width=" + w + ",height=" + h +
                            ",left=" + x + ",top=" + y + ",scrollbars=" + scroll +
                            ",menubar=" + menu + ",toolbar=" + tool + ",resizable=" + resizable);
  shout_popup.focus();
}

function refreshBox() {
  document.fShout.sbText.value = "";
  document.fShout.admin.value = "";
  document.fShout.submit();
  setTimeout("document.fShout.Refresh.disabled=false", 1000);
}

function shoutIt() {
  document.fShout.admin.value = "";
  document.fShout.submit();
  setTimeout("document.fShout.sbText.value=''", 1000);
  setTimeout("document.fShout.Shout.disabled=false", 1000);
}

function login() {
  var pass = prompt("<? echo $msg['pass']; ?>", "");
  if(pass) {
    document.fShout.admin.value = pass;
    document.fShout.submit();
  }
  document.fShout.Admin.disabled = false;
}
//--> </script>
<table border="0" cellspacing="0" cellpadding="0" width="100%" >
  <form name="fShout" action="<? echo $boxFolder; ?>shout.php" target="ShoutBox" method="post">
  <input type="hidden" name="sbID" value="<? echo $_SESSION['msgID']; ?>" />
  <input type="hidden" name="admin" />
  <tr>
    <td colspan="2" valign="top"><iframe name="ShoutBox" src="<? echo $boxFolder; ?>shout.php" class="cssShoutBox" width="99%" height="<? echo $boxHeight; ?>" frameborder="0"></iframe></td>
  </tr>
  <!--<tr>
    <td class="cssShoutText" style="width:20%;text-align:right;">Name:</td>
    <td style="width:80%;text-align:right;"><input type="text" name="sbName" maxlength="20" class="cssShoutForm" style="width:97%" /></td>
  </tr>
  <tr>
    <td class="cssShoutText" style="text-align:right;">Email:</td>
    <td style="text-align:right;"><input type="text" name="sbEMail" maxlength="75" class="cssShoutForm" style="width:97%" /></td>
  </tr>
  <tr>
    <td class="cssShoutText" style="vertical-align:top;text-align:right;">Message:</td>
    <td style="text-align:right;"><textarea name="sbText" rows="4" class="cssShoutForm" style="width:96%"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td> &nbsp; <input type="button" name="Shout" value="<? echo $msg['shout']; ?>" class="cssShoutButton" onClick="this.disabled=true; shoutIt()" /> &nbsp; <input type="button" value="<? echo $msg['smilies']; ?>" class="cssShoutButton" onClick="newWindow('<? echo $boxFolder; ?>smilies.php', 130, 300, 0, 0, 1)" /> &nbsp; <input type="button" name="Refresh" value="<? echo $msg['refresh']; ?>" class="cssShoutButton" onClick="this.disabled=true; refreshBox()" /></td>
  </tr>-->
</form>
</table>
