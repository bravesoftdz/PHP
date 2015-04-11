/**
 * Generic Javascript for Mahoney
 */
var mahoneyBase = {
    controller: {
        tableSorter: function () {
            if ($(".table").length > 0) {
                $(".table").tablesorter();
            }
        },
        tooltipElement: function () {
            if ($('.tooltipElement').length > 0) {
                $('.tooltipElement').tooltip();
            }
        },
        popuper: function () {
            if ($('.popuper').length > 0) {
                $('.popuper').click(function () {
                    var w = 510;
                    var h = 462;
                    var left = (screen.width / 2) - (w / 2);
                    var top = (screen.height / 2) - (h / 2);
                    return window.open(this.href, this.target, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
                });
            }
        }
    }
};

$(document).ready(function () {
    for (key in mahoneyBase.controller) {
        mahoneyBase.controller[key]();
    }
});