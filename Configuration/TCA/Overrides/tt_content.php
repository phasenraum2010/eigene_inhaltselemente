<?php

$tcaTtContent = array(
    'types' => array(
        'image_slider' => array(
            'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
            header;Headline,
            subheader;Subheadline,
            image;Image,
            bodytext;Text;;richtext,
            --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended'
        ),
    ),
    'columns' => array(
        'CType' => array(
            'config' => array(
                'items' => array(
                    'image_slider' => array(
                        'Image Slider',
                        // Name des Inhaltselementes
                        'image_slider',
                        // TCA Name des Inhaltselementes
                        'EXT:eigene_inhaltselemente/Resources/Public/Images/Backend/ContentElements/logo.gif'
                        // Bild des Inhaltelementes
                    )
                )
            )
        )
    )
);

\TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule($GLOBALS['TCA']['tt_content'], $tcaTtContent);
