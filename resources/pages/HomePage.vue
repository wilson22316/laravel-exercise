<template>
    <div>
        <h5>{{ title }}</h5>
    </div>

    <q-btn label="Click me" class="bg-primary text-white" @click="handleClick" />

    <q-btn label="Open Dialog" @click="openDialog" />

    <div class="q-pa-md">
        <p>Ref: {{ testRef }}</p>
        <p>Count: {{ addCount }}</p>
    </div>
    <q-btn label="點此+1" @click="clickToAdd"></q-btn>
</template>

<script setup>
import { ref, computed } from 'vue';
import { Dialog } from 'quasar';

const title = '這是首頁';

const openDialog = () => {
    Dialog.create({
        title: 'My Dialog',
        message: 'Hello, this is a dialog!'
    })
}

const testRef = ref(0);
const addCount = computed(() => {
    return testRef.value + 10;
})
const clickToAdd = (() => {
    testRef.value += 1;
})

const handleClick = () => {
    alert('Hello Quasar!')
}
</script>