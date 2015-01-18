<?
/*********************************************************************************************************
 This code is part of the ShoutBox software (www.gerd-tentler.de/tools/shoutbox), copyright by
 Gerd Tentler. Obtain permission before selling this code or hosting it on a commercial website or
 redistributing it over the Internet or in any other medium. In all cases copyright must remain intact.
*********************************************************************************************************/

//////////////////////////////////////////////////////////////////////////////////////////////////////////
// This is the MAIN configuration file
//////////////////////////////////////////////////////////////////////////////////////////////////////////

//========================================================================================================
// Database settings
//========================================================================================================

  // leave these fields empty if you don't want to use a database:
  $db_server = "localhost";      // server name
  $db_user = "shoutjack";        // user name
  $db_pass = "h4unt3dh1ll";      // user password
  $db_name = "shoutbox";         // database name

  // don't change unless you know what you're doing:
  $tbl_name = "Shoutbox";        // table name
  $fld_id = "ID";                // field name: ID
  $fld_timestamp = "Timestamp";  // field name: timestamp
  $fld_name = "Name";            // field name: name
  $fld_email = "EMail";          // field name: e-mail
  $fld_text = "Text";            // field name: text

//========================================================================================================
// Other settings
//========================================================================================================

  // shout-box language: ar, cs, de, en, es, fi, fr, it, nl, pl, pt-BR, sl, sv
  $language = "en";

  // administrator password (can delete entries; needs PHP >= 4.1.0)
  $adminPass = "9inchnails";

  // shout-box folder (WEB path, e.g. /webtools/shoutbox)
  $boxFolder = "/shoutbox";

  // shout-box width (pixels)
  $boxWidth = 620;

  // shout-box height (pixels)
  $boxHeight = 500;

  // maximum entries in shout-box (higher values = more traffic!)
  $boxEntries = 100;

  // refresh shout-box every .. seconds (lower values = more traffic!)
  $boxRefresh = 600;

  // input fields position (left, right, top, bottom)
  $inputsPosition = "bottom";

  // message order: ASC (new at bottom) or DESC (new on top)
  $messageOrder = "DESC";

  // message background colors (must be 2 colors)
  $messageBGColors = array("transparent", "transparent");
  
  // maximum word length (0 = no limit)
  // NOTE: should be 0 for non-European languages (Asian, Arabic, etc.)
  $wordLength = 30;

  // maximum text length (0 = no limit)
  $textLength = 1000;

  // adjust hour of server time (e.g. 1, 2, -1, -2, etc.)
  $timeOffset = 0;

  // allow URLs (true = yes, false = no)
  $allowURLs = false;

  // allow HTML tags (true = yes, false = no)
  $allowHTML = false;

  // allow UBB codes (true = yes, false = no)
  $allowUBBs = false;

  // enable message IDs against spam bots (true = yes, false = no; needs PHP >= 4.1.0)
  // NOTE: if enabled, you must start a session in your PHP script (see readme.txt)
  $enableIDs = true;

  // enable link check against spam bots (true = yes, false = no)
  // NOTE: works only if $allowURLs and/or $allowHTML is false
  $enableLinkCheck = true;

  // enable user agent check against spam bots (true = yes, false = no)
  // NOTE: if enabled, some browsers might be mistaken for spam bots
  $enableAgentCheck = false;

  // valid user agents; don't change unless you know what you're doing
  $agents = array("Mozilla", "Opera", "Lynx", "Mosaic", "amaya", "WebExplorer", "IBrowse", "iCab");

  // bad words
  $nonos = array("fuck", "asshole", "bitch", "cunt", "dick", "cock");

  // reserved user names (must be lower-case!)
  $reservedNames = array("administrator", "admin");

//========================================================================================================
?>
