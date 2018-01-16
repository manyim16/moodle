<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for manyi details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme More settings.
 *
 * Each setting that is defined in the parent theme Clean should be
 * defined here too, and use the exact same config name. The reason
 * is that theme_manyi does not define any layout files to re-use the
 * ones from theme_clean. But as those layout files use the function
 * {@link theme_clean_get_html_for_settings} that belong to Clean,
 * we have to make sure it works as expected by having the same settings
 * in our theme.
 *
 * @see        theme_clean_get_html_for_settings
 * @package    theme_manyi
 * @copyright  2014 Frédéric Massart
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // @textColor setting.
    $name = 'theme_manyi/textcolor';
    $title = get_string('textcolor', 'theme_manyi');
    $description = get_string('textcolor_desc', 'theme_manyi');
    $default = '#333366';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @linkColor setting.
    $name = 'theme_manyi/linkcolor';
    $title = get_string('linkcolor', 'theme_manyi');
    $description = get_string('linkcolor_desc', 'theme_manyi');
    $default = '#FF6500';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footer setting.
    $name = 'theme_manyi/footertextcolor';
    $title = get_string('footertextcolor', 'theme_manyi');
    $description = get_string('footertextcolor_desc', 'theme_manyi');
    $default = '#4f7bd6';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // header2 colour setting.
    $name = 'theme_manyi/h2color';
    $title = get_string('h2color', 'theme_manyi');
    $description = get_string('h2color_desc', 'theme_manyi');
    $default = '#4f7bd6';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // phover colour setting.
    $name = 'theme_manyi/phover';
    $title = get_string('phover', 'theme_manyi');
    $description = get_string('phover_desc', 'theme_manyi');
    $default = '#4f7bd6';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @bodyBackground setting.
    $name = 'theme_manyi/bodybackground';
    $title = get_string('bodybackground', 'theme_manyi');
    $description = get_string('bodybackground_desc', 'theme_manyi');
    $default = '';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background image setting.
    $name = 'theme_manyi/backgroundimage';
    $title = get_string('backgroundimage', 'theme_manyi');
    $description = get_string('backgroundimage_desc', 'theme_manyi');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background repeat setting.
    $name = 'theme_manyi/backgroundrepeat';
    $title = get_string('backgroundrepeat', 'theme_manyi');
    $description = get_string('backgroundrepeat_desc', 'theme_manyi');;
    $default = 'repeat';
    $choices = array(
        '0' => get_string('default'),
        'repeat' => get_string('backgroundrepeatrepeat', 'theme_manyi'),
        'repeat-x' => get_string('backgroundrepeatrepeatx', 'theme_manyi'),
        'repeat-y' => get_string('backgroundrepeatrepeaty', 'theme_manyi'),
        'no-repeat' => get_string('backgroundrepeatnorepeat', 'theme_manyi'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background position setting.
    $name = 'theme_manyi/backgroundposition';
    $title = get_string('backgroundposition', 'theme_manyi');
    $description = get_string('backgroundposition_desc', 'theme_manyi');
    $default = '0';
    $choices = array(
        '0' => get_string('default'),
        'left_top' => get_string('backgroundpositionlefttop', 'theme_manyi'),
        'left_center' => get_string('backgroundpositionleftcenter', 'theme_manyi'),
        'left_bottom' => get_string('backgroundpositionleftbottom', 'theme_manyi'),
        'right_top' => get_string('backgroundpositionrighttop', 'theme_manyi'),
        'right_center' => get_string('backgroundpositionrightcenter', 'theme_manyi'),
        'right_bottom' => get_string('backgroundpositionrightbottom', 'theme_manyi'),
        'center_top' => get_string('backgroundpositioncentertop', 'theme_manyi'),
        'center_center' => get_string('backgroundpositioncentercenter', 'theme_manyi'),
        'center_bottom' => get_string('backgroundpositioncenterbottom', 'theme_manyi'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background fixed setting.
    $name = 'theme_manyi/backgroundfixed';
    $title = get_string('backgroundfixed', 'theme_manyi');
    $description = get_string('backgroundfixed_desc', 'theme_manyi');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Main content background color.
    $name = 'theme_manyi/contentbackground';
    $title = get_string('contentbackground', 'theme_manyi');
    $description = get_string('contentbackground_desc', 'theme_manyi');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Secondary background color.
    $name = 'theme_manyi/secondarybackground';
    $title = get_string('secondarybackground', 'theme_manyi');
    $description = get_string('secondarybackground_desc', 'theme_manyi');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Invert Navbar to dark background.
    $name = 'theme_manyi/invert';
    $title = get_string('invert', 'theme_manyi');
    $description = get_string('invertdesc', 'theme_manyi');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Logo file setting.
    $name = 'theme_manyi/logo';
    $title = get_string('logo','theme_manyi');
    $description = get_string('logodesc', 'theme_manyi');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Small logo file setting.
    $name = 'theme_manyi/smalllogo';
    $title = get_string('smalllogo', 'theme_manyi');
    $description = get_string('smalllogodesc', 'theme_manyi');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'smalllogo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Show site name along with small logo.
    $name = 'theme_manyi/sitename';
    $title = get_string('sitename', 'theme_manyi');
    $description = get_string('sitenamedesc', 'theme_manyi');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_manyi/customcss';
    $title = get_string('customcss', 'theme_manyi');
    $description = get_string('customcssdesc', 'theme_manyi');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_manyi/footnote';
    $title = get_string('footnote', 'theme_manyi');
    $description = get_string('footnotedesc', 'theme_manyi');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // font size setting.
    $name = 'theme_manyi/fontsize';
    $title = get_string('fontsize', 'theme_manyi');
    $description = get_string('fontsize_desc', 'theme_manyi');
    $default = '16px';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // file
    $name = 'theme_manyi/file';
    $title = get_string('file', 'theme_manyi');
    $description = get_string('file_desc', 'theme_manyi');
    $default = '16px';
    $setting = new admin_setting_configstoredfile($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);




}
