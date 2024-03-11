<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script type=text/javascript>
    ( function( factory ) {
        if ( typeof define === "function" && define.amd ) {
            define( [ "../widgets/datepicker" ], factory );
        } else {
            factory( jQuery.datepicker );
        }
    }( function( datepicker ) {

        datepicker.regional.vi = {
            closeText: "Đóng",
            prevText: "&#x3C;Trước",
            nextText: "Tiếp&#x3E;",
            currentText: "Hôm nay",
            monthNames: [ "Tháng Một", "Tháng Hai", "Tháng Ba", "Tháng Tư", "Tháng Năm", "Tháng Sáu",
            "Tháng Bảy", "Tháng Tám", "Tháng Chín", "Tháng Mười", "Tháng Mười Một", "Tháng Mười Hai" ],
            monthNamesShort: [ "Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6",
            "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12" ],
            dayNames: [ "Chủ Nhật", "Thứ Hai", "Thứ Ba", "Thứ Tư", "Thứ Năm", "Thứ Sáu", "Thứ Bảy" ],
            dayNamesShort: [ "CN", "T2", "T3", "T4", "T5", "T6", "T7" ],
            dayNamesMin: [ "CN", "T2", "T3", "T4", "T5", "T6", "T7" ],
            weekHeader: "Tu",
            dateFormat: "dd/mm/yy",
            firstDay: 0,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: "" };
            datepicker.setDefaults( datepicker.regional.vi );
            return datepicker.regional.vi;
        } ) );
    $.datepicker.setDefaults($.datepicker.regional['vi']);
    $.datepicker.setDefaults({
        dateFormat: 'DD dd/mm/yy',
        minDate: 0,
        firstDay: 1,
    });
    $(function(){
        $('.datepickerx').datepicker({ dateFormat: 'DD dd/mm/yy',minDate: 0 });
        $("#dt1").datepicker({
            onSelect: function () {
                var dt2 = $('#dt2');
                var startDate = $(this).datepicker('getDate');
                var minDate = $(this).datepicker('getDate');
                var dt2Date = dt2.datepicker('getDate');
                var dateDiff = (dt2Date - minDate)/(86400 * 1000);

                startDate.setDate(startDate.getDate() + 30);
                if (dt2Date == null || dateDiff < 0) {
                    dt2.datepicker('setDate', minDate);
                }
                else if (dateDiff > 30){
                    dt2.datepicker('setDate', startDate);
                }
                dt2.datepicker('option', 'maxDate', startDate);
                minDate.setDate(minDate.getDate() + 1);
                dt2.datepicker('option', 'minDate', minDate);
                dt2.val(dt2.val() + ' (1 đêm)');
            }
        });
        $('#dt2').datepicker({
            onSelect: function(a, b) {
                var diff = $('#dt1').datepicker("getDate") - $(this).datepicker("getDate");
                diff = Math.floor(diff / (1000 * 60 * 60 * 24) * -1);
                var value = a + ' (' + diff + ' đêm)';
                $(this).val(value);
            }
        });
    });
</script>
