/*=========================================================================================
        File Name: form-input-mask.js
        Description: Input Masks
        ----------------------------------------------------------------------------------------
        Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
        Author: Pixinvent
        Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(function() {
    'use strict';
    var creditCard = $('.credit-card-mask'),
        phoneMask = $('.phone-number-mask'),
        dateMask = $('.date-mask'),
        timeMask1 = $('.time-mask1'),
        timeMask2 = $('.time-mask2'),
        timeMask3 = $('.time-mask3'),
        timeMask4 = $('.time-mask4'),
        timeMask5 = $('.time-mask5'),
        timeMask6 = $('.time-mask6'),
        timeMask7 = $('.time-mask7'),
        timeMask8 = $('.time-mask8'),
        timeMask9 = $('.time-mask9'),
        numeralMask = $('.numeral-mask'),
        blockMask = $('.block-mask'),
        delimiterMask = $('.delimiter-mask'),
        customDelimiter = $('.custom-delimiter-mask'),
        prefixMask = $('.prefix-mask');
    // Credit Card
    if (creditCard.length) {
        creditCard.each(function() {
            new Cleave($(this), {
                creditCard: true
            });
        });
    }
    // Phone Number
    if (phoneMask.length) {
        new Cleave(phoneMask, {
            phone: true,
            phoneRegionCode: 'US'
        });
    }
    // Date
    if (dateMask.length) {
        new Cleave(dateMask, {
            date: true,
            delimiter: '-',
            datePattern: ['Y', 'm', 'd']
        });
    }
    // Time
    if (timeMask1.length) {
        new Cleave(timeMask1, {
            time: true,
            // timePattern: ['h', 'm', 's']
            timePattern: ['h', 'm']
        });
    }
    if (timeMask2.length) {
        new Cleave(timeMask2, {
            time: true,
            // timePattern: ['h', 'm', 's']
            timePattern: ['h', 'm']
        });
    }
    if (timeMask3.length) {
        new Cleave(timeMask3, {
            time: true,
            // timePattern: ['h', 'm', 's']
            timePattern: ['h', 'm']
        });
    }
    if (timeMask4.length) {
        new Cleave(timeMask4, {
            time: true,
            // timePattern: ['h', 'm', 's']
            timePattern: ['h', 'm']
        });
    }
    if (timeMask5.length) {
        new Cleave(timeMask5, {
            time: true,
            // timePattern: ['h', 'm', 's']
            timePattern: ['h', 'm']
        });
    }
    if (timeMask6.length) {
        new Cleave(timeMask6, {
            time: true,
            // timePattern: ['h', 'm', 's']
            timePattern: ['h', 'm']
        });
    }
    if (timeMask7.length) {
        new Cleave(timeMask7, {
            time: true,
            // timePattern: ['h', 'm', 's']
            timePattern: ['h', 'm']
        });
    }
    if (timeMask8.length) {
        new Cleave(timeMask8, {
            time: true,
            // timePattern: ['h', 'm', 's']
            timePattern: ['h', 'm']
        });
    }
    if (timeMask9.length) {
        new Cleave(timeMask9, {
            time: true,
            // timePattern: ['h', 'm', 's']
            timePattern: ['h', 'm']
        });
    }
    //Numeral
    if (numeralMask.length) {
        new Cleave(numeralMask, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });
    }
    //Block
    if (blockMask.length) {
        new Cleave(blockMask, {
            blocks: [4, 3, 3],
            uppercase: true
        });
    }
    // Delimiter
    if (delimiterMask.length) {
        new Cleave(delimiterMask, {
            delimiter: '·',
            blocks: [3, 3, 3],
            uppercase: true
        });
    }
    // Custom Delimiter
    if (customDelimiter.length) {
        new Cleave(customDelimiter, {
            delimiters: ['.', '.', '-'],
            blocks: [3, 3, 3, 2],
            uppercase: true
        });
    }
    // Prefix
    if (prefixMask.length) {
        new Cleave(prefixMask, {
            prefix: '+63',
            blocks: [3, 3, 3, 4],
            uppercase: true
        });
    }
});