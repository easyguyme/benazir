"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

(function () {
    "use strict";

    var template = '<style>:host(date-widget) {display:block; margin-top:20px;}.container{background-color:#fff;border-radius:0.3125rem;box-shadow:0 0 0.3571rem #dadada;position:relative;margin:0.625rem 0;}.container .left{position:absolute;left:0;top:0;bottom:0;width:30%;color:#fff;border-radius:0.3571rem 0 0 0.3571rem;text-align:center;padding:1.429rem 0 0 0;transition:background-color 0.5s ease;}.container .left .month{font-weight:300;font-size:1.286rem;line-height:1.571rem;text-transform:uppercase;}.container .left .day{font-size:2.571rem;line-height:2.857rem;}.container .right{margin-left:30%;padding:1.429rem;color:#333;}.container .right .day-long {font-weight:300;font-size:1.286rem;line-height:1.571rem;text-transform:uppercase;}.container .right .time {font-weight: bold;font-size:2.571rem;line-height:2.857rem;}.container.primary .left {background-color:#1c3d73;}.container.primary .day-long {color:#1c3d73;}.container.secondary .left {background-color:#1971c4;}.container.secondary .day-long {color:#1971c4;}.container.tertiary .left {background-color:#d06600;}.container.tertiary .day-long {color:#d06600;}</style><div class="container"><div class="left"><div class="month"></div><div class="day"></div></div><div class="right"><div class="day-long"></div><div class="time"></div></div></div>';
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

    var DateWidget = function (_HTMLElement) {
        _inherits(DateWidget, _HTMLElement);

        function DateWidget() {
            _classCallCheck(this, DateWidget);

            return _possibleConstructorReturn(this, _HTMLElement.apply(this, arguments));
        }

        // Fires when an instance of the element is created.

        DateWidget.prototype.createdCallback = function createdCallback() {
            this.createShadowRoot().innerHTML = template;
            //Grab the elements from the shadow root
            this.$container = this.shadowRoot.querySelector('.container');
            this.$month = this.shadowRoot.querySelector('.month');
            this.$day = this.shadowRoot.querySelector('.day');
            this.$dayLong = this.shadowRoot.querySelector('.day-long');
            this.$time = this.shadowRoot.querySelector('.time');
            this.updateTheme(this.getAttribute('theme'));
            //Call the draw function initially
            this.draw();
            //Call the draw function every second to update the time
            var that = this;
            setInterval(function () {
                that.draw();
            }, 1000);
            setInterval(function () {
                switch (that.getAttribute('theme')) {
                    case "primary":
                        that.updateTheme("secondary");
                        break;
                    case "secondary":
                        that.updateTheme("tertiary");
                        break;
                    case "tertiary":
                        that.updateTheme("primary");
                        break;
                }
            }, 6000);
        };

        // Fires when an instance was inserted into the document.

        DateWidget.prototype.attachedCallback = function attachedCallback() {};

        // Fires when an attribute was added, removed, or updated.

        DateWidget.prototype.attributeChangedCallback = function attributeChangedCallback(attrName, oldVal, newVal) {
            switch (attrName) {
                case "theme":
                    this.updateTheme(newVal);
                    break;
            }
        };

        DateWidget.prototype.draw = function draw() {
            this.date = new Date();
            this.$month.innerHTML = months[this.date.getMonth()];
            this.$day.innerHTML = this.date.getDate();
            this.$dayLong.innerHTML = days[this.date.getDay()].toUpperCase();
            this.$time.innerHTML = this.date.toLocaleTimeString();
        };

        DateWidget.prototype.updateTheme = function updateTheme(theme) {
            var val = "primary";
            if (["primary", "secondary", "tertiary"].indexOf(theme) > -1) {
                val = theme;
            }
            this.setAttribute("theme", val);
            this.$container.className = "container " + val;
        };

        return DateWidget;
    }(HTMLElement);

    document.registerElement('date-widget', DateWidget);
})();