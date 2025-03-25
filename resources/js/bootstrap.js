import axios from 'axios';

// 創建一個 Axios 實例並配置
const api = axios.create({
    baseURL: '/api', // 直接使用相對路徑，更簡潔且避免跨域問題
    timeout: 15000,
    headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
        'X-Requested-With': 'XMLHttpRequest'
    }
});

// 請求攔截器 - 例如添加認證令牌
api.interceptors.request.use(config => {
    // 如果有令牌，可以在這裡添加
    // const token = localStorage.getItem('token');
    // if (token) {
    //     config.headers.Authorization = `Bearer ${token}`;
    // }
    return config;
});

// 回應攔截器 - 處理常見錯誤
api.interceptors.response.use(
    response => response,
    error => {
        if (error.response) {
            // 根據狀態碼處理
            switch (error.response.status) {
                case 401: // 未授權
                    // 處理登出或重新導向登入頁
                    break;
                case 422: // 表單驗證錯誤
                    // 處理表單錯誤
                    break;
                case 500: // 伺服器錯誤
                    console.error('伺服器錯誤，請稍後再試');
                    break;
            }
        }
        return Promise.reject(error);
    }
);

window.axios = api;