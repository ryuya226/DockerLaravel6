import './bootstrap'
import Vue from 'vue'
// ルーティングの定義をインポートする
import router from './router'
// ルートコンポーネントをインポートする
import App from './App.vue'
// ストアをインポートする
import store from './store'

const createApp = async () => {
  await store.dispatch('auth/currentUser')
  
  new Vue({
    el: '#app',
    router, // ルーティングの定義を読み込む(VueRouterのインスタンス)
    store, // ストアを読み込む(Vuexのインスタンス)
    components: { App }, // ルートコンポーネントの使用を宣言する
    template: '<App />' // ルートコンポーネントを描画する
  })
}

createApp()