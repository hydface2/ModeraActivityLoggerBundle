<?php

namespace Modera\DynamicallyConfigurableMJRBundle\Contributions;

use Modera\BackendToolsSettingsBundle\Section\StandardSection;
use Sli\ExpanderBundle\Ext\ContributorInterface;

/**
 * @author    Sergei Lissovski <sergei.lissovski@modera.org>
 * @copyright 2014 Modera Foundation
 */
class SettingsSectionsProvider implements ContributorInterface
{
    /**
     * @inheritDoc
     */
    public function getItems()
    {
        return array(
            new StandardSection(
                'general', 'General', 'Modera.backend.dcab.runtime.SettingsListActivity', 'gear', array('category' => 'general')
            )
        );
    }
} 