!function(a){"function"==typeof define&&define.amd?define(["jquery","moment"],a):"object"==typeof exports?module.exports=a(require("jquery"),require("moment")):a(jQuery,moment)}(function(a,b){!function(){"use strict";function a(a,b){var c=a.split("_");return b%10===1&&b%100!==11?c[0]:b%10>=2&&4>=b%10&&(10>b%100||b%100>=20)?c[1]:c[2]}function c(b,c,d){var e={mm:c?"������_������_�����":"������_������_�����",hh:"���_����_�����",dd:"����_���_����",MM:"�����_������_�������",yy:"���_����_���"};return"m"===d?c?"������":"������":b+" "+a(e[d],+b)}var d=[/^���/i,/^���/i,/^���/i,/^���/i,/^��[�|�]/i,/^���/i,/^���/i,/^���/i,/^���/i,/^���/i,/^���/i,/^���/i],e=(b.defineLocale||b.lang).call(b,"ru",{months:{format:"������_�������_�����_������_���_����_����_�������_��������_�������_������_�������".split("_"),standalone:"������_�������_����_������_���_����_����_������_��������_�������_������_�������".split("_")},monthsShort:{format:"���_���_���_���_���_����_����_���_���_���_���_���".split("_"),standalone:"���_���_����_���_���_����_����_���_���_���_���_���".split("_")},weekdays:{standalone:"�����������_�����������_�������_�����_�������_�������_�������".split("_"),format:"�����������_�����������_�������_�����_�������_�������_�������".split("_"),isFormat:/\[ ?[��] ?(?:�������|���������|���)? ?\] ?dddd/},weekdaysShort:"��_��_��_��_��_��_��".split("_"),weekdaysMin:"��_��_��_��_��_��_��".split("_"),monthsParse:d,longMonthsParse:d,shortMonthsParse:d,longDateFormat:{LT:"HH:mm",LTS:"HH:mm:ss",L:"DD.MM.YYYY",LL:"D MMMM YYYY �.",LLL:"D MMMM YYYY �., HH:mm",LLLL:"dddd, D MMMM YYYY �., HH:mm"},calendar:{sameDay:"[������� �] LT",nextDay:"[������ �] LT",lastDay:"[����� �] LT",nextWeek:function(a){if(a.week()===this.week())return 2===this.day()?"[��] dddd [�] LT":"[�] dddd [�] LT";switch(this.day()){case 0:return"[� ���������] dddd [�] LT";case 1:case 2:case 4:return"[� ���������] dddd [�] LT";case 3:case 5:case 6:return"[� ���������] dddd [�] LT"}},lastWeek:function(a){if(a.week()===this.week())return 2===this.day()?"[��] dddd [�] LT":"[�] dddd [�] LT";switch(this.day()){case 0:return"[� �������] dddd [�] LT";case 1:case 2:case 4:return"[� �������] dddd [�] LT";case 3:case 5:case 6:return"[� �������] dddd [�] LT"}},sameElse:"L"},relativeTime:{future:"����� %s",past:"%s �����",s:"��������� ������",m:c,mm:c,h:"���",hh:c,d:"����",dd:c,M:"�����",MM:c,y:"���",yy:c},meridiemParse:/����|����|���|������/i,isPM:function(a){return/^(���|������)$/.test(a)},meridiem:function(a,b,c){return 4>a?"����":12>a?"����":17>a?"���":"������"},ordinalParse:/\d{1,2}-(�|��|�)/,ordinal:function(a,b){switch(b){case"M":case"d":case"DDD":return a+"-�";case"D":return a+"-��";case"w":case"W":return a+"-�";default:return a}},week:{dow:1,doy:7}});return e}(),a.fullCalendar.datepickerLang("ru","ru",{closeText:"�������",prevText:"&#x3C;����",nextText:"����&#x3E;",currentText:"�������",monthNames:["������","�������","����","������","���","����","����","������","��������","�������","������","�������"],monthNamesShort:["���","���","���","���","���","���","���","���","���","���","���","���"],dayNames:["�����������","�����������","�������","�����","�������","�������","�������"],dayNamesShort:["���","���","���","���","���","���","���"],dayNamesMin:["��","��","��","��","��","��","��"],weekHeader:"���",dateFormat:"dd.mm.yy",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:""}),a.fullCalendar.lang("ru",{buttonText:{month:"�����",week:"������",day:"����",list:"�������� ���"},allDayText:"���� ����",eventLimitText:function(a){return"+ ��� "+a}})});