<?php

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'eigene_inhaltselemente'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
mod {
    wizards.newContentElement.wizardItems.extra {
        header = OnePage
        elements {
            image_slider {
                icon = ../typo3conf/ext/eigene_inhaltselemente/Resources/Public/Images/Backend/ContentElements/logo.gif
                title = Image Slider
                description = Macht einen Image Slider aus einer Liste von Bildern
                tt_content_defValues {
                    CType = image_slider
                }
            }
        }
        show = *
    }
}
');
