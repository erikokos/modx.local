<?php  return array (
  'config' => 
  array (
  ),
  'aliasMap' => 
  array (
    'index.html' => 1,
    'o-nas/' => 2,
    'vidyi-deyatelnosti.html' => 4,
    'mediczinskie-sluzhbyi/' => 6,
    'pezhim-rabotyi.html' => 7,
    'rusanovskaya-17.html' => 8,
    'detskaya-poliklinika-№33.html' => 9,
    'filial-dpo-№33.html' => 10,
    'detskaya-poliklinika-№58.html' => 11,
    'skoraya-pomoshh.html' => 12,
    'zapis-k-vrachu.html' => 13,
    'platnyie-uslugi.html' => 14,
    'stranichka-profsoyuza.html' => 15,
    'oxrana-truda.html' => 16,
    'novosti.html' => 17,
    'dispanserizacziya-2018.html' => 18,
    'lgotnyie-lekarstva.html' => 19,
    'sanitarnoe-prosveshhenie.html' => 20,
    'vakczinacziya.html' => 21,
    'dialog-s-uchrezhdeniem.html' => 22,
    'v-pomoshh-paczientu.html' => 23,
    'poleznaya-informacziya.html' => 24,
    'paczientyi-o-nas.html' => 25,
    'kontaktyi.html' => 27,
    'struktura.html' => 30,
    'ustav.html' => 31,
    'nagradyi.html' => 32,
    'sotrudniki.html' => 33,
    'vakansii.html' => 34,
    'administracziya.html' => 3,
    'liczenzii.html' => 5,
    'videomaterialyi.html' => 26,
    'terapiya.html' => 35,
    'kardiologiya.html' => 36,
    'otorinolaringologiya.html' => 37,
    'nevrologiya.html' => 38,
    'oftalmologiya.html' => 39,
    'pevmatologiya.html' => 40,
    'xirurgiya.html' => 41,
    'gastroenterologiya.html' => 42,
    'travmatologiya.html' => 43,
    'proczedurnyij-kabinet.html' => 44,
    'privivochnyij-kabinet.html' => 45,
    'pentgen.html' => 46,
    'infekczionnyij-kabinet.html' => 47,
    'laboratoriya.html' => 48,
    'uzi.html' => 49,
    'urologiya.html' => 50,
    'funkczionalnaya-diagnostika.html' => 51,
    'dnevnoj-staczionar.html' => 52,
    'fizioterapiya.html' => 53,
    'fgds.html' => 54,
    'endokrinologiya.html' => 55,
  ),
  'resourceMap' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 2,
      2 => 4,
      3 => 6,
      4 => 7,
      5 => 8,
      6 => 9,
      7 => 10,
      8 => 11,
      9 => 12,
      10 => 13,
      11 => 14,
      12 => 15,
      13 => 16,
      14 => 17,
      15 => 18,
      16 => 19,
      17 => 20,
      18 => 21,
      19 => 22,
      20 => 23,
      21 => 24,
      22 => 25,
      23 => 27,
    ),
    2 => 
    array (
      0 => 30,
      1 => 31,
      2 => 32,
      3 => 33,
      4 => 34,
      5 => 3,
      6 => 5,
      7 => 26,
    ),
    6 => 
    array (
      0 => 35,
      1 => 36,
      2 => 37,
      3 => 38,
      4 => 39,
      5 => 40,
      6 => 41,
      7 => 42,
      8 => 43,
      9 => 44,
      10 => 45,
      11 => 46,
      12 => 47,
      13 => 48,
      14 => 49,
      15 => 50,
      16 => 51,
      17 => 52,
      18 => 53,
      19 => 54,
      20 => 55,
    ),
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'OnDocFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnDocFormRender' => 
    array (
      6 => '6',
    ),
    'OnDocFormSave' => 
    array (
      6 => '6',
    ),
    'OnMODXInit' => 
    array (
      4 => '4',
    ),
    'OnPageNotFound' => 
    array (
      6 => '6',
    ),
    'OnSiteRefresh' => 
    array (
      4 => '4',
    ),
    'OnTVInputPropertiesList' => 
    array (
      5 => '5',
    ),
    'OnTVInputRenderList' => 
    array (
      5 => '5',
    ),
    'OnTVOutputRenderList' => 
    array (
      5 => '5',
    ),
    'OnTVOutputRenderPropertiesList' => 
    array (
      5 => '5',
    ),
    'OnWebPagePrerender' => 
    array (
      4 => '4',
      3 => '3',
    ),
  ),
  'pluginCache' => 
  array (
    3 => 
    array (
      'id' => '3',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'XHTML Beautify',
      'description' => 'XHTML Beautify',
      'editor_type' => '0',
      'category' => '2',
      'cache_type' => '0',
      'plugincode' => '/**
 * XHTML Beautify - Clean up MODx source code output
 *
 * Copyright (c) 2012 Gold Coast Media Ltd
 *
 * This file is part of XHTML Beautify.
 *
 * XHTML Beautify is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * XHTML Beautify is distributed in the hope that it will be useful, but 
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or 
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * XHTML Beautify; if not, write to the Free Software Foundation, Inc., 59 
 * Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package  xhtmlbeautify
 * @author   Dan Gibbs <dan@goldcoastmedia.co.uk>
 *           Till Krüss <http://tillkruess.com/projects/wordpress/wp-beautifier/>
 */

$enabled = $modx->getOption(\'xhtmlbeautify.enabled\');

if($modx->event->name == \'OnWebPagePrerender\' AND $enabled)
{
	require $modx->getOption(\'core_path\') . \'components/xhtmlbeautify/xhtmlbeautify.class.php\';
	$xhtmlbeautify = new XhtmlBeautify($modx);
	$output = $xhtmlbeautify->run();
	unset($xhtmlbeautify);
	
	return $output;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    4 => 
    array (
      'id' => '4',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'pdoTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '3',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnMODXInit\':
        $fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
        $path = $modx->getOption(\'pdotools_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);

        $fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
        $path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);
        break;

    case \'OnSiteRefresh\':
        /** @var pdoTools $pdoTools */
        if ($pdoTools = $modx->getService(\'pdoTools\')) {
            if ($pdoTools->clearFileCache()) {
                $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': pdoTools\');
            }
        }
        break;

    case \'OnWebPagePrerender\':
        $parser = $modx->getParser();
        if ($parser instanceof pdoParser) {
            foreach ($parser->pdoTools->ignores as $key => $val) {
                $modx->resource->_output = str_replace($key, $val, $modx->resource->_output);
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/pdotools/elements/plugins/plugin.pdotools.php',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'GalleryCustomTV',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Handles plugin events for Gallery\'s Custom TV
 * 
 * @package gallery
 */
$corePath = $modx->getOption(\'gallery.core_path\',null,$modx->getOption(\'core_path\').\'components/gallery/\');
switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tv/input/\');
        break;
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tv/output/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/inputoptions/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/properties/\');
        break;
    case \'OnManagerPageBeforeRender\':
        $gallery = $modx->getService(\'gallery\',\'Gallery\',$modx->getOption(\'gallery.core_path\',null,$modx->getOption(\'core_path\').\'components/gallery/\').\'model/gallery/\',$scriptProperties);
        if (!($gallery instanceof Gallery)) return \'\';

        $snippetIds = \'\';
        $gallerySnippet = $modx->getObject(\'modSnippet\',array(\'name\' => \'Gallery\'));
        if ($gallerySnippet) {
            $snippetIds .= \'GAL.snippetGallery = "\'.$gallerySnippet->get(\'id\').\'";\'."\\n";
        }
        $galleryItemSnippet = $modx->getObject(\'modSnippet\',array(\'name\' => \'GalleryItem\'));
        if ($galleryItemSnippet) {
            $snippetIds .= \'GAL.snippetGalleryItem = "\'.$galleryItemSnippet->get(\'id\').\'";\'."\\n";
        }

        $jsDir = $modx->getOption(\'gallery.assets_url\',null,$modx->getOption(\'assets_url\').\'components/gallery/\').\'js/mgr/\';
        $modx->controller->addLexiconTopic(\'gallery:default\');
        $modx->controller->addJavascript($jsDir.\'gallery.js\');
        $modx->controller->addJavascript($jsDir.\'tree.js\');
        $modx->controller->addHtml(\'<script type="text/javascript">
        Ext.onReady(function() {
            GAL.config.connector_url = "\'.$gallery->config[\'connectorUrl\'].\'";
            \'.$snippetIds.\'
        });
        </script>\');
        break;
    case \'OnDocFormPrerender\':
        $gallery = $modx->getService(\'gallery\',\'Gallery\',$modx->getOption(\'gallery.core_path\',null,$modx->getOption(\'core_path\').\'components/gallery/\').\'model/gallery/\',$scriptProperties);
        if (!($gallery instanceof Gallery)) return \'\';

        /* assign gallery lang to JS */
        $modx->controller->addLexiconTopic(\'gallery:tv\');

        /* @var modAction $action */
        $action = $modx->getObject(\'modAction\',array(
            \'namespace\' => \'gallery\',
            \'controller\' => \'index\',
        ));
        $modx->controller->addHtml(\'<script type="text/javascript">
        Ext.onReady(function() {
            GAL.config = {};
            GAL.config.connector_url = "\'.$gallery->config[\'connectorUrl\'].\'";
            GAL.action = "\'.($action ? $action->get(\'id\') : 0).\'";
        });
        </script>\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/tv/Spotlight.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/gallery.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/widgets/album/album.items.view.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/widgets/album/album.tree.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/tv/gal.browser.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/tv/galtv.js\');
        $modx->controller->addCss($gallery->config[\'cssUrl\'].\'mgr.css\');
        break;
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    6 => 
    array (
      'id' => '6',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Redirector',
      'description' => '',
      'editor_type' => '0',
      'category' => '6',
      'cache_type' => '0',
      'plugincode' => '/**
 * @package redirector
 *
 * @var modX|xPDO $modx
 * @var array $scriptProperties
 * @var modResource $resource
 * @var string $mode
 */

/* load redirector class */
$corePath = $modx->getOption(\'redirector.core_path\', $scriptProperties, $modx->getOption(\'core_path\') . \'components/redirector/\');
$redirector = $modx->getService(\'redirector\', \'Redirector\', $corePath . \'model/redirector/\', $scriptProperties);
if (!($redirector instanceof Redirector)) {
    return \'\';
}

$eventName = $modx->event->name;
switch ($eventName) {
    case \'OnPageNotFound\':
        /* handle redirects */
        $search = rawurldecode($_SERVER[\'REQUEST_URI\']);
        $baseUrl = $modx->getOption(\'base_url\', null, MODX_BASE_URL);
        if (!empty($baseUrl) && $baseUrl != \'/\' && $baseUrl != \' \' && $baseUrl != \'/\' . $modx->context->get(\'key\') . \'/\') {
            $search = str_replace($baseUrl, \'\', $search);
        }

        $search = ltrim($search, \'/\');
        if (!empty($search)) {
            $searchEscape = $modx->quote($search);

            /** @var modRedirect $redirect */
            $redirect = $modx->getObject(\'modRedirect\', array(
                "(`modRedirect`.`pattern` = " . $searchEscape . ")",
                "(`modRedirect`.`context_key` = \'" . $modx->context->get(\'key\') . "\' OR `modRedirect`.`context_key` IS NULL OR `modRedirect`.`context_key` = \'\')",
                \'active\' => true,
            ));

            // when not found, check a REGEX record..
            // need to separate this one because of some \'alias.html > target.html\' vs. \'best-alias.html > best-target.html\' issues...
            if (empty($redirect) || !is_object($redirect)) {
                $c = $modx->newQuery(\'modRedirect\');
                $c->where(array(
                    "(`modRedirect`.`pattern` = " . $searchEscape . " OR " . $searchEscape . " REGEXP `modRedirect`.`pattern` OR " . $searchEscape . " REGEXP CONCAT(\'^\', `modRedirect`.`pattern`, \'$\'))",
                    "(`modRedirect`.`context_key` = \'" . $modx->context->get(\'key\') . "\' OR `modRedirect`.`context_key` IS NULL OR `modRedirect`.`context_key` = \'\')",
                    \'active\' => true,
                ));
                $redirect = $modx->getObject(\'modRedirect\', $c);
            }

            if (!empty($redirect) && is_object($redirect)) {

                /** @var modContext $context */
                $context = $redirect->getOne(\'Context\');
                if (empty($context) || !($context instanceof modContext)) {
                    $context = $modx->context;
                }

                $target = $redirect->get(\'target\');
                $modx->parser->processElementTags(\'\', $target, true, true);

                if ($target != $modx->resourceIdentifier && $target != $search) {
                    if (strpos($target, \'$\') !== false) {
                        $pattern = $redirect->get(\'pattern\');
                        $target = preg_replace(\'/\' . $pattern . \'/\', $target, $search);
                    }
                    if (!strpos($target, \'://\')) {
                        $target = rtrim($context->getOption(\'site_url\'), \'/\') . \'/\' . (($target == \'/\') ? \'\' : ltrim($target, \'/\'));
                    }
                    $modx->log(modX::LOG_LEVEL_INFO, \'Redirector plugin redirecting request for \' . $search . \' to \' . $target);

                    $redirect->registerTrigger();

                    $options = array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\');
                    $modx->sendRedirect($target, $options);
                }
            }
        }

        break;

    case \'OnDocFormRender\':
        $track_uri_updates = (boolean)$modx->getOption(\'redirector.track_uri_updates\', null, 1);
        $track_uri_updates = (in_array($track_uri_updates, array(false, \'false\', 0, \'0\', \'no\', \'n\'), true)) ? false : true;

        if ($mode == \'upd\' && $track_uri_updates) {
            $_SESSION[\'modx_resource_uri\'] = $resource->get(\'uri\');
        }

        break;

    case \'OnDocFormSave\':
        /* if uri has changed, add to redirects */
        $track_uri_updates = $modx->getOption(\'redirector.track_uri_updates\', null, 1);
        $track_uri_updates = (in_array($track_uri_updates, array(false, \'false\', 0, \'0\', \'no\', \'n\'), true)) ? false : true;
        $context_key = $resource->get(\'context_key\');
        $new_uri = $resource->get(\'uri\');

        if ($mode == \'upd\' && $track_uri_updates && !empty($_SESSION[\'modx_resource_uri\'])) {
            $old_uri = $_SESSION[\'modx_resource_uri\'];
            if ($old_uri != $new_uri) {
                /* uri changed */
                $redirect = $modx->getObject(\'modRedirect\', array(
                    \'pattern\' => $old_uri,
                    \'context_key\' => $context_key,
                    \'active\' => true
                ));
                if (empty($redirect)) {
                    /* no record for old uri */
                    $new_redirect = $modx->newObject(\'modRedirect\');
                    $new_redirect->fromArray(array(
                        \'pattern\' => $old_uri,
                        \'target\' => \'[[~\' . $resource->get(\'id\') . \']]\',
                        \'context_key\' => $context_key,
                        \'active\' => true,
                    ));

                    if ($new_redirect->save() == false) {
                        return $modx->error->failure($modx->lexicon(\'redirector.redirect_err_save\'));
                    }
                }
            }

            $_SESSION[\'modx_resource_uri\'] = $new_uri;
        }

        break;
}

return \'\';',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'web' => 
      array (
        0 => 
        array (
          'principal' => 0,
          'authority' => 9999,
          'policy' => 
          array (
            'load' => true,
          ),
        ),
        1 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'events' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_unpack' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'settings' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
      ),
    ),
  ),
);