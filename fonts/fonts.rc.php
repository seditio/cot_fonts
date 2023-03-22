<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

/**
* [SEDBY] Icons Plugin / Global part
*
* @package icons
* @author Dmitri Beliavski
* @copyright (c) 2018-2023 seditio.by
*/

defined('COT_CODE') or die('Wrong URL');

if ($env['location'] == 'administration')
Resources::linkFileFooter($cfg['plugins_dir'].'/fonts/fonts/opensans/opensans.min.css');
