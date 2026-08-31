(function ($) {
  'use strict';

  let rates = {};
  let rate = 1;
  let base = 'USD';
  let recipientCurrency = 'GBP';

  function money(value) {
    return Math.round(Number(value || 0) * 100) / 100;
  }

  function refreshRate() {
    base = $('button[data-id="youSendCurrency"]').attr('title') || 'USD';
    recipientCurrency = $('button[data-id="recipientCurrency"]').attr('title') || 'GBP';

    $.getJSON('exchange-rates', { base: base })
      .done(function (response) {
        rates = response.conversion_rates || {};
        rate = Number(rates[recipientCurrency] || 0);

        if (!rate) {
          $('#current').text('Exchange rate unavailable');
          return;
        }

        $('#current').html(
          'The current exchange rate is <span class="font-weight-500">1 ' +
          $('<div>').text(base).html() + ' = <span id="rate">' +
          money(rate) + '</span> ' + $('<div>').text(recipientCurrency).html() +
          '</span>'
        );

        recalculate();
      })
      .fail(function () {
        $('#current').text('Exchange rate unavailable. Please try again.');
      });
  }

  function recalculate() {
    const sendAmount = Number($('#youSend').val() || 0);
    const recipientAmount = Number($('#recipientGets').val() || 0);

    if (document.activeElement === $('#recipientGets')[0]) {
      const usdAmount = rate > 0 ? recipientAmount / rate : 0;
      $('#youSend').val(money(usdAmount));
    } else {
      $('#recipientGets').val(money(sendAmount * rate));
    }

    const usd = Number($('#youSend').val() || 0);
    const usdRate = Number(rates.USD || (base === 'USD' ? 1 : 0));
    $('#total').text(money(usd * usdRate));
  }

  $(function () {
    refreshRate();

    $('#youSend, #recipientGets').on('input', recalculate);
    $('#youSendCurrency, #recipientCurrency').on('changed.bs.select', refreshRate);

    $('#send').on('click', function () {
      const $button = $(this);
      const email = $.trim($('#email').val());
      const recipientAmount = Number($('#recipientGets').val() || 0);
      const totalUsd = Number($('#total').text() || 0);
      const csrfToken = $('body').data('csrf-token');

      if (!email) {
        swal('Sorry', 'Enter a registered recipient email address.', 'info');
        return;
      }

      if (!Number.isFinite(totalUsd) || totalUsd < 1) {
        swal('Oops', 'Minimum amount to send is 1 USD.', 'info');
        return;
      }

      $button.hide();
      $('#processing').show();

      $.ajax({
        url: 'transfer-action',
        type: 'POST',
        dataType: 'json',
        data: {
          email: email,
          recipient_amount: recipientAmount,
          recipient_currency: recipientCurrency,
          total_usd: totalUsd,
          csrf_token: csrfToken
        }
      }).done(function (response) {
        if (response.ok) {
          swal('Great', 'Your money transfer was successful.', 'success');
          setTimeout(function () {
            location.replace('send-money-success');
          }, 1000);
          return;
        }

        swal('Sorry', response.message || 'Transfer failed.', 'info');
        $button.show();
        $('#processing').hide();
      }).fail(function (xhr) {
        const message = xhr.responseJSON && xhr.responseJSON.message
          ? xhr.responseJSON.message
          : 'Unable to complete the transfer.';
        swal('Oops', message, 'info');
        $button.show();
        $('#processing').hide();
      });
    });
  });
})(jQuery);
