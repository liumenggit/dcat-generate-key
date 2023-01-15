(function (w, $) {

    $.fn.generateKey = function (options) {
        // 初始化
        let self = $(this);
        let clone = self.clone();
        //读取默认配置
        options = options || {};
        options.$el = $(this);
        // console.log('options', options)
        // 读取设置配置
        let config = {}
        $.each(self[0].attributes, function (index, element) {
            config[this.name] = this.value
        });
        // console.log('config', config)

        const settings = $.extend({
            upClass: 'default',
            downClass: 'default',
            center: true,
            length: 10,
            lower: true,
            upper: true,
            number: true,
            symbol: true
        }, options, config);

        // console.log('最终配置', settings)

        function getVal() {
            let val = clone.val();

            if (!val || val === "NaN") {
                return 0;
            }

            return parseInt(val);
        }

        //设置值
        function setText(n) {
            clone.focus().val(n);
            return true;
        }

        //创建插入元素
        const generateButton = $("<button type='button'>生成密钥</button>").attr({
            'class': 'btn btn-' + settings.upClass, 'disabled': options.disabled
        }).click(function () {
            // console.log('run', generatePassword(settings.length, settings.lower, settings.upper, settings.number, settings.symbol))
            setText(generatePassword(settings.length, settings.lower, settings.upper, settings.number, settings.symbol));
        });

        const group = $("<div class='input-group'></div>");
        //插入元素
        clone.appendTo(group);
        $("<span class='input-group-btn'></span>").append(generateButton).appendTo(group);
        self.replaceWith(group);
    };
})(window, jQuery);
