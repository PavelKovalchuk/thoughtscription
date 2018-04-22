<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 13.01.2018
 * Time: 12:55
 */


//Path and directories

define("TEMPLATE_DIR", get_template_directory() . '/');

define("TEMPLATE_URI", get_template_directory_uri() . '/');

define("INCLUDES_DIR", TEMPLATE_DIR . "inc/");

define("INCLUDES_CLASSES_DIR", INCLUDES_DIR . "classes/");

define("TEMPLATE_PARTS_MAIN_DIR", TEMPLATE_DIR . "template-parts/");

define("OPTION_PAGES_MAIN_DIR", INCLUDES_DIR . "option_pages/");
define("OPTION_PAGES_DIR", OPTION_PAGES_MAIN_DIR . "pages/");

define("CPT_MAIN_DIR", INCLUDES_DIR . "custom_post_types/");
define("CPT_DIR", CPT_MAIN_DIR . "types/");

define("AJAX_HANDLERS_MAIN_DIR", INCLUDES_DIR . "ajax_handlers/");
define("AJAX_HANDLERS_DIR", AJAX_HANDLERS_MAIN_DIR . "handlers/");

define("CORE_CHANGES_MAIN_DIR", INCLUDES_DIR . "core_changes/");
define("CORE_CHANGES_DIR", CORE_CHANGES_MAIN_DIR . "changes/");

/*define("FORMS_MAIN_DIR", INCLUDES_DIR . "forms/");
define("FORMS_CLASSES_DIR", FORMS_MAIN_DIR . "classes/");
define("FORMS_ABSTRACT_CLASSES_DIR", FORMS_CLASSES_DIR . "abstracts/");
define("FORMS_TRAITS_DIR", FORMS_CLASSES_DIR . "traits/");
define("FORMS_HELPERS_DIR", FORMS_CLASSES_DIR . "helpers/");
define("FORMS_MODELS_DIR", FORMS_MAIN_DIR . "models/");
define("FORMS_MODELS_FORMS_DIR", FORMS_MODELS_DIR . "forms/");
define("FORMS_MODELS_FETCHERS_DIR", FORMS_MODELS_DIR . "fetchers/");*/
define("FORMS_TEMPLATE_DIR", TEMPLATE_PARTS_MAIN_DIR . "forms/");
//define("FORMS_LOGS_DIR", FORMS_MAIN_DIR . "logs/");


//common used variables





