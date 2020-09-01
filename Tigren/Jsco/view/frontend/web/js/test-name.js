define([
        'jquery',
        'uiComponent',
        'ko',
        'mage/translate'
    ], function ($, Component, ko, $t) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'Tigren_Jsco/test-name',
                title: $t('Demo Name'),
                names: [],
            },
            getTitle: function () {
                return this.title;
            }
        });
    }
);
