import { defineConfig } from 'vite';
import { quasar, transformAssetUrls } from '@quasar/vite-plugin';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'], // 這裡設定了需要打包的資源
            refresh: true, // 當變更 PHP 或 Vue 組件時會自動刷新
        }),
        vue({
            template: { transformAssetUrls }
        }),
        quasar({
            // 注釋掉Sass變數，使用默認設置
            // sassVariables: 'src/quasar-variables.sass'
        })
    ],
    build: {
        outDir: 'public/build', // 確保編譯後的檔案放到 Laravel 可以讀取的位置
        emptyOutDir: true,
    },
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});
