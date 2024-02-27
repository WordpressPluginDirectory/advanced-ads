<?php

// autoload_static.php @generated by Composer

namespace AdvancedAds\Composer\Autoload;

class ComposerStaticInit_AdvancedAds
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Advanced_Ads\\' => 13,
            'AdvancedAds\\BuildTools\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Advanced_Ads\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'AdvancedAds\\BuildTools\\' => 
        array (
            0 => __DIR__ . '/..' . '/advanced-ads/build-tools/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'ADVADS_SL_Plugin_Updater' => __DIR__ . '/../..' . '/classes/EDD_SL_Plugin_Updater.php',
        'Advads_Ad' => __DIR__ . '/../..' . '/classes/ad.php',
        'AdvancedAds\\Abstracts\\Types' => __DIR__ . '/../..' . '/includes/abstracts/abstract-types.php',
        'AdvancedAds\\Admin\\Action_Links' => __DIR__ . '/../..' . '/includes/admin/class-action-links.php',
        'AdvancedAds\\Admin\\Admin_Menu' => __DIR__ . '/../..' . '/includes/admin/class-admin-menu.php',
        'AdvancedAds\\Admin\\Assets' => __DIR__ . '/../..' . '/includes/admin/class-assets.php',
        'AdvancedAds\\Admin\\Groups_List_Table' => __DIR__ . '/../..' . '/includes/admin/class-groups-list-table.php',
        'AdvancedAds\\Admin\\Header' => __DIR__ . '/../..' . '/includes/admin/class-header.php',
        'AdvancedAds\\Admin\\Pages\\Ads' => __DIR__ . '/../..' . '/includes/admin/pages/class-ads.php',
        'AdvancedAds\\Admin\\Pages\\Dashboard' => __DIR__ . '/../..' . '/includes/admin/pages/class-dashboard.php',
        'AdvancedAds\\Admin\\Pages\\Groups' => __DIR__ . '/../..' . '/includes/admin/pages/class-groups.php',
        'AdvancedAds\\Admin\\Pages\\Placements' => __DIR__ . '/../..' . '/includes/admin/pages/class-placements.php',
        'AdvancedAds\\Admin\\Pages\\Settings' => __DIR__ . '/../..' . '/includes/admin/pages/class-settings.php',
        'AdvancedAds\\Admin\\TinyMCE' => __DIR__ . '/../..' . '/includes/admin/class-tinymce.php',
        'AdvancedAds\\Assets_Registry' => __DIR__ . '/../..' . '/includes/class-assets-registry.php',
        'AdvancedAds\\Autoloader' => __DIR__ . '/../..' . '/includes/class-autoloader.php',
        'AdvancedAds\\BuildTools\\AdvancedAds\\Sniffs\\Commenting\\DocCommentSniff' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/AdvancedAds/Sniffs/Commenting/DocCommentSniff.php',
        'AdvancedAds\\BuildTools\\BufferedOutput' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/BufferedOutput.php',
        'AdvancedAds\\BuildTools\\BuildToolsException' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/BuildToolsException.php',
        'AdvancedAds\\BuildTools\\BuildToolsPluginInterface' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/BuildToolsPluginInterface.php',
        'AdvancedAds\\BuildTools\\Command' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Command.php',
        'AdvancedAds\\BuildTools\\CommandProvider' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/CommandProvider.php',
        'AdvancedAds\\BuildTools\\Commands\\Assets' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Commands/Assets.php',
        'AdvancedAds\\BuildTools\\Commands\\Lib' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Commands/Lib.php',
        'AdvancedAds\\BuildTools\\Commands\\NoRelease' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Commands/NoRelease.php',
        'AdvancedAds\\BuildTools\\Commands\\Pot' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Commands/Pot.php',
        'AdvancedAds\\BuildTools\\Commands\\Release' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Commands/Release.php',
        'AdvancedAds\\BuildTools\\Commands\\Setup' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Commands/Setup.php',
        'AdvancedAds\\BuildTools\\Commands\\Teardown' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Commands/Teardown.php',
        'AdvancedAds\\BuildTools\\Commands\\Translations' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Commands/Translations.php',
        'AdvancedAds\\BuildTools\\Helpers\\ChangelogHelper' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Helpers/ChangelogHelper.php',
        'AdvancedAds\\BuildTools\\Helpers\\FilesystemHelper' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Helpers/FilesystemHelper.php',
        'AdvancedAds\\BuildTools\\Helpers\\GitFileHelper' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Helpers/GitFileHelper.php',
        'AdvancedAds\\BuildTools\\Helpers\\NamespaceHelper' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Helpers/NamespaceHelper.php',
        'AdvancedAds\\BuildTools\\Helpers\\SemVerHelper' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Helpers/SemVerHelper.php',
        'AdvancedAds\\BuildTools\\Helpers\\TranslationLockHelper' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Helpers/TranslationLockHelper.php',
        'AdvancedAds\\BuildTools\\Helpers\\TranslationReleaseHelper' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Helpers/TranslationReleaseHelper.php',
        'AdvancedAds\\BuildTools\\Plugin' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Plugin.php',
        'AdvancedAds\\BuildTools\\Release\\AbstractPluginRelease' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Release/AbstractPluginRelease.php',
        'AdvancedAds\\BuildTools\\Release\\Gam' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Release/Gam.php',
        'AdvancedAds\\BuildTools\\Release\\MainPlugin' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Release/MainPlugin.php',
        'AdvancedAds\\BuildTools\\Release\\PluginReleaseInterface' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Release/PluginReleaseInterface.php',
        'AdvancedAds\\BuildTools\\Release\\Pro' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Release/Pro.php',
        'AdvancedAds\\BuildTools\\Release\\TestPlugin' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Release/TestPlugin.php',
        'AdvancedAds\\BuildTools\\Release\\Tracking' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Release/Tracking.php',
        'AdvancedAds\\BuildTools\\Values\\SemanticVersion' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Values/SemanticVersion.php',
        'AdvancedAds\\BuildTools\\Values\\Translation' => __DIR__ . '/..' . '/advanced-ads/build-tools/src/Values/Translation.php',
        'AdvancedAds\\Entities' => __DIR__ . '/../..' . '/includes/class-entities.php',
        'AdvancedAds\\Groups\\Manager' => __DIR__ . '/../..' . '/includes/groups/class-manager.php',
        'AdvancedAds\\Groups\\Types\\Grid' => __DIR__ . '/../..' . '/includes/groups/types/type-grid.php',
        'AdvancedAds\\Groups\\Types\\Ordered' => __DIR__ . '/../..' . '/includes/groups/types/type-ordered.php',
        'AdvancedAds\\Groups\\Types\\Slider' => __DIR__ . '/../..' . '/includes/groups/types/type-slider.php',
        'AdvancedAds\\Groups\\Types\\Standard' => __DIR__ . '/../..' . '/includes/groups/types/type-standard.php',
        'AdvancedAds\\Groups\\Types\\Unknown' => __DIR__ . '/../..' . '/includes/groups/types/type-unknown.php',
        'AdvancedAds\\Installation\\Capabilities' => __DIR__ . '/../..' . '/includes/installation/class-capabilities.php',
        'AdvancedAds\\Installation\\Install' => __DIR__ . '/../..' . '/includes/installation/class-install.php',
        'AdvancedAds\\Installation\\Uninstall' => __DIR__ . '/../..' . '/includes/installation/class-uninstall.php',
        'AdvancedAds\\Interfaces\\Group_Type' => __DIR__ . '/../..' . '/includes/interfaces/interface-group-type.php',
        'AdvancedAds\\Interfaces\\Screen_Interface' => __DIR__ . '/../..' . '/includes/interfaces/interface-screen.php',
        'AdvancedAds\\Modules\\OneClick\\Admin\\Admin' => __DIR__ . '/../..' . '/modules/one-click/admin/class-admin.php',
        'AdvancedAds\\Modules\\OneClick\\Admin\\Ajax' => __DIR__ . '/../..' . '/modules/one-click/admin/class-ajax.php',
        'AdvancedAds\\Modules\\OneClick\\AdsTxt\\AdsTxt' => __DIR__ . '/../..' . '/modules/one-click/modules/adstxt/class-adstxt.php',
        'AdvancedAds\\Modules\\OneClick\\AdsTxt\\Detector' => __DIR__ . '/../..' . '/modules/one-click/modules/adstxt/class-detector.php',
        'AdvancedAds\\Modules\\OneClick\\Auto_Ads' => __DIR__ . '/../..' . '/modules/one-click/modules/class-auto-ads.php',
        'AdvancedAds\\Modules\\OneClick\\Header_Bidding' => __DIR__ . '/../..' . '/modules/one-click/modules/class-header-bidding.php',
        'AdvancedAds\\Modules\\OneClick\\Helpers' => __DIR__ . '/../..' . '/modules/one-click/class-helpers.php',
        'AdvancedAds\\Modules\\OneClick\\Options' => __DIR__ . '/../..' . '/modules/one-click/class-options.php',
        'AdvancedAds\\Modules\\OneClick\\Page_Parser' => __DIR__ . '/../..' . '/modules/one-click/class-page-parser.php',
        'AdvancedAds\\Modules\\OneClick\\Tags_Conversion' => __DIR__ . '/../..' . '/modules/one-click/modules/class-tags-conversion.php',
        'AdvancedAds\\Modules\\OneClick\\Traffic_Cop' => __DIR__ . '/../..' . '/modules/one-click/modules/class-traffic-cop.php',
        'AdvancedAds\\Modules\\OneClick\\Workflow' => __DIR__ . '/../..' . '/modules/one-click/modules/class-workflow.php',
        'AdvancedAds\\Plugin' => __DIR__ . '/../..' . '/includes/class-plugin.php',
        'AdvancedAds\\Utilities\\Conditional' => __DIR__ . '/../..' . '/includes/utilities/class-conditional.php',
        'AdvancedAds\\Utilities\\Data' => __DIR__ . '/../..' . '/includes/utilities/class-data.php',
        'AdvancedAds\\Utilities\\Groups' => __DIR__ . '/../..' . '/includes/utilities/class-groups.php',
        'AdvancedAds\\Utilities\\Str' => __DIR__ . '/../..' . '/includes/utilities/class-str.php',
        'AdvancedAds\\Utilities\\WordPress' => __DIR__ . '/../..' . '/includes/utilities/class-wordpress.php',
        'Advanced_Ads' => __DIR__ . '/../..' . '/public/class-advanced-ads.php',
        'Advanced_Ads\\Abstract_Repository' => __DIR__ . '/../..' . '/src/Abstract_Repository.php',
        'Advanced_Ads\\Ad_Repository' => __DIR__ . '/../..' . '/src/Ad_Repository.php',
        'Advanced_Ads\\Admin\\Post_List' => __DIR__ . '/../..' . '/admin/includes/class-post-list.php',
        'Advanced_Ads\\Group_Repository' => __DIR__ . '/../..' . '/src/Group_Repository.php',
        'Advanced_Ads\\Placement_Type' => __DIR__ . '/../..' . '/src/Placement_Type.php',
        'Advanced_Ads\\Placement_Type_Options' => __DIR__ . '/../..' . '/src/Placement_Type_Options.php',
        'Advanced_Ads_Ad' => __DIR__ . '/../..' . '/classes/ad.php',
        'Advanced_Ads_Ad_Ajax_Callbacks' => __DIR__ . '/../..' . '/classes/ad_ajax_callbacks.php',
        'Advanced_Ads_Ad_Authors' => __DIR__ . '/../..' . '/admin/includes/ad-authors.php',
        'Advanced_Ads_Ad_Debug' => __DIR__ . '/../..' . '/classes/ad-debug.php',
        'Advanced_Ads_Ad_Expiration' => __DIR__ . '/../..' . '/classes/ad-expiration.php',
        'Advanced_Ads_Ad_Health_Notices' => __DIR__ . '/../..' . '/classes/ad-health-notices.php',
        'Advanced_Ads_Ad_List_Filters' => __DIR__ . '/../..' . '/admin/includes/class-list-filters.php',
        'Advanced_Ads_Ad_Network' => __DIR__ . '/../..' . '/admin/includes/class-ad-network.php',
        'Advanced_Ads_Ad_Network_Ad_Importer' => __DIR__ . '/../..' . '/admin/includes/class-ad-network-ad-importer.php',
        'Advanced_Ads_Ad_Network_Ad_Unit' => __DIR__ . '/../..' . '/admin/includes/class-ad-network-ad-unit.php',
        'Advanced_Ads_Ad_Positioning' => __DIR__ . '/../..' . '/modules/ad-positioning/classes/ad-positioning.php',
        'Advanced_Ads_Ad_Type_Abstract' => __DIR__ . '/../..' . '/classes/ad_type_abstract.php',
        'Advanced_Ads_Ad_Type_Content' => __DIR__ . '/../..' . '/classes/ad_type_content.php',
        'Advanced_Ads_Ad_Type_Dummy' => __DIR__ . '/../..' . '/classes/ad_type_dummy.php',
        'Advanced_Ads_Ad_Type_Group' => __DIR__ . '/../..' . '/classes/ad_type_group.php',
        'Advanced_Ads_Ad_Type_Image' => __DIR__ . '/../..' . '/classes/ad_type_image.php',
        'Advanced_Ads_Ad_Type_Plain' => __DIR__ . '/../..' . '/classes/ad_type_plain.php',
        'Advanced_Ads_Admin' => __DIR__ . '/../..' . '/admin/class-advanced-ads-admin.php',
        'Advanced_Ads_Admin_Ad_Type' => __DIR__ . '/../..' . '/admin/includes/class-ad-type.php',
        'Advanced_Ads_Admin_Licenses' => __DIR__ . '/../..' . '/admin/includes/class-licenses.php',
        'Advanced_Ads_Admin_Meta_Boxes' => __DIR__ . '/../..' . '/admin/includes/class-meta-box.php',
        'Advanced_Ads_Admin_Notices' => __DIR__ . '/../..' . '/admin/includes/class-notices.php',
        'Advanced_Ads_Admin_Options' => __DIR__ . '/../..' . '/admin/includes/class-options.php',
        'Advanced_Ads_Admin_Settings' => __DIR__ . '/../..' . '/admin/includes/class-settings.php',
        'Advanced_Ads_Admin_Upgrades' => __DIR__ . '/../..' . '/admin/includes/class-admin-upgrades.php',
        'Advanced_Ads_Ajax' => __DIR__ . '/../..' . '/classes/ad-ajax.php',
        'Advanced_Ads_Checks' => __DIR__ . '/../..' . '/classes/checks.php',
        'Advanced_Ads_Compatibility' => __DIR__ . '/../..' . '/classes/compatibility.php',
        'Advanced_Ads_Display_Conditions' => __DIR__ . '/../..' . '/classes/display-conditions.php',
        'Advanced_Ads_Filesystem' => __DIR__ . '/../..' . '/classes/filesystem.php',
        'Advanced_Ads_Frontend_Checks' => __DIR__ . '/../..' . '/classes/frontend_checks.php',
        'Advanced_Ads_Group' => __DIR__ . '/../..' . '/classes/ad_group.php',
        'Advanced_Ads_In_Content_Injector' => __DIR__ . '/../..' . '/classes/in-content-injector.php',
        'Advanced_Ads_Inline_Css' => __DIR__ . '/../..' . '/classes/inline-css.php',
        'Advanced_Ads_Modal' => __DIR__ . '/../..' . '/classes/Advanced_Ads_Modal.php',
        'Advanced_Ads_Model' => __DIR__ . '/../..' . '/classes/ad-model.php',
        'Advanced_Ads_ModuleLoader' => __DIR__ . '/../..' . '/includes/load_modules.php',
        'Advanced_Ads_Overview_Widgets_Callbacks' => __DIR__ . '/../..' . '/admin/includes/class-overview-widgets.php',
        'Advanced_Ads_Placements' => __DIR__ . '/../..' . '/classes/ad_placements.php',
        'Advanced_Ads_Plugin' => __DIR__ . '/../..' . '/classes/plugin.php',
        'Advanced_Ads_Select' => __DIR__ . '/../..' . '/classes/ad-select.php',
        'Advanced_Ads_Shortcode_Creator' => __DIR__ . '/../..' . '/admin/includes/class-shortcode-creator.php',
        'Advanced_Ads_Upgrades' => __DIR__ . '/../..' . '/classes/upgrades.php',
        'Advanced_Ads_Utils' => __DIR__ . '/../..' . '/classes/utils.php',
        'Advanced_Ads_Visitor_Conditions' => __DIR__ . '/../..' . '/classes/visitor-conditions.php',
        'Advanced_Ads_Widget' => __DIR__ . '/../..' . '/classes/widget.php',

        'Detection\\MobileDetect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced/Detection/MobileDetect.php',
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
        'Translation_Promo' => __DIR__ . '/../..' . '/classes/class-translation-promo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit_AdvancedAds::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit_AdvancedAds::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit_AdvancedAds::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit_AdvancedAds::$classMap;

        }, null, ClassLoader::class);
    }
}
