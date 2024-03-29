<link
  href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Roboto&family=IBM+Plex+Sans:wght@400;600&display=swap"
  rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://unpkg.com/intl-tel-input@17.0.18/build/css/intlTelInput.min.css" />
<form method="POST" action="https://meditacaotranscedental.activehosted.com/proc.php" id="_form_24_"
  class="text-white _form _form_24 _inline-form  _dark" novalidate>
  <input type="hidden" name="u" value="24" />
  <input type="hidden" name="f" value="24" />
  <input type="hidden" name="s" />
  <input type="hidden" name="c" value="0" />
  <input type="hidden" name="m" value="0" />
  <input type="hidden" name="act" value="sub" />
  <input type="hidden" name="v" value="2" />
  <input type="hidden" name="or" value="a65e30366583adc3ed9583c682ebe823" />
  <div class="_form-content">
    <div class="_form_element _x69614464 _full_width _clear">
      <div class="_form-title fs-3 fw-500 mb-3">
        <h2 class="fs-2">Faça sua inscrição e participe gratuitamente.</h2>
      </div>
    </div>
    <div class="_form_element _x60340826 _full_width row mb-3">
      <div class="_field-wrapper">
        <input class="form-control input-live-convidados" type="text" id="firstname" name="firstname" required />
        <label for="firstname" class="_form-label fw-light">Nome*</label>
      </div>
    </div>
    <div class="_form_element _x94820930 _full_width row mb-3">
      <div class="_field-wrapper">
        <input class="form-control input-live-convidados" type="text" id="lastname" name="lastname" required />
        <label for="lastname" class="_form-label fw-light">Sobrenome*</label>
      </div>
    </div>
    <div class="_form_element _x27055826 _full_width row mb-3">
      <div class="_field-wrapper">
        <input class="form-control input-live-convidados" type="text" id="email" name="email" placeholder="nome@dominio.com" required />
        <label for="email" class="_form-label fw-light">Email*</label>
      </div>
    </div>
    <div class="_form_element _full_width row mb-3">
      <div class="_field-wrapper">
        <input class="form-control input-live-convidados" type="text" id="emailCompare" name="emailCompare"
          onpaste="return false;" ondrop="return false;" autocomplete="off" required />
        <label for="emailCompare" class="_form-label fw-light">Confirme seu Email*</label>
      </div>
    </div>
    <div class="_form_element _x43903596 _full_width row mb-3">
      <div class="_field-wrapper">
        <input class="form-control input-live-convidados phoneMask" type="text" id="phone" name="phone" placeholder="(00) 00000-0000" data-bs-toggle="tooltip" data-bs-placement="top" title="(00) 00000-0000"
          required />
        <label for="phone" class="_form-label fw-light">Celular*</label>
      </div>
    </div>
    <div class="_button-wrapper _full_width row mb-3 d-flex pc-center mx-1">
      <button class="btn background-white btn-white fw-bold fs-5" id="_form_24_submit" class="_submit" type="submit">
        Quero me inscrever
      </button>
    </div>
    <div class="_clear-element">
    </div>
  </div>
  <div class="_form-thank-you" style="display:none;">
  </div>
</form>
<script type="text/javascript">
window.cfields = [];
window._show_thank_you = function(id, message, trackcmp_url, email) {
  var form = document.getElementById('_form_' + id + '_'),
    thank_you = form.querySelector('._form-thank-you');
  form.querySelector('._form-content').style.display = 'none';
  thank_you.innerHTML = message;
  thank_you.style.display = 'block';
  const vgoAlias = typeof visitorGlobalObjectAlias === 'undefined' ? 'vgo' : visitorGlobalObjectAlias;
  var visitorObject = window[vgoAlias];
  if (email && typeof visitorObject !== 'undefined') {
    visitorObject('setEmail', email);
    visitorObject('update');
  } else if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
    // Site tracking URL to use after inline form submission.
    _load_script(trackcmp_url);
  }
  if (typeof window._form_callback !== 'undefined') window._form_callback(id);
};
window._show_error = function(id, message, html) {
  var form = document.getElementById('_form_' + id + '_'),
    err = document.createElement('div'),
    button = form.querySelector('button'),
    old_error = form.querySelector('._form_error');
  if (old_error) old_error.parentNode.removeChild(old_error);
  err.innerHTML = message;
  err.className = '_error-inner _form_error _no_arrow';
  var wrapper = document.createElement('div');
  wrapper.className = '_form-inner';
  wrapper.appendChild(err);
  button.parentNode.insertBefore(wrapper, button);
  document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
  if (html) {
    var div = document.createElement('div');
    div.className = '_error-html';
    div.innerHTML = html;
    err.appendChild(div);
  }
};
window._load_script = function(url, callback) {
  var head = document.querySelector('head'),
    script = document.createElement('script'),
    r = false;
  script.type = 'text/javascript';
  script.charset = 'utf-8';
  script.src = url;
  if (callback) {
    script.onload = script.onreadystatechange = function() {
      if (!r && (!this.readyState || this.readyState == 'complete')) {
        r = true;
        callback();
      }
    };
  }
  head.appendChild(script);
};
(function() {
  if (window.location.search.search("excludeform") !== -1) return false;
  var getCookie = function(name) {
    var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
    return match ? match[2] : null;
  }
  var setCookie = function(name, value) {
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000 * 60 * 60 * 24 * 365;
    now.setTime(expireTime);
    document.cookie = name + '=' + value + '; expires=' + now +
      ';path=/; Secure; SameSite=Lax;'; // cannot be HttpOnly
  }
  var addEvent = function(element, event, func) {
    if (element.addEventListener) {
      element.addEventListener(event, func);
    } else {
      var oldFunc = element['on' + event];
      element['on' + event] = function() {
        oldFunc.apply(this, arguments);
        func.apply(this, arguments);
      };
    }
  }
  var _removed = false;
  var form_to_submit = document.getElementById('_form_24_');
  var allInputs = form_to_submit.querySelectorAll('input, select, textarea'),
    tooltips = [],
    submitted = false;

  var getUrlParam = function(name) {
    var params = new URLSearchParams(window.location.search);
    return params.get(name) || false;
  };

  for (var i = 0; i < allInputs.length; i++) {
    var regexStr = "field\\[(\\d+)\\]";
    var results = new RegExp(regexStr).exec(allInputs[i].name);
    if (results != undefined) {
      allInputs[i].dataset.name = window.cfields[results[1]];
    } else {
      allInputs[i].dataset.name = allInputs[i].name;
    }
    var fieldVal = getUrlParam(allInputs[i].dataset.name);

    if (fieldVal) {
      if (allInputs[i].dataset.autofill === "false") {
        continue;
      }
      if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
        if (allInputs[i].value == fieldVal) {
          allInputs[i].checked = true;
        }
      } else {
        allInputs[i].value = fieldVal;
      }
    }
  }

  var remove_tooltips = function() {
    for (var i = 0; i < tooltips.length; i++) {
      tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
    }
    tooltips = [];
  };
  var remove_tooltip = function(elem) {
    for (var i = 0; i < tooltips.length; i++) {
      if (tooltips[i].elem === elem) {
        tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
        tooltips.splice(i, 1);
        return;
      }
    }
  };
  var create_tooltip = function(elem, text) {
    var tooltip = document.createElement('div'),
      arrow = document.createElement('div'),
      inner = document.createElement('div'),
      new_tooltip = {};
    if (elem.type != 'radio' && elem.type != 'checkbox') {
      tooltip.className = '_error';
      arrow.className = '_error-arrow';
      inner.className = '_error-inner';
      inner.innerHTML = text;
      tooltip.appendChild(arrow);
      tooltip.appendChild(inner);
      elem.parentNode.appendChild(tooltip);
    } else {
      tooltip.className = '_error-inner _no_arrow';
      tooltip.innerHTML = text;
      elem.parentNode.insertBefore(tooltip, elem);
      new_tooltip.no_arrow = true;
    }
    new_tooltip.tip = tooltip;
    new_tooltip.elem = elem;
    tooltips.push(new_tooltip);
    return new_tooltip;
  };
  var resize_tooltip = function(tooltip) {
    var rect = tooltip.elem.getBoundingClientRect();
    var doc = document.documentElement,
      scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0));
    if (scrollPosition < 40) {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
    } else {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
    }
  };
  var resize_tooltips = function() {
    if (_removed) return;
    for (var i = 0; i < tooltips.length; i++) {
      if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
    }
  };
  var validate_field = function(elem, remove) {
    var tooltip = null,
      value = elem.value,
      no_error = true;
    remove ? remove_tooltip(elem) : false;
    if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
    if (elem.getAttribute('required') !== null) {
      if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
        var elems = form_to_submit.elements[elem.name];
        if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
          no_error = elem.checked;
        } else {
          no_error = false;
          for (var i = 0; i < elems.length; i++) {
            if (elems[i].checked) no_error = true;
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, "Por favor, selecione uma opção.");
        }
      } else if (elem.type == 'checkbox') {
        var elems = form_to_submit.elements[elem.name],
          found = false,
          err = [];
        no_error = true;
        for (var i = 0; i < elems.length; i++) {
          if (elems[i].getAttribute('required') === null) continue;
          if (!found && elems[i] !== elem) return true;
          found = true;
          elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
          if (!elems[i].checked) {
            no_error = false;
            elems[i].className = elems[i].className + ' _has_error';
            err.push("Marcar %s é necessário".replace("%s", elems[i].value));
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, err.join('<br/>'));
        }
      } else if (elem.tagName == 'SELECT') {
        var selected = true;
        if (elem.multiple) {
          selected = false;
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected) {
              selected = true;
              break;
            }
          }
        } else {
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected && (!elem.options[i].value || (elem.options[i].value.match(/\n/g)))) {
              selected = false;
            }
          }
        }
        if (!selected) {
          elem.className = elem.className + ' _has_error';
          no_error = false;
          tooltip = create_tooltip(elem, "Por favor, selecione uma opção.");
        }
      } else if (value === undefined || value === null || value === '') {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Este campo é necessário.");
      }
    }
    if (no_error && (elem.id == 'field[]' || elem.id == 'ca[11][v]')) {
      if (elem.className.includes('phone-input-error')) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
      }
    }
    if (no_error && elem.name == 'phone') {
      if (jQuery('#phone').val().length < 14) {
        elem.className = elem.className + ' _has_error phone-input-error';
        no_error = false;
        tooltip = create_tooltip(elem, "Verifique se o celular está correto.");
      }
    }
    if (no_error && elem.name == 'email') {
      if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i) || jQuery(
          '#email').val() != jQuery('#emailCompare').val()) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Verifique se o e-mail está correto.");
      }
    }
    if (no_error && /date_field/.test(elem.className)) {
      if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Digite uma data válida.");
      }
    }
    tooltip ? resize_tooltip(tooltip) : false;
    return no_error;
  };
  var needs_validate = function(el) {
    if (el.getAttribute('required') !== null) {
      return true
    }
    if (el.name === 'email' && el.value !== "") {
      return true
    }

    if ((el.id == 'field[]' || el.id == 'ca[11][v]') && el.className.includes('phone-input-error')) {
      return true
    }

    return false
  };
  var validate_form = function(e) {
    var err = form_to_submit.querySelector('._form_error'),
      no_error = true;
    if (!submitted) {
      submitted = true;
      for (var i = 0, len = allInputs.length; i < len; i++) {
        var input = allInputs[i];
        if (needs_validate(input)) {
          if (input.type == 'tel') {
            addEvent(input, 'blur', function() {
              this.value = this.value.trim();
              validate_field(this, true);
            });
          }
          if (input.type == 'text' || input.type == 'number' || input.type == 'time') {
            addEvent(input, 'blur', function() {
              this.value = this.value.trim();
              validate_field(this, true);
            });
            addEvent(input, 'input', function() {
              validate_field(this, true);
            });
          } else if (input.type == 'radio' || input.type == 'checkbox') {
            (function(el) {
              var radios = form_to_submit.elements[el.name];
              for (var i = 0; i < radios.length; i++) {
                addEvent(radios[i], 'click', function() {
                  validate_field(el, true);
                });
              }
            })(input);
          } else if (input.tagName == 'SELECT') {
            addEvent(input, 'change', function() {
              validate_field(this, true);
            });
          } else if (input.type == 'textarea') {
            addEvent(input, 'input', function() {
              validate_field(this, true);
            });
          }
        }
      }
    }
    remove_tooltips();
    for (var i = 0, len = allInputs.length; i < len; i++) {
      var elem = allInputs[i];
      if (needs_validate(elem)) {
        if (elem.tagName.toLowerCase() !== "select") {
          elem.value = elem.value.trim();
        }
        validate_field(elem) ? true : no_error = false;
      }
    }
    if (!no_error && e) {
      e.preventDefault();
    }
    resize_tooltips();
    return no_error;
  };
  addEvent(window, 'resize', resize_tooltips);
  addEvent(window, 'scroll', resize_tooltips);

  var hidePhoneInputError = function(inputId) {
    var errorMessage = document.getElementById("error-msg-" + inputId);
    var input = document.getElementById(inputId);
    errorMessage.classList.remove("phone-error");
    errorMessage.classList.add("phone-error-hidden");
    input.classList.remove("phone-input-error");
  };

  var initializePhoneInput = function(input, defaultCountry) {
    return window.intlTelInput(input, {
      utilsScript: "https://unpkg.com/intl-tel-input@17.0.18/build/js/utils.js",
      autoHideDialCode: false,
      separateDialCode: true,
      initialCountry: defaultCountry,
      preferredCountries: []
    });
  }

  var setPhoneInputEventListeners = function(inputId, input, iti) {
    input.addEventListener('blur', function() {
      var errorMessage = document.getElementById("error-msg-" + inputId);
      if (input.value.trim()) {
        if (iti.isValidNumber()) {
          iti.setNumber(iti.getNumber());
          if (errorMessage.classList.contains("phone-error")) {
            hidePhoneInputError(inputId);
          }
        } else {
          showPhoneInputError(inputId)
        }
      } else {
        if (errorMessage.classList.contains("phone-error")) {
          hidePhoneInputError(inputId);
        }
      }
    });

    input.addEventListener("countrychange", function() {
      iti.setNumber('');
    });

    input.addEventListener("keydown", function(e) {
      var charCode = (e.which) ? e.which : e.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 8) {
        e.preventDefault();
      }
    });
  };

  var showPhoneInputError = function(inputId) {
    var errorMessage = document.getElementById("error-msg-" + inputId);
    var input = document.getElementById(inputId);
    errorMessage.classList.add("phone-error");
    errorMessage.classList.remove("phone-error-hidden");
    input.classList.add("phone-input-error");
  };


  var _form_serialize = function(form) {
    if (!form || form.nodeName !== "FORM") {
      return
    }
    var i, j, q = [];
    for (i = 0; i < form.elements.length; i++) {
      if (form.elements[i].name === "") {
        continue
      }
      switch (form.elements[i].nodeName) {
        case "INPUT":
          switch (form.elements[i].type) {
            case "tel":
              q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].previousSibling
                  .querySelector('div.iti__selected-dial-code').innerText) + encodeURIComponent(" ") +
                encodeURIComponent(form.elements[i].value));
              break;
            case "text":
            case "number":
            case "date":
            case "time":
            case "hidden":
            case "password":
            case "button":
            case "reset":
            case "submit":
              q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
              break;
            case "checkbox":
            case "radio":
              if (form.elements[i].checked) {
                q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value))
              }
              break;
            case "file":
              break
          }
          break;
        case "TEXTAREA":
          q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
          break;
        case "SELECT":
          switch (form.elements[i].type) {
            case "select-one":
              q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
              break;
            case "select-multiple":
              for (j = 0; j < form.elements[i].options.length; j++) {
                if (form.elements[i].options[j].selected) {
                  q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].options[j].value))
                }
              }
              break
          }
          break;
        case "BUTTON":
          switch (form.elements[i].type) {
            case "reset":
            case "submit":
            case "button":
              q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
              break
          }
          break
      }
    }
    return q.join("&")
  };
  var form_submit = function(e) {
    e.preventDefault();
    if (validate_form()) {
      // use this trick to get the submit button & disable it using plain javascript
      document.querySelector('#_form_24_submit').disabled = true;
      var serialized = _form_serialize(document.getElementById('_form_24_')).replace(/%0A/g, '\\n');
      var err = form_to_submit.querySelector('._form_error');
      err ? err.parentNode.removeChild(err) : false;
      _load_script('https://meditacaotranscedental.activehosted.com/proc.php?' + serialized + '&jsonp=true');
    }
    return false;
  };
  addEvent(form_to_submit, 'submit', form_submit);
})();
jQuery('.phoneMask').mask(phoneBehavior, spOptions);
</script>

<!-- Adicionando JQuery do VIACEP -->
<script defer src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

<!-- Adicionando Javascript do VIACEP -->
<script defer>
jQuery(document).ready(function() {

  function limpa_formulário_cep() {
    // Limpa valores do formulário de cep.
    jQuery(".form-cidade").val("");
    jQuery(".form-estado").val("");
  }

  //Quando o campo cep perde o foco.
  jQuery("#cep").blur(function() {

    //Nova variável "cep" somente com dígitos.
    var cep = jQuery(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if (validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        jQuery(".form-cidade").val("...");
        jQuery(".form-estado").val("...");

        //Consulta o webservice viacep.com.br/
        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

          if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            jQuery(".form-cidade").val(dados.localidade);
            jQuery(".form-estado").val(dados.uf);
          } //end if.
          else {
            //CEP pesquisado não foi encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
          }
        });
      } //end if.
      else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep();
    }
  });
});
</script>