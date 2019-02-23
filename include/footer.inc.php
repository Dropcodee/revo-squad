<? if ($_SERVER['REQUEST_URI']=="/"): ?>

<!-- Go To Top
        ============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- scripts for home page
        ============================================= -->

<!-- External JavaScripts
        ============================================= -->
<script src="<?=$AssetsJsUrl?>/jquery.js"></script>
<script src="<?=$AssetsJsUrl?>/plugins.js"></script>
<script src="<?=$AssetsJsUrl?>/photography-addons.js"></script>

<!-- Footer Scripts
        ============================================= -->
<script src="<?=$AssetsJsUrl?>/functions.js"></script>

<script>
(function() {
    var support = {
            transitions: Modernizr.csstransitions
        },
        // transition end event name
        transEndEventNames = {
            'WebkitTransition': 'webkitTransitionEnd',
            'MozTransition': 'transitionend',
            'OTransition': 'oTransitionEnd',
            'msTransition': 'MSTransitionEnd',
            'transition': 'transitionend'
        },
        transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
        onEndTransition = function(el, callback) {
            var onEndCallbackFn = function(ev) {
                if (support.transitions) {
                    if (ev.target != this) return;
                    this.removeEventListener(transEndEventName, onEndCallbackFn);
                }
                if (callback && typeof callback === 'function') {
                    callback.call(this);
                }
            };
            if (support.transitions) {
                el.addEventListener(transEndEventName, onEndCallbackFn);
            } else {
                onEndCallbackFn();
            }
        };

    new GridFx(document.querySelector('.grid'), {
        imgPosition: {
            x: -0.5,
            y: 1
        },
        onOpenItem: function(instance, item) {
            instance.items.forEach(function(el) {
                if (item != el) {
                    var delay = Math.floor(Math.random() * 50);
                    el.style.WebkitTransition = 'opacity .5s ' + delay +
                        'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay +
                        'ms cubic-bezier(.7,0,.3,1)';
                    el.style.transition = 'opacity .5s ' + delay +
                        'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay +
                        'ms cubic-bezier(.7,0,.3,1)';
                    el.style.WebkitTransform = 'scale3d(0.1,0.1,1)';
                    el.style.transform = 'scale3d(0.1,0.1,1)';
                    el.style.opacity = 0;
                }
            });
        },
        onCloseItem: function(instance, item) {
            instance.items.forEach(function(el) {
                if (item != el) {
                    el.style.WebkitTransition = 'opacity .4s, -webkit-transform .4s';
                    el.style.transition = 'opacity .4s, transform .4s';
                    el.style.WebkitTransform = 'scale3d(1,1,1)';
                    el.style.transform = 'scale3d(1,1,1)';
                    el.style.opacity = 1;

                    onEndTransition(el, function() {
                        el.style.transition = 'none';
                        el.style.WebkitTransform = 'none';
                    });
                }
            });
        }
    });
})();

jQuery(document).ready(function($) {
    var swiperSlider = $('.swiper-parent')[0].swiper;
    swiperSlider.enableKeyboardControl();
});

<
?
elseif($_SERVER['REQUEST_URI'] == "/admin.php" || $_SERVER['REQUEST_URI'] == "/search.php" || $_SERVER[
        'REQUEST_URI'] == "/dashboard.php"): ? >

    <
    script src = "<?=$AssetsJsUrl?>/uikit.min.js" >
</script>
<script src="<?=$AssetsJsUrl?>/uikit-icons.min.js"></script>

<? elseif($_SERVER['REQUEST_URI']=="/admin.php") : ?>
<script src="<?=$AssetsJsUrl?>/admin.js"></script>
<? elseif($_SERVER['REQUEST_URI']=="/dashboard.php") : ?>
<script src="<?=$AssetsJsUrl?>/tabulator.min.js">
</script>
<script src="<?=$AssetsJsUrl?>/users.js">
</script>
<script>
$(document).on("click", "#logout", e => {
    axios.get("http://localhost:8080/revo/server/public/logout")
        .then((result) => {
            localStorage.clear()
            location.href = "index.php"
        }).catch((err) => {
            localStorage.clear()
            location.href = "index.php"
        });
})
</script>
<? endif; ?>