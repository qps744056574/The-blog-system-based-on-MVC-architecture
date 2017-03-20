;(function(window) {

  var svgSprite = '<svg>' +
    '' +
    '<symbol id="icon-dianzan" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M839.712 572.864c0 0 32.768 10.816 28.96 67.136-4.064 59.872-41.152 68.288-41.152 68.288s10.784 15.072 1.792 54.592c-9.088 39.872-47.328 63.84-47.328 63.84s-5.6 42.112-35.104 64.768c-60.576 46.464-203.776 1.504-272.128-11.008-58.464-10.752-222.144-35.072-259.744-28.224l0-0.16c-37.6 9.408-83.616-346.464-46.016-355.904 37.632-9.376 123.808-32.96 170.816-53.472 47.008-20.544 89.344-117.408 142.208-153.76 147.456-101.312 104.064-171.552 141.696-175.904 37.632 0 146.624-5.76 158.464 132.736 1.472 63.488-22.496 83.104-51.392 132.288-19.744 33.6 13.568 19.2 73.056 29.696 38.368 6.784 65.184 50.144 64.512 98.784C867.456 565.664 839.712 572.864 839.712 572.864zM809.12 499.456c0-21.056-16.224-42.08-49.216-45.28-70.944-6.848-125.664-2.88-101.6-56.864 34.4-77.184 62.208-111.296 62.208-160.864 0-40-19.776-72.704-51.808-72.704-32 3.68-9.792 75.584-135.296 161.824-45.024 30.912-134.048 157.344-174.08 174.816-40 17.472-105.024 24.896-137.024 32.928-32 8 6.016 277.664 38.016 269.696L256.736 803.2c32-5.856 173.248 14.912 223.008 24 58.24 10.656 186.144 41.312 229.92 12.16 26.336-17.536 22.656-57.344 22.656-57.344s37.44-18.048 41.344-52.672c4.032-35.328-13.408-52.448-13.408-52.448s45.888 5.792 52.704-42.24c6.752-47.52-38.656-67.328-38.656-67.328S809.12 549.696 809.12 499.456z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-huifu" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M394.356115 414.882102c0-23.008017-18.646686-41.654702-41.654702-41.654702-23.006993 0-41.654702 18.646686-41.654702 41.654702 0 23.006993 18.646686 41.653679 41.654702 41.653679C375.709429 456.535781 394.356115 437.890118 394.356115 414.882102z"  ></path>' +
    '' +
    '<path d="M560.974923 415.760099c0-23.00597-18.647709-41.653679-41.653679-41.653679-23.008017 0-41.655725 18.647709-41.655725 41.653679 0 23.008017 18.647709 41.655725 41.655725 41.655725C542.328237 457.415824 560.974923 438.768115 560.974923 415.760099z"  ></path>' +
    '' +
    '<path d="M727.593731 414.882102c0-23.008017-18.647709-41.654702-41.655725-41.654702-23.00597 0-41.653679 18.646686-41.653679 41.654702 0 23.006993 18.647709 41.653679 41.653679 41.653679C708.947046 456.535781 727.593731 437.890118 727.593731 414.882102z"  ></path>' +
    '' +
    '<path d="M872.944144 178.008206c-14.480806-23.057135-40.121789-38.395472-69.359694-38.395472l-603.750657 0c-29.236881 0-54.877865 15.338337-69.359694 38.395472-7.912204 12.598946-12.504802 27.493168-12.504802 43.469024l0 386.809743c0 45.213761 36.651758 81.864496 81.864496 81.864496l122.17048 0 0-0.023536c0.312108 0.01228 0.623193 0.023536 0.938372 0.023536 12.951987 0 23.451108-10.595312 23.451108-23.661909 0-13.068643-10.499122-23.663956-23.451108-23.663956-0.7552 0-1.50119 0.039909-2.237971 0.109494l-91.628884 0c-33.909297 0-61.398372-27.489074-61.398372-61.398372l0-331.551208c0-33.909297 27.489074-61.398372 61.398372-61.398372l542.352285 0c33.909297 0 61.398372 27.489074 61.398372 61.398372l0 331.551208c0 33.909297-27.489074 61.398372-61.398372 61.398372L529.288247 642.935098l-6.291287 6.260587c-0.002047 0.001023-0.00307 0.002047-0.004093 0.00307L368.397906 802.228057c-8.538467 8.452509-7.402597 23.443945 2.537799 33.485649 9.939373 10.041704 24.918529 11.330046 33.456996 2.87856l149.960407-148.44182 249.232364 0c45.213761 0 81.864496-36.650735 81.864496-81.864496l0-386.809743C885.448946 205.501374 880.857371 190.606129 872.944144 178.008206z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '</svg>'
  var script = function() {
    var scripts = document.getElementsByTagName('script')
    return scripts[scripts.length - 1]
  }()
  var shouldInjectCss = script.getAttribute("data-injectcss")

  /**
   * document ready
   */
  var ready = function(fn) {
    if (document.addEventListener) {
      if (~["complete", "loaded", "interactive"].indexOf(document.readyState)) {
        setTimeout(fn, 0)
      } else {
        var loadFn = function() {
          document.removeEventListener("DOMContentLoaded", loadFn, false)
          fn()
        }
        document.addEventListener("DOMContentLoaded", loadFn, false)
      }
    } else if (document.attachEvent) {
      IEContentLoaded(window, fn)
    }

    function IEContentLoaded(w, fn) {
      var d = w.document,
        done = false,
        // only fire once
        init = function() {
          if (!done) {
            done = true
            fn()
          }
        }
        // polling for no errors
      var polling = function() {
        try {
          // throws errors until after ondocumentready
          d.documentElement.doScroll('left')
        } catch (e) {
          setTimeout(polling, 50)
          return
        }
        // no errors, fire

        init()
      };

      polling()
        // trying to always fire before onload
      d.onreadystatechange = function() {
        if (d.readyState == 'complete') {
          d.onreadystatechange = null
          init()
        }
      }
    }
  }

  /**
   * Insert el before target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var before = function(el, target) {
    target.parentNode.insertBefore(el, target)
  }

  /**
   * Prepend el to target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var prepend = function(el, target) {
    if (target.firstChild) {
      before(el, target.firstChild)
    } else {
      target.appendChild(el)
    }
  }

  function appendSvg() {
    var div, svg

    div = document.createElement('div')
    div.innerHTML = svgSprite
    svgSprite = null
    svg = div.getElementsByTagName('svg')[0]
    if (svg) {
      svg.setAttribute('aria-hidden', 'true')
      svg.style.position = 'absolute'
      svg.style.width = 0
      svg.style.height = 0
      svg.style.overflow = 'hidden'
      prepend(svg, document.body)
    }
  }

  if (shouldInjectCss && !window.__iconfont__svg__cssinject__) {
    window.__iconfont__svg__cssinject__ = true
    try {
      document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>");
    } catch (e) {
      console && console.log(e)
    }
  }

  ready(appendSvg)


})(window)