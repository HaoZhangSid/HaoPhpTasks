// vite.config.js
import { defineConfig } from 'vite';
import { copy } from 'vite-plugin-copy';


export default defineConfig({
  root: './src',
  plugins: [
    copy({
      targets: [
        { src: 'index.php', dest: '../public' } // 确保这里的路径是正确的
      ],
      hook: 'writeBundle' // 可以指定插件运行的 Vite 生命周期钩子
    })
  ],
  build: {
    outDir: '../public',
    emptyOutDir: true,
  },
});
