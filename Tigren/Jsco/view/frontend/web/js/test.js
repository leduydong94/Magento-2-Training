define([
    'jquery',
    'mage/translate'
], function ($, $t) {
    'use strict';
    $.widget('tigren.welcome', {
        _create: function () {
            this.element.text($t('Welcome ' + this.options.name));
        }
    });
    return $.tigren.welcome;
});
