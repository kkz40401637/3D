(function($) {
  'use strict';
  $(function() 
  {
    if ($('#editable-form').length) {
      $.fn.editable.defaults.mode = 'inline';      
      $.fn.editableform.buttons =
        '<button type="submit" class="btn btn-primary btn-sm editable-submit">' +
        '<i class="fa fa-fw fa-check"></i>' +
        '</button>' +
        '<button type="button" class="btn btn-default btn-sm editable-cancel">' +
        '<i class="fa fa-fw fa-times"></i>' +
        '</button>';

      $.ajaxSetup({
        headers: {
          'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#qty').editable({
        url: '/admin/update-coin',
        type: 'number',
        pk: 1,
        name: 'qty',
      });

      $('#std_price').editable({
        url: '/admin/update-qty',
        type: 'number',
        pk: 1,
        name: 'std_price',
      });

      $('#payment_status').editable({
        url: '/admin/paymentstatus',
        type: 'select',
        pk: 1,
        name: 'status',
        source: [
          { value: 'Pending', text: 'Pending' },
          { value: 'Approved', text: 'Approved' },
          { value: 'Rejected', text: 'Rejected' }
        ]
      });
    }
  });
})(jQuery);