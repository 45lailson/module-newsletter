define([
    'uiComponent',
    'jquery',
    'Magento_Ui/js/modal/modal',
    'Magento_Customer/js/customer-data'
], function (Component, $, modal, storage) {
    'use strict';

    var cacheKey = 'modal-overlay';

    var getData = function () {
        return storage.get(cacheKey)();
    };

    var saveData = function (data) {
        storage.set(cacheKey, data);
    };

    if ($.isEmptyObject(getData())) {
        var modal_overlay = {
            'modal_overlay': false
        };
        saveData(modal_overlay);
    }

    return Component.extend({

        initialize: function () {

            this._super();
            var options = {
                type: 'popup',
                responsive: true,
                innerScroll: false,
                title: false,
                buttons: false,
                modalClass: 'modal-overlay-container'
            };
            var modal_overlay_element = $('#modal-overlay');
            modal_overlay_element.modal(options);
            if (!localStorage.getItem('modalPopupDisplayed')) {
                setTimeout(function(){
                    modal_overlay_element.modal('openModal');
                    localStorage.setItem('modalPopupDisplayed', true);
                },5000);
            }

        },

        openModalOverlayModal:function(){

        },

        setModalOverlay: function (data) {
            var obj = getData();
            obj.modal_overlay = data;
            saveData(obj);
        },

        getModalOverlay: function () {
            return getData().modal_overlay;
        }

    });
});
