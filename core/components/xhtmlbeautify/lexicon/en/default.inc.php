<?php
/**
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
 * @package     xhtmlbeautify
 * @subpackage  lexicon
 * @author      Dan Gibbs <dan@goldcoastmedia.co.uk>
 * @language    en
 */

$_lang['XHTMLBeautify'] = 'XHTML Beautify';

$_lang['setting_xhtmlbeautify.indent_output'] = 'Indent Output';
$_lang['setting_xhtmlbeautify.indent_output_desc'] = 'Indent HTML output and 
remove unnecessary whitespace and trailing whitespace.';

$_lang['setting_xhtmlbeautify.enabled'] = 'Enabled';
$_lang['setting_xhtmlbeautify.enabled_desc'] = 'Enable/Disable the plugin from
taking effect.';

$_lang['setting_xhtmlbeautify.remove_empty_lines'] = 'Remove Empty Lines';
$_lang['setting_xhtmlbeautify.remove_empty_lines_desc'] = 'Remove empty lines 
from the source code.';

$_lang['setting_xhtmlbeautify.remove_comments'] = 'Remove HTML Comments';
$_lang['setting_xhtmlbeautify.remove_comments_desc'] = 'Remove all HTML comment 
<!-- ... --> output.';

$_lang['setting_xhtmlbeautify.convert_quotes'] = 'Convert Quotes';
$_lang['setting_xhtmlbeautify.convert_quotes_desc'] = 'Convert single quoted \' 
attribute values into double quoted " values.';


$_lang['setting_xhtmlbeautify.ignored_tags'] = 'Ignored Tags';
$_lang['setting_xhtmlbeautify.ignored_tags_desc'] = 'Comma separated list of all 
tags which contents will be preserved by the output cleaning. It is highly 
recommended to preserve the pre, script and textarea tag.';

$_lang['setting_xhtmlbeautify.ignored_attributes'] = 'Ignored Attributes';
$_lang['setting_xhtmlbeautify.ignored_attributes_desc'] = 'Comma separated list 
of all tag attributes which will be ignored by the single quotes conversion.';

$_lang['area_output-cleaning'] = 'Cleaning';
$_lang['area_ignore-config'] = 'Ignore';
