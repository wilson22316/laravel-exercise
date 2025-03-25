<template>
    <div>
        <h5>Electricity Bills</h5>

        <div>原本:{{ num }}</div>
        <div>雙倍:{{ doubleNum }}</div>
        <q-btn @click="clickToAdd" label="原本+1" class="bg-blue-6 text-white"></q-btn>

        <br><br>

        <!-- 選擇月份 -->
        <date-picker v-model:value="timeRange" type="month" range value-type="format" format="YYYY-MM"
            @change="fetchBills()">
        </date-picker>

        <!-- 帳單 -->
        <div v-for="(item, index) in bills" :key="item + index" class="flex">
            <div>帳單月份:{{ item.billing_month }}</div> &emsp;
            <div>總費用:{{ formatNumber(item.consumption_charge) }}</div>
        </div>
    </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue';
// import DatePicker from "vue-datepicker-next";
import moment from "moment";

// --------------- 1️.ref/reactive ---------------
const bills = ref([]);
const timeRange = ref([moment().format("YYYY-01"), moment().format("YYYY-12")]);
const num = ref(1);

// --------------- 2️.computed ---------------
const doubleNum = computed(() => num.value * 2)

// --------------- 3️.watch/watchEffect ---------------


// --------------- 4️.生命週期 ---------------
// 組件掛載後執行撈取資料
onMounted(fetchBills);

// --------------- 5️.Methods ---------------
// 撈取資料
async function fetchBills() {
    const params = {
        startTime: moment(timeRange.value[0]).startOf("month").format("YYYY-MM-DD"),
        endTime: moment(timeRange.value[1]).endOf("month").format("YYYY-MM-DD")
    }
    // console.log(params.startTime, params.endTime)

    try {
        // 使用全域設定的 axios，不需要 /api 前綴
        const response = await window.axios.get('/payment_receipt', { params: params });
        // console.log('取得帳單:', response.data.data);
        bills.value = response.data.data; // 將資料存儲到 bills
    } catch (error) {
        console.error('Error fetching electricity bills:', error);
    }
}

// 隨機乘一個數
const clickToAdd = () => {
    num.value *= 100 * Math.random();
}

// 千位符 & 小數點後幾位
const formatNumber = (value, decimal = 2) => {
    if (value === null || value === undefined || isNaN(value)) return '0.00';
    return Number(value).toLocaleString('en-US', { minimumFractionDigits: decimal, maximumFractionDigits: decimal });
}
</script>