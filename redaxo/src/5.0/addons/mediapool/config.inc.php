<?php

/**
 * Mediapool Addon
 *
 * @author jan[dot]kristinus[at]redaxo[dot]de Jan Kristinus
 *
 * @package redaxo5
 * @version svn:$Id$
 */

$mypage = 'mediapool';

if($REX["REDAXO"])
{
  $mpool = new rex_be_page_popup(rex_i18n::msg('mediapool'), 'openMediaPool(); return false;');
  $mpool->setRequiredPermissions('hasMediaPerm');
  $this->setProperty('page', $mpool);

  require_once dirname(__FILE__). '/functions/function_rex_mediapool.inc.php';
  // im backend und eingeloggt?
  if($REX["USER"])
  {
    rex_extension::register('PAGE_HEADER', 'rex_mediapool_add_assets');
  }
}

rex_var::registerVar('rex_var_media');