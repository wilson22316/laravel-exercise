import DatePicker from "vue-datepicker-next";

const locale = {
    months: [
        "一月",
        "二月",
        "三月",
        "四月",
        "五月",
        "六月",
        "七月",
        "八月",
        "九月",
        "十月",
        "十一月",
        "十二月",
    ],
    monthsShort: [
        "1月",
        "2月",
        "3月",
        "4月",
        "5月",
        "6月",
        "7月",
        "8月",
        "9月",
        "10月",
        "11月",
        "12月",
    ],
    weekdays: [
        "星期日",
        "星期一",
        "星期二",
        "星期三",
        "星期四",
        "星期五",
        "星期六",
    ],
    weekdaysShort: ["週日", "週一", "週二", "週三", "週四", "週五", "週六"],
    weekdaysMin: ["日", "一", "二", "三", "四", "五", "六"],
    firstDayOfWeek: 0,
    firstWeekContainsDate: 4,
    meridiemParse: /上午|下午/,
    meridiem: function (hour) {
        return hour < 12 ? "上午" : "下午";
    },
    isPM: function (input) {
        return input === "下午";
    },
};

const lang = {
    formatLocale: locale,
    yearFormat: "YYYY年",
    monthFormat: "MMM",
    monthBeforeYear: false,
};

// 設置語言
DatePicker.locale("zh-tw", lang);

export default lang;
