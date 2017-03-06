/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function () {


    template_events.addEventsToHtml(jQuery('body'));
});

template_events = function () {
    return {
        addEventsToHtml: function (html) {
            template_events.addTemplateSelectEvent(html);
        }, addTemplateSelectEvent: function (html) {
            html.find('#template_id').change(function () {
                var template_id = jQuery(this).val();
                var url = kazicode.url + '?notification.newsletter.edit&template_id=' + template_id;
                //alert(url); return false;
                window.location.href = url;
                // alert(url);
                return false;
            });

        }
    };
}();